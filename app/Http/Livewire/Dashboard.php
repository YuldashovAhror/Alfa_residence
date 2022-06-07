<?php

namespace App\Http\Livewire;

use App\Models\Building;
use App\Models\Floor;
use App\Models\Phase;
use Livewire\Component;

class Dashboard extends Component
{
    public $phases, $buildings, $floors,
        $current_phase,
        $selected_phase,
        $current_building,
        $selected_building,
        $current_floor,
        $selected_floor
    ;

    public function selected_phase(){
        $this->current_phase = Phase::find($this->selected_phase)?->name;
    }

    public function selected_building(){
        $this->current_building = Building::find($this->selected_building)?->name;
    }

    public function selected_floor(){
        $this->current_floor = Floor::find($this->selected_floor)?->name;
    }

    public function updatePhase(){
        $phase = Phase::find($this->selected_phase);
        $phase->name = $this->current_phase;
        $phase->save();
        $this->selected_phase = '';
        $this->current_phase = '';
    }

    public function updateBuilding(){
        $phase = Building::find($this->selected_building);
        $phase->name = $this->current_building;
        $phase->save();
        $this->selected_building = '';
        $this->current_building = '';
    }

    public function updateFloor(){
        $phase = Floor::find($this->selected_floor);
        $phase->name = $this->current_floor;
        $phase->save();
        $this->selected_floor = '';
        $this->current_floor = '';
    }

    public function deletePhase(){
        $phase = Phase::find($this->selected_phase);
        $phase->delete();
        $this->current_phase = '';
        $this->selected_phase = '';
    }

    public function deleteFloor(){
        $phase = Floor::find($this->selected_floor);
        $phase->delete();
        $this->current_floor = '';
        $this->selected_floor = '';
    }

    public function deleteBuilding(){
        $phase = Building::find($this->selected_building);
        $phase->delete();
        $this->current_building = '';
        $this->selected_building = '';
    }

    public function render()
    {
        $this->current_phase = $this->current_phase;
        $this->current_building = $this->current_building;
        $this->current_floor = $this->current_floor;
        $this->phases = Phase::all();
        $this->buildings = Building::all();
        $this->floors = Floor::all();
        return view('livewire.dashboard');
    }
}
