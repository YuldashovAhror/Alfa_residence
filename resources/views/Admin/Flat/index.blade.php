<x-app-layout>
    <a href="{{Route('flat.create')}}" class="btn btn-success" style="margin-right: 0px; margin-bottom: 20px;">Add Floor</a>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <h4 class="card-title">Floor</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    
                    {{-- <?php $num=1; ?>
                    @foreach($floors as $floor)
                        <tr>
                            <td>{{$num++}}</td>
                            <td>{{$floor->name}}</td>
                            
                            
                            <td>
                                <form action="{{route('floor.edit', $floor->id )}}" method="get" style="margin-bottom: 5px;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $floor->id }}">Delete</a>
                            </td>

                            <div id="myModal{{ $floor->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('floor.destroy', $floor->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">O'chirish</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
            {{-- {{ $news->links() }} --}}
            </div>
        </div>
    </div>
</div>
</x-app-layout>    