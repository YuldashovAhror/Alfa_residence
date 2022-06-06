div<x-app-layout>

    <form action="{{route('building.update',$buildings->id )}}" method="Post">
        @csrf
        @method('PUT')
        <div class="card-body">

            <h1>Phase Edit</h1>
            <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                <select name="phase">
                    <option value="{{null}}">Select</option>
                    @foreach($phases as $phase)
                        <option value="{{$phase->id}}">{{$phase->name}}</option>
                    @endforeach
                </select>
                <div class="" style="width: 80%;" >
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$buildings->name}}" >
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
            </div>
            
        </div>    
    </form>
</x-app-layout>     