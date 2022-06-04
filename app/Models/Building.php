<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phase;
use App\Models\Floor;
use App\Models\Flat;

class Building extends Model
{
    use HasFactory;

    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }

    public function floors()
    {
        return $this->hasMany(Floor::class);
    }

    public function flats()
    {
        return $this->hasMany(Flat::class);
    }
}
