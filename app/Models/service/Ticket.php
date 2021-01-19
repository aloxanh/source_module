<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Model;

use App\Models\shared\Comment;
use App\Models\shared\Company;
use App\Models\shared\File;
use App\Models\shared\Team;
use App\Models\service\ServiceCategory;

use App\User;
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
    public function createBy(){
        return $this->belongsTo(User::class,'create_by');
    }
    public function requestBy(){
        return $this->belongsTo(User::class,'request_by');
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }

}
