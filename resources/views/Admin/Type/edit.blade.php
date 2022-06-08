<x-app-layout>

    <form action="{{route('type.update',$types->id )}}" method="Post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">

            <h1>Тип Изменить</h1>
            
            <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px; ">
                <ul style="padding-top: 20px">
                    <li>
                        
                        <div class="" style="width: 80%;" >
                            <label for="name">Name</label>
                            <input type="text" style="border-radius: 1rem" class="form-control" id="name" name="name" value="{{$types->name}}" >
                        </div>
                    </li>
                    <li>

                        <div class="" style="width: 80%;" >
                            <label style="padding-top: 20px" for="img">Photo</label>
                            <input type="file" class="form-control" id="img" name="img" style="background-color: rgb(188, 222, 250);">
                        </div>
                    </li>
                    <li>

                        
                        <label for="name" style="padding-top: 20px">Last Photo</label >
                        <img style="width: 200px; heigh:150px" src="{{$types->photo}}" alt="">
                        
                    </li>
                    <div>
                        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Сохранить</button>
                    </div>
            </ul>
            
        </div>    
    </form>
</x-app-layout>     