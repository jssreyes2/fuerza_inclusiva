<?php

namespace App\Repositories;

use App\Models\Job;

class JobRepository extends Job
{

    public static function getMyPots($userId = null, $filterPost = null)
    {
        $query = Job::join('companies', 'published_works.company_id', '=', 'companies.id')
            ->join('categories', 'published_works.category_id', '=', 'categories.id')
            ->join('countries', 'published_works.country_id', '=', 'countries.id')
            ->join('educations', 'published_works.education_id', '=', 'educations.id')
            ->select('published_works.*', 'published_works.id AS id_published', 'companies.user_id', 'companies.user_id', 'companies.company_name', 'companies.company_logo', 'categories.category_name', 'countries.name', 'educations.education_name', 'companies.id', 'companies.company_slug', 'companies.person_phone', 'companies.company_desciption');

        if (!empty($userId)) {
            $query->where('companies.user_id', '=', $userId);
        }

        if (isset($filterPost) and isset($filterPost['status'])) {
            $query->where('categories.category_status', '=', $filterPost['status']);
        }

        if (isset($filterPost) and isset($filterPost['id'])) {
            $query->where('published_works.id', '=', $filterPost['id']);
        }

        if (isset($filterPost) and isset($filterPost['search'])) {
            $query->where('published_works.job_title', 'LIKE', "%".$filterPost['search']."%");
        }

        if (isset($filterPost) and isset($filterPost['category_id'])) {
            $query->where('published_works.category_id', '=', $filterPost['category_id']);
        }

        if (isset($filterPost) and isset($filterPost['country_id'])) {
            $query->where('published_works.country_id', '=', $filterPost['country_id']);
        }

        $query->orderBy('published_works.id', 'DESC');

        return $query;
    }


    public static function deletedPostCompany($id)
    {
        Job::where('company_id', '=', $id)->delete();
    }


}


