<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    public $timestamps = false;

    public function projects()
    {
        $projects = DB::table('project')->get();
        return $projects;
    }
    public function entity()
    {
        return $this->hasMany(Entity::class);
    }

}
