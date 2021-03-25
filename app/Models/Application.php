<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Application extends Model
{
    protected $fillable = [];

    protected $table = "applications";


    public function users()
    {
        return $this->hasMany('App\Models\User');
    }



    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

    public static function saveApplication($request)
    {
        $applications = new self();
        $user = Auth::user();

        $applications->user_id = $user->id;
        $applications->published_id = $request->id;
        $applications->save();

        return $applications;
    }

}
