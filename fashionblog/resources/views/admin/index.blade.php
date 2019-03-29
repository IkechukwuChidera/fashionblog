@extends('layout.master')
@section('title', 'Index Page')
@section('content')

<div class ="col-xs-6 col-sm-8">
        <div class ="row">
            <div class = "top-bar-center">
                <ul class = "menu">
                    <li><h3 class ="menu_text">Create Category or Product</h3></li>
                    <li><a href = "/admin/index">Home</a></li>
                    <li><a href ="/admin/addcategory">Add Category</a></li>
                    <li><a href ="/admin/addproduct">Add Product</a></li>
                </ul>
            </div> 
        </div>  
</div>


<table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category name</th>
              <th scope="col">Created At</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <th scope="row">{{$category->id}}</th>
                <td><a href="{{route('details',$category->id)}}">{{$category->category_name}}</td>
                    <td>{{$category->created_at->toDateTimeString()}}</td>
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('admin/' . $category->id . '/edit') }}">
                  	<button type="button" class="btn btn-warning">Edit</button>
                  </a>&nbsp;
                  <form action="{{url('admin', [$category->id])}}" method="POST">
    					<input type="hidden" name="_method" value="DELETE">
   						<input type="hidden" name="_token" value="{{ csrf_token() }}">
   						<input type="submit" class="btn btn-danger" value="Delete"/>
   				  </form>
              </div>
			</td>
            </tr>
            @endforeach
          </tbody>
        </table>




@endsection
