<div class="form-group">
    <input type="hidden" id="simpleinput" class="form-control" name="id">
</div>
<div class="form-group">
    <label for="simpleinput">Name</label>
    <input type="text" id="simpleinput" class="form-control" name="name"
           value="{{old('name') ?? $product->name }}">
    @error('name')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="simpleinput">Image</label>
    <input type="text" id="simpleinput" class="form-control" name="img"
           value="{{$product->img }}">
    @error('img')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="simpleinput">Description</label>
    <input type="text" id="simpleinput" class="form-control" name="description"
           value="{{old('description') ?? $product->description }}">
    @error('description')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="example-select">Categories</label>
    <select class="form-control" id="example-select" name="product_category_id" >
        <option value="">Choose category</option>
        @foreach($categories as $each)
            <option value=" {{ $each->id}}"
                    {{old('product_category_id')!=null && old('product_category_id')==$each->id? 'selected':''}}
            >{{$each->title}}</option>
        @endforeach
    </select>
{{--  --}}
    @error('product_category_id ')
    <div class="alert alert-warning" role="alert">
        <i class="dripicons-wrong mr-2"></i><strong>{{$message}}</strong>
    </div>
    @enderror
</div>
