<x-app-layout>
    <div class="col-12">
        <div class="card">
            <form action="{{route('flat.update', $flats->id)}}" method="POST">
                
                @method('PUT')
                @csrf
                <div class="card__handler">
                    <div class="first__card">
                        <h1>The Phase element</h1>

                            <label for="phase">Choose a Phase:</label>
                            <select name="phase" id="phase">
                                <option value="{{null}}">Phase</option>
                                @foreach($phases as $phase)
                                    <option value="{{$phase->id}}">{{$phase->name}}</option>
                                @endforeach
                            </select>
                            
                            <br>
                            <label class="name" for="">Name:</label>
                            <br>
                            <input class="input" type="text" name="name" value="{{$flats->name}}">
                        
                    </div>

                    <div class="second__card">
                        <h1>The Building element</h1>

                        
                            <label for="building">Choose a Building:</label>
                            <select name="building" id="building">
                                <option value="{{null}}">Building</option>
                                @foreach($buildings as $building)
                                    <option value="{{$building->id}}">{{$building->name}}</option>
                                @endforeach
                            </select>
                            
                            <br>
                            <label class="name" for="">Size:</label>
                            <br>
                            <input class="input" type="text" name="size" value="{{$flats->size }}">
                        
                    </div>

                    <div class="third__card">
                        <h1>The Floor element</h1>

                        
                            <label for="floor">Choose a Floor:</label>
                            <select name="floor" id="floor">
                                <option value="{{null}}">Floor</option>
                                @foreach($floors as $floor)
                                    <option value="{{$floor->id}}">{{$floor->name}}</option>
                                @endforeach
                            </select>
                            
                            <br>
                            <label class="name" for="">quantity:</label>
                            <br>
                            <input class="input" type="text" name="quantity" value="{{$flats->quantity}}">
                    </div>

                    <div class="fourth__card" class="name" style="margin-top: -6rem">
                        <h1>The Type element</h1>

                            <label for="type">Choose a Type:</label>
                            <select name="type" id="type">
                                <option value="{{null}}">Type</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>

                            
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem ">Update</button>
            </form>

        </div>
        <style>
            .card__handler {
                padding: 1rem 13rem 1rem 1rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            h1{
                margin-bottom: 1.5rem;
                font-size: 1.2rem;
            }
            label{
                font-size: 1rem;
                margin-right: 0.5rem;
            }
            select{
                border-radius: 1rem;
            }
            .input{
                border-radius: 1rem;
            }
            #cars {
                width: 7rem;

            }
            .name{
                margin-top: 1.5rem;
            }
        </style>
    </div>
</x-app-layout>