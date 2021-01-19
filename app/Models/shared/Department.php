<?php

namespace App\Models\shared;

use Illuminate\Database\Eloquent\Model;
use App\Models\shared\Company;
class Department extends Model
{
    public $timestamps = false;
    public function company(){
        return $this->hasOne(Company::class);
    }
}
