<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Flat;

class Phase extends Model
{
    use HasFactory;

    public function buildings()
    {
        return $this->hasMany(Building::class);
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
