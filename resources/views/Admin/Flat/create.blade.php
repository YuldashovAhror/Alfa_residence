<x-app-layout>
    <div class="col-12">
        <div class="card">
<<<<<<< HEAD
            <form action="{{route('flat.store')}}" method="POST">
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
                            <input class="input" type="text" name="name">
                        
=======
            <form action="/action_page.php">
                <div class="card__handler">
                    <div class="first__card">
                        <h1>The Phase elements</h1>

                            <label for="cars">Choose a Phase:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                    
>>>>>>> 799ae6025dec5f5e52cff383305bbed876583956
                    </div>

                    <div class="second__card">
                        <h1>The Building element</h1>

                        
<<<<<<< HEAD
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
                            <input class="input" type="text" name="size">
                        
=======
                            <label for="cars">Choose a Building:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                    
>>>>>>> 799ae6025dec5f5e52cff383305bbed876583956
                    </div>

                    <div class="third__card">
                        <h1>The Floor element</h1>

<<<<<<< HEAD
                        
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
                            <input class="input" type="text" name="quantity">
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

                    <button type="submit" class="btn btn-primary" style="background-color:blue; margin:0 0 1rem 1rem "  >Add</button>
            </form>

=======
                    
                            <label for="cars">Choose a Floor:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                        
                    </div>

                    <div class="fourth__card">
                        <h1>The Type element</h1>

                    
                            <label for="cars">Choose a Type:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                        </div>
                    </div>
                    <div>
                        <label for="name">Flat Name</label>
                        <input type="text" name="name">
                    </div>
                    
                    <div>
                        <label for="name">Flat Quantity</label>
                        <input type="text" name="quantity">
                    </div>
                    
                </div>
            </div>

            </form>
>>>>>>> 799ae6025dec5f5e52cff383305bbed876583956
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