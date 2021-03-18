<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Job;
use App\Repositories\CategoryRepository;
use App\Repositories\JobRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user();

        $filter = ['status' => Category::CATEGORY_ACTIVE];

        $categories = CategoryRepository::getCategories($filter)->get();

        $filterPost=['status' => Job::JOB_ACTIVE];

        $jobs=JobRepository::getMyPots(null, $filterPost)->paginate(10);

        $countries = Country::query()->orderBy('name', 'ASC')->get();

        return view('frontend.index', ['user' => $user, 'categories' => $categories, 'jobs' =>$jobs, 'countries' => $countries]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!$request->country_id){
            return response()->json(['status' => 'fail', 'alert' => 'Por favor seleccione un país']);
        }

        Job::saveJob($request);

        return response()->json(['status' => 'success', 'alert' => env('MSJ_SUCCESS')]);
    }



    public function update(Request $request)
    {
        if(!$request->country_id){
            return response()->json(['status' => 'fail', 'alert' => 'Por favor seleccione un país']);
        }

        Job::updateJob($request);

        return response()->json(['status' => 'success', 'alert' => env('MSJ_SUCCESS'), 'edit' => true]);
    }


    public function myPosts()
    {
        $user=Auth::user();

        $myPosts=JobRepository::getMyPots($user->id, null)->get();

        return view('frontend.my-posts', ['user' => $user, 'myPosts' => $myPosts]);
    }



    public function postDeleted(Request $request)
    {
        Job::deletedJob($request->id);

        return response()->json(['status' => 'success', 'alert' => env('MSJ_SUCCESS')]);
    }


    public function jobLists(Request $request)
    {
        $user=Auth::user();

        $filterJobs=$request->filter;

        $jobs=JobRepository::getMyPots(null, $filterJobs)->paginate(10);

        $filter = ['status' => Category::CATEGORY_ACTIVE];

        $categories = CategoryRepository::getCategories($filter)->get();

        $countries = Country::query()->orderBy('name', 'ASC')->get();

        return view('frontend.job-list', [
            'user' => $user,
            'jobs' => $jobs,
            'categories' => $categories,
            'countries' => $countries,
            'filterJobs' => $filterJobs
        ])->withErrors('Oops! no existe registro para mostrar');;
    }

}
