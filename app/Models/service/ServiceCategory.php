<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Model;
use App\Models\service\Ticket;
class ServiceCategory extends Model
{
    public function tickets()
    {
        return $this->belongsToMany(Ticket::class);
    }
}
