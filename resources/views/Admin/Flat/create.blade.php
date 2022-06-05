<x-app-layout>
<div class="card-body">
    <form action="{{route('flat.store')}}" method="post">
        {{ csrf_field() }}
        <h1>Category</h1>
        <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
            <div class="form-group" style="width: 80%; padding-right: 5px;">
                <label for="exampleInputEmail1">Category name</label>
                {{-- <select name="cat_name" id="" class="form-control">
                    <option value="{{null}}">Select</option>
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                    @endforeach
                </select> --}}
            </div>
            <div class="" style="width: 80%; padding: 0 5px;" >
                <label for="category_add">Name Uz</label>
                <input type="text" class="form-control" id="category_add" name="cat_name_uz" placeholder="Add category ...">
            </div>
            {{-- <div class="" style="width: 80%; padding-right: 5px; padding-left:5px" >
                <label for="category_add">Name Ru</label>
                <input type="text" class="form-control" id="category_add" name="cat_name_ru" placeholder="Add category ...">
            </div>
            <div class="" style="width: 80%; padding: 0 5px;" >
                <label for="category_add">Name En</label>
                <input type="text" class="form-control" id="category_add" name="cat_name_en" placeholder="Add category ...">
            </div>

            <input name="btn" value="Saqlash" class="bg-primary" style=" height: 37px; font-size: 16px; color: #fff; border: none; border-radius: 5px;"  type="submit">
            <input name="btn" value="Delete" class="bg-danger" style=" height: 37px; font-size: 16px; color: #fff; border: none; border-radius: 5px;"  type="submit"> --}}
        </div>
    </form>
</div>
</x-app-layout> 