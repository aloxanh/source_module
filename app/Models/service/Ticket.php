<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Model;

use App\Models\shared\Comment;
use App\Models\shared\Company;
use App\Models\shared\File;
use App\Models\service\ServiceCategory;
class Ticket extends Model
{
    /**
     * Get the ticket's comment
     */
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
    public function files(){
        return $this->morphMany(File::class,'fileable');
    }
    public function category(){
        return $this->belongsTo(ServiceCategory::class,'service_category_id');
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }

}
