<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Project;

class Skill extends Model
{
    use HasFactory;

    /*add
    Fillable to protect
    colls */
    protected $fillable = ['name', 'image'];

    public function project()
    {
        // add  relationship
        return $this->hasMany(Project::class);
    }
}
