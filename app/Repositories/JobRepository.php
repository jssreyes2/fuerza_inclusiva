<?php

namespace App\Repositories;

use App\Models\Job;

class JobRepository extends Job
{

    public static function getMyPots($userId=null, $filterPost = null)
    {
        $query = Job::join('companies', 'published_works.company_id', '=', 'companies.id')
            ->join('categories', 'published_works.category_id', '=', 'categories.id')
            ->join('countries', 'published_works.country_id', '=', 'countries.id')
            ->join('educations', 'published_works.education_id', '=', 'educations.id')
            ->select('published_works.*', 'companies.user_id', 'companies.user_id', 'companies.company_name', 'categories.category_name', 'countries.name', 'educations.education_name');

        if (!empty($userId)) {
            $query->where('companies.user_id', '=', $userId);
        }

        if (isset($filterPost) and !empty($filterPost['status'])) {
            $query->where('category_status', '=', $filterPost['status']);
        }

        $query->orderBy('published_works.id', 'DESC');

        return $query;
    }
}


