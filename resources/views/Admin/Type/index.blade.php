<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-right: 0px; margin-bottom: 20px;">Добавить Тип</a>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Добавить Тип</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ Route('type.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="" style="width: 80%;" >
                                                        <label for="name">Name</label>
                                                        <input type="text"class="form-control" id="name" name="name" placeholder="Add Phase name ..." style="border-radius: 1rem">
                                                    </div>
                                                    <div class="" style="width: 80%; padding-top:5px" >
                                                        <label for="img">Photo</label>
                                                        <input type="file" class="form-control" id="img" name="img" placeholder="Add Phase name ...">
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Сохранить</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="card-title">Type</h4>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php $num=1; ?>
                                    @foreach($types as $type)
                                        <tr>
                                            <td>{{$num++}}</td>
                                            <td>{{$type->name}}</td>
                                            <td><img style="width: 200px; height:150px" src="{{$type->photo}}" alt=""></td>
                                            
                                            
                                            <td>
                                                <form action="{{route('type.edit', $type->id )}}" method="get" style="margin-bottom: 5px;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary" style="background-color: blue">Изменить</button>
                                                </form>
                                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $type->id }}">Удалить</a>
                                            </td>

                                            <div id="myModal{{ $type->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('type.destroy', $type->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger" style="background-color: blue">Удалить</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $news->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>    