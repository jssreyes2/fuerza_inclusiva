<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $jobs=JobRepository::getMyPots(null, $filterPost)->get();

        return view('frontend.index', ['user' => $user, 'categories' => $categories, 'jobs' =>$jobs]);
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


    public function postLists()
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

}
