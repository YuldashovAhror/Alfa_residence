<x-app-layout>
    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-right: 0px; margin-bottom: 20px;">Add Phase</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Phase Qo'shish</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ Route('phase.store') }}" method="POST">
                                    @csrf
                                    <div class="" style="width: 80%;" >
                                        <label for="name">Name</label>
                                        <input type="text"class="form-control" id="name" name="name" placeholder="Add Phase name ...">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="card-title">Phases</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $num=1; ?>
                    @foreach($phases as $phase)
                        <tr>
                            <td>{{$num++}}</td>
                            <td>{{$phase->name}}</td>
                            
                            
                            <td>
                                <form action="{{route('phase.edit', $phase->id )}}" method="get" style="margin-bottom: 5px;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $phase->id }}">Delete</a>
                            </td>

                            <div id="myModal{{ $phase->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('phase.destroy', $phase->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">O'chirish</button>
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
</x-app-layout>    