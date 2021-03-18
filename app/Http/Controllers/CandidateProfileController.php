<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Education;
use App\Models\Industry;
use App\Models\UserExperience;
use App\Models\UserInstitution;
use App\Models\UserProfile;
use App\Repositories\IndustryRepository;
use App\Services\PhotoImportServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CandidateProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $filter = ['status' => Industry::INDUSTRY_ACTIVE];

        $industries = IndustryRepository::getInsdustries($filter)->get();

        $countries = Country::query()->orderBy('name', 'ASC')->get();

        $education = Education::query()->orderBy('education_name', 'ASC')->get();

        $profile = null;
        if ($user->userProfile instanceof UserProfile) {
            $profile = $user->userProfile;
        }

        return view('frontend.candidate-profile', [
            'user' => $user,
            'industries' => $industries,
            'countries' => $countries,
            'education' => $education,
            'profile' => $profile,
        ]);
    }


    public function candidateList()
    {
        $user = Auth::user();

        return view('frontend.candidate-list', ['user' => $user]);
    }


    public function saveProfile(Request $request)
    {

        if (!$request->country_id) {
            return response()->json(['status' => 'fail', 'alert' => 'Por favor seleccione un país']);
        }

        $profile = UserProfile::saveProfile($request);

        $PhotoImportServices = new PhotoImportServices();

        $PhotoImportServices->importPhotoProfileUser($profile, $request);

        return response()->json(['status' => 'success', 'alert' => env('MSJ_SUCCESS'), 'edit' => false]);
    }



    public function updateProfile(Request $request)
    {

        if (!$request->country_id) {
            return response()->json(['status' => 'fail', 'alert' => 'Por favor seleccione un país']);
        }

        $profile = UserProfile::updateProfile($request);

        $PhotoImportServices = new PhotoImportServices();

        $PhotoImportServices->importPhotoProfileUser($profile, $request);

        return response()->json(['status' => 'success', 'alert' => env('MSJ_SUCCESS'), 'edit' => false]);
    }

}
