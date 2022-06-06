div<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <form action="{{route('phase.update',$phases->id )}}" method="Post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <h1>Phase Edit</h1>
                        <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                            <div class="" style="width: 80%;" >
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$phases->name}}" >
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
                        </div>
                        
                    </div>    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>     