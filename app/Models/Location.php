<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function venues()
    {
        return $this->hasMany(Venue::class, 'location_id', 'id');
    }
}
