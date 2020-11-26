<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruitmentNews extends Model
{
    protected $table = 'recruitment_news';

    protected $fillable = ['org_id', 'author_id', 'major_id', 'title', 'content', ' address', 'city', 'start_time', 'end_time', 'interview_start_time', 'interview_end_time'];

    public function org()
    {
        return $this->belongsTo('App\Organization', 'org_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function major()
    {
        return $this->belongsTo('App\Major', 'major_id', 'id');
    }

    public function job_seekers()
    {
        return $this->belongsToMany(
            'App\User',
            'job_seekers',
            'rn_id',
            'user_id',
        );
    }
}