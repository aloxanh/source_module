<?php

namespace App\Models\shared;

use Illuminate\Database\Eloquent\Model;
use App\Models\service\ServiceCategory;
class Team extends Model
{
    public function servicecates(){
        return $this->morphByMany(ServiceCategory::class,"teamable");
    }
}
