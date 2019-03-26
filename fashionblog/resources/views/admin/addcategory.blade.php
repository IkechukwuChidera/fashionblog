@extends('layout.master')

@section('title', 'Add Category')
@section('content')

<div class ="col-xs-6 col-sm-6">
        <div class ="row">
            <div class = "top-bar-center">
                <ul class = "menu">
                    <li><h3 class ="menu_text">Create Category</h3></li>
                    <li><a href = "/admin/index">Home</a></li>
                    <li><a href ="/admin/addcategory">Add Category</a></li>
                </ul>
            </div> 
        </div>  
</div>

<form class = "form-area" method ="post" class ="contact-form-text-right" >
{{csrf_field()}}

                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class=" form-control-label">Category Name</label>
                                        <div class="input-group">
                                            <input class="form-control" name="category_name" placeholder="Category Name" >
                                        </div>
                                    </div></br>
                                    
                                    <div class ="col-md-6" style="padding-left:40%; padding-bottom:5%; ">
                                      <button type="submit" class="btn btn-primary btn-sm" width ="50px"> Submit </button>
                                    </div>
                                 </div>

</form>
@endsection