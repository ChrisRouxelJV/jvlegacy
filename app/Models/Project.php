<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'legacy';
    protected $table = 'projects';
    public $timestamps = false;

    protected $primaryKey = 'project_id'; // <- Important
    public $incrementing = false; // if it's a string or non-auto ID

    public function updates()
    {
        return $this->hasMany(\App\Models\Update::class, 'project_id', 'project_id');
    }
}
