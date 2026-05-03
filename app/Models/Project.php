<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected $table = 'Project';

    protected $fillable = ['name', 'image','project_url' ,'skill_id'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
