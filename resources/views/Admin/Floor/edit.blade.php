div<x-app-layout>

    <form action="{{route('floor.update',$floors->id )}}" method="Post">
        @csrf
        @method('PUT')
        <div class="card-body">

            <h1>Phase Edit</h1>
            <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                <select name="building">
                    <option value="{{null}}">Select Building</option>
                    @foreach($buildings as $building)
                        <option value="{{$building->id}}">{{$building->name}}</option>
                    @endforeach
                </select>
                <select name="phase">
                    <option value="{{null}}">Select Phase</option>
                    @foreach($phases as $phase)
                        <option value="{{$phase->id}}">{{$phase->name}}</option>
                    @endforeach
                </select>
                <div class="" style="width: 80%;" >
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$floors->name}}" >
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
            </div>
            
        </div>    
    </form>
</x-app-layout>     