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




@endsection
