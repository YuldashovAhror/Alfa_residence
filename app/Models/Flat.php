<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phase;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Type;

class Flat extends Model
{
    use HasFactory;

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
