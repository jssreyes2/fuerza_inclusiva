<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Education;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostAJobController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $companies = $user->companies;

        $countries = Country::query()->orderBy('name', 'ASC')->get();

        $education = Education::query()->orderBy('education_name', 'ASC')->get();

        $filter = ['status' => Category::CATEGORY_ACTIVE];

        $categories = CategoryRepository::getCategories($filter)->get();

        return view('frontend.post-a-job', [
            'user' => $user,
            'categories' => $categories,
            'companies' => $companies,
            'countries' => $countries,
            'education' => $education
        ]);
    }


    public function editPostAJob($slug)
    {


        dd(slug);

        $user = Auth::user();

        $companies = $user->companies;

        $countries = Country::query()->orderBy('name', 'ASC')->get();

        $filter = ['status' => Category::CATEGORY_ACTIVE];

        $categories = CategoryRepository::getCategories($filter)->get();

        $education = Education::query()->orderBy('education_name', 'ASC')->get();

        $postAJob=null;
        foreach ($companies as $company) {

            if($postAJob=$company->jobs->where('id', '=', $request->id)->first()){
               break;
            }
        }

        return view('frontend.post-a-job', [
            'user' => $user,
            'categories' => $categories,
            'companies' => $companies,
            'countries' => $countries,
            'education' => $education,
            'postAJob' => $postAJob
        ]);

    }

}
