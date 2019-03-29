@extends('layout.master')
@section('title', 'Add Product')
@section('content')

  <div class ="col-xs-6 col-sm-8">
          <div class ="row">
              <div class = "top-bar-center">
                  <ul class = "menu">
                      <li><h3 class ="menu_text">Go back Home</h3></li>
                      <strong><li><a href = "/admin/index">Home</a></li></strong>
                  </ul>
              </div> 
          </div>  
  </div>


  <div align ="center">
        <div class ="col-xs-6 col-sm-8">
          <div class ="row">
            <div class = "top-bar-center">
              <ul class = "menu">
                <li><h2 class "menu_text">{{$category->category_name}}</h2></li>
                <a class="btn btn-primary mb-3" href="/admin/addproduct" role="button">Add new {{$category->catego}}</a>
              </ul>
            </div>
          </div>
        </div>
  </div>
    


  <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product name</th>
                <th scope="col">Created At</th>
                <th scope="col">Category Id</th>
              </tr>
            </thead>
            <tbody>
            @foreach($category->product as $products)
              <tr>
                  <th scope ='row'>{{$products->id}}</th>
                  <td>{{$products->Product_name}}</td>
                      <td>{{$products->created_at->toDateTimeString()}}</td>
                      <td>{{$products->category_id}}</td>
                
              </tr>  
            @endforeach
  </table>
       
@endsection
@include('layout.footer')


<?php echo '<a class="btn btn-primary mb-3" href="" role="button"> View</a>';  ?>