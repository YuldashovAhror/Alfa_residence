<div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
<<<<<<< HEAD
                                            <h5 class="modal-title" id="myModalLabel">Добавить фазу</h5>
=======
                                            <h5 class="modal-title" id="myModalLabel">Phase Qo'shish</h5>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ Route('phase.store') }}" method="POST">
                                                @csrf
<<<<<<< HEAD
                                                <div class="row">
                                                    <div class="col-md-9" >
                                                        <label for="name">Название фазы</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="..." style="border-radius: 1rem">
                                                    </div>
                                                    <div class="col-md-1" style="margin-top: 28px;">
                                                        <button class="btn btn-primary" type="submit" style="border-radius: 1rem; background-color: blue">Сохранить</button>
                                                    </div>
=======
                                                <div class="" style="width: 80%;" >
                                                    <label for="name">Name</label>
                                                    <input type="text"class="form-control" id="name" name="name" placeholder="Add Phase name ..." style="border-radius: 1rem">
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Submit</button>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div id="myModal_building" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_building" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
<<<<<<< HEAD
                                            <h5 class="modal-title" id="myModalLabel_building">Добавить дом</h5>
=======
                                            <h5 class="modal-title" id="myModalLabel_building">Building Qo'shish</h5>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ Route('building.store') }}" method="POST">
                                                @csrf
<<<<<<< HEAD
                                                <div class="row">
                                                       <label for="name">Выберите фазу</label>
                                                       <select name="phase" style="border-radius: 1rem">
                                                           @foreach($phases as $phase)
                                                               <option value="{{$phase->id}}">{{$phase->name}}</option>
                                                           @endforeach
                                                       </select>
                                                </div>
                                                <div class="row mt-2">
                                                        <label for="name">Название дома</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="..." style="border-radius: 1rem">
                                                </div>
                                                <div class="row mt-2">
                                                    <button type="submit" class="btn btn-primary" style="background-color: blue; border-radius: 1rem">Сохранить</button>
=======
                                                <select name="phase" style="border-radius: 1rem">
                                                    <option value="{{null}}">Select</option>
                                                    @foreach($phases as $phase)
                                                        <option value="{{$phase->id}}">{{$phase->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="" style="width: 80%;" >
                                                    <label for="name">Name</label>
                                                    <input type="text"class="form-control" id="name" name="name" placeholder="Add Building name ..." style="border-radius: 1rem">
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Submit</button>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="myModal_floor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_floor" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
<<<<<<< HEAD
                                            <h5 class="modal-title" id="myModalLabel_floor">Добавить этаж</h5>
=======
                                            <h5 class="modal-title" id="myModalLabel_floor">Building Qo'shish</h5>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ Route('floor.store') }}" method="POST">
                                                @csrf
<<<<<<< HEAD
                                                <div class="row">
                                                    <label for="name">Выберите дом</label>
                                                    <select name="building_id" style="border-radius: 1rem">
                                                        @foreach($buildings as $building)
                                                            <option value="{{$building->id}}">{{$building->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="row mt-2">
                                                        <label for="name">Номер этажа</label>
                                                        <input type="text"class="form-control" id="name" name="name" placeholder="..." style="border-radius: 1rem">
                                                </div>
                                                <div class="row mt-2">
                                                    <button type="submit" class="btn btn-primary" style="border-radius: 2rem; background-color: blue">Сохранить</button>
=======
                                                <select name="building_id" style="border-radius: 1rem">
                                                    <option value="{{null}}">Select</option>
                                                    @foreach($buildings as $building)
                                                        <option value="{{$building->id}}">{{$building->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="" style="width: 80%;" >
                                                    <label for="name">Name</label>
                                                    <input type="text"class="form-control" id="name" name="name" placeholder="Add Building name ..." style="border-radius: 1rem">
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Submit</button>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        <div style="display: flex; padding-left:2rem; margin-top: 1.1rem">
                            <div class="col-4">
<<<<<<< HEAD
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-bottom: 20px; border-radius: 1.5rem;">Добавить фазу</a>
                                <div style="display: flex; flex-direction: column;">
                                    <label for="cars">Фазы:</label>
=======
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-bottom: 20px; border-radius: 1.5rem;">Add Phase</a>
                                <div style="display: flex; flex-direction: column;">
                                    <label for="cars">Phases:</label>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                    <select wire:model="selected_phase" wire:change="selected_phase" name="phase" style="border-radius: 1rem; width: 10rem">
                                        <option value="{{null}}">Select Phase</option>
                                        @foreach($phases as $phase)
                                            <option value="{{$phase->id}}">{{$phase->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
    
                                @if($current_phase)
                                    <div>
<<<<<<< HEAD
                                        <h1  style="padding-top: 2rem">Изменить:</h1>
                                        <input wire:model="current_phase" type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">
                                        <div style="padding-top: 1rem; margin-left:8rem; ">
                                            <button wire:click="updatePhase" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Изменить</button>
                                            <button wire:click="deletePhase" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Удалить</button>
=======
                                        <h1  style="padding-top: 2rem">Edit Phase:</h1>
                                        <input wire:model="current_phase" type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">
                                        <div style="padding-top: 1rem; margin-left:8rem; ">
                                            <button wire:click="updatePhase" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Update</button>
                                            <button wire:click="deletePhase" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Delete</button>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                        </div>
                                    </div>
                                @endif
                            </div>
    
                            <div class="col-4">
<<<<<<< HEAD
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal_building" style="margin-bottom: 20px; border-radius: 1.5rem; ">Добавить здание</a>
                                <div  style="display: flex; flex-direction: column;">
                                    <label for="cars">Здания:</label>
                                    <select wire:model="selected_building" wire:change="selected_building" name="phase" style="border-radius: 1rem; width: 10rem">
=======
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal_building" style="margin-bottom: 20px; border-radius: 1.5rem; ">Add Building</a>
                                <div  style="display: flex; flex-direction: column;">
                                    <label for="cars">Building:</label>
                                    <select wire:model="selected_building" wire:change="selected_building" name="phase" style="border-radius: 1rem; width: 10rem">
                                        <option value="{{null}}">Select Building</option>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                        @foreach($buildings as $building)
                                            <option value="{{$building->id}}">{{$building->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if($current_building)
                                    <div>
<<<<<<< HEAD
                                        <h1  style="padding-top: 2rem">Изменить:</h1>
                                        <input wire:model="current_building" type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">
                                        <div style="padding-top: 1rem; margin-left:8rem; ">
                                            <button wire:click="updateBuilding" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Изменить</button>
                                            <button wire:click="deleteBuilding" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Удалить</button>
=======
                                        <h1  style="padding-top: 2rem">Edit Building:</h1>
                                        <input wire:model="current_building" type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">
                                        <div style="padding-top: 1rem; margin-left:8rem; ">
                                            <button wire:click="updateBuilding" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Update</button>
                                            <button wire:click="deleteBuilding" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Delete</button>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                        </div>
                                    </div>
                                @endif    
                            </div>

                            <div class="col-4">
<<<<<<< HEAD
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal_floor" style="margin-bottom: 20px; border-radius: 1.5rem;">Добавить этаж</a>
                                <div  style="display: flex; flex-direction: column;">
                                    <label for="cars">Этажи:</label>
                                    <select wire:model="selected_floor" wire:change="selected_floor" name="floor" style="border-radius: 1rem; width: 10rem">
=======
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal_floor" style="margin-bottom: 20px; border-radius: 1.5rem;">Add Floor</a>
                                <div  style="display: flex; flex-direction: column;">
                                    <label for="cars">Floor:</label>
                                    <select wire:model="selected_floor" wire:change="selected_floor" name="floor" style="border-radius: 1rem; width: 10rem">
                                        <option value="{{null}}">Select Building</option>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                        @foreach($floors as $floor)
                                            <option value="{{$floor->id}}">{{$floor->name}}</option>
                                        @endforeach
                                    </select>

                                    
                                </div>
                                
                                @if($current_floor)
                                    <div>
<<<<<<< HEAD
                                        <h1  style="padding-top: 2rem">Изменить:</h1>
                                        <input wire:model="current_floor" type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">
                                        <div style="padding-top: 1rem; margin-left:8rem; ">
                                            <button wire:click="updateFloor" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Изменить</button>
                                            <button wire:click="deleteFloor" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Удалить</button>
=======
                                        <h1  style="padding-top: 2rem">Edit Floor:</h1>
                                        <input wire:model="current_floor" type="text" name="name" style="margin-top:0.7rem; width:19rem; border-radius: 2rem">
                                        <div style="padding-top: 1rem; margin-left:8rem; ">
                                            <button wire:click="updateFloor" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem; border-radius: 1rem ">Update</button>
                                            <button wire:click="deleteFloor" class="btn btn-danger" style="background-color:rgb(248, 6, 31); margin:0 0 1rem 0.3rem; border-radius: 1rem ">Delete</button>
>>>>>>> 3613e0a65028bb77f932c81167df7b0e302d19f4
                                        </div>
                                    </div>
                                @endif    
                            </div>
                            
                        </div>
                                            
                    </div>
                </div>
            </div>
        </div>
    

</div>
