<div>
   <div class="card">
       <div class="card-header">
           <h3>Добавить</h3>
       </div>
       <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="form-label">Ключ</label>
                    <input type="text" class="form-control" style="border-radius: 1rem" wire:model="key">
                </div>
                <div class="col-md-4">
                    <label for="input">RU</label>
                    <input type="text" class="form-control" style="border-radius: 1rem" wire:model="ru">
                </div>
                <div class="col-md-4">
                    <label for="input">UZ</label>
                    <input type="text" class="form-control" style="border-radius: 1rem" wire:model="uz">
                </div>
                <div class="col-md-1" style="margin-top: 30px">
                    <button class="btn btn-success" wire:click="save()">сохранить</button>
                </div>
            </div>
       </div>
   </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Ключ</th>
                                <th>RU</th>
                                <th>UZ</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php  $k=1 ?>
                                @foreach($words as $data)
                            <tr>
                                    <th scope="row">{{ $k }}</th>
                                    <td>
                                        @if($id_edit == $data->id)
                                            <input type="text" value="{{ $data->key }}" class="form-control" style="border-radius: 1rem" wire:model="key_edit" readonly>
                                        @else
                                            {{ $data->key }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($id_edit == $data->id)
                                            <input type="text" value="{{ $data->ru }}" class="form-control" style="border-radius: 1rem" wire:model="key_ru">
                                        @else
                                            {{ $data->ru }}
                                        @endif
                                    </td>
                                    <td>
                                        @if($id_edit == $data->id)
                                            <input type="text" value="{{ $data->uz }}" class="form-control" style="border-radius: 1rem" wire:model="key_uz">
                                        @else
                                            {{ $data->uz }}
                                        @endif
                                    </td>
                                    <td style="display: flex">
                                        <button class="btn btn-success" wire:click="edit({{ $data->id }})" @if($id_edit == $data->id) style="display: none;" @else style="margin-right: 5px" @endif><i class="bx bx-pencil"></i></button>
                                        @if($id_edit == $data->id)
                                            <button class="btn btn-warning" wire:click="update({{ $data->id }})" @if($id_edit == $data->id) style="display: block; margin-right: 5px" @endif><i class="bx bx-save"></i></button>
                                        @endif
                                        <button class="btn btn-danger"  wire:click="delete()" style="display: block"><i class="bx bx-trash"></i></button>
                                    </td>
                                    <?php $k++ ?>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
