<?php

namespace App\Models\shared;

use Illuminate\Database\Eloquent\Model;
use App\Models\shared\Department;

class Company extends Model
{

    public $timestamps = false;
    public function departments(){
        return $this->hasMany(Department::class);
    }
}
