@extends('layout.master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Product
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('admin.update', $product->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="share_name" value={{ $product->Product_name }} />
        </div>
        <div class="form-group">
          <label for="price">Price :</label>
          <input type="text" class="form-control" name="share_price" value={{ $product->Price }} />
        </div>
        <div class="form-group">
          <label for="quantity">Description:</label>
          <input type="text" class="form-control" name="share_qty" value={{ $product->Description }} />
        </div>
        <div class="form-group">
          <label for="quantity">Image:</label>
          <input type="text" class="form-control" name="share_qty" value={{ $product->Image }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
