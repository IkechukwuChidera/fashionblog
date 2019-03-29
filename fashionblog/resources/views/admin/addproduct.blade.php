@extends('layout.master')
@section('title', 'Add Product')
@section('content')

    <div class ="col-xs-6 col-sm-6">
            <div class ="row">
                <div class = "top-bar-center">
                    <ul class = "menu">
                        <li><h3 class ="menu_text">Go back Home</h3></li>
                        <li><a href = "/admin/index">Home</a></li>
                    </ul>
                </div> 
            </div>  
    </div>



    <div class="content">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong> Add New Product </strong> 

                                <div class ="row">

                                    @if ($errors->any())

                                        <div class="alert alert-danger">

                                            <strong>Whoops!</strong> There were some problems with your product input.<br><br>

                                            <ul>

                                                @foreach ($errors->all() as $error)

                                                    <li>{{ $error }}</li>

                                                @endforeach

                                            </ul>

                                        </div>

                                    @endif

                                    <div>
                                        @if (Session::has('success'))
                                            <div class="alert alert-info">{{ Session::get('success') }}</div>
                                        @endif
                                    </div>



                                    
                                </div>
                               





                            </div>
                            <form class ="form area" method ="post" class = "contact-form text-right" action = "{{route('prod')}}" enctype = "multipart/form-data">
                                {{csrf_field()}}
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class=" form-control-label">Product Name</label>
                                        <div class="input-group">
                                            <input class="form-control" name="Product_name" placeholder="Product Name" >
                                        </div>
                                    </div></br>
                                    
                                    <div class="form-group">
                                        <label class=" form-control-label">Product Description</label>
                                        <div class="input-group">
                                            <input class="form-control" name="Description" placeholder= "Product Description">
                                        
                                        </div>
                                    
                                    </div></br>

                                    <div class="form-group">
                                        <label class=" form-control-label">Product Price</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                            <input class="form-control" name="Price" placeholder= "Product Price">
                                        </div>
                                        <small class="form-text text-muted">ex. 99-9999999</small>
                                    </div></br>

                                    <div class="form-group col-sm-6">
                                        <strong class="card-title"> Select Category</strong>
                                    

                                        <div class="card-body">
                                            <select data-placeholder="Choose a Category..." class="standardSelect" tabindex="1" name= "category_id">
                                                <option value="2">bags</option>
                                                <option value="5">belts</option>
                                                <option value="4">shoes</option>
                                                <option value="3">watches</option>
                                                <option value="1">wears</option>  
                                            </select>
                                        </div>

                                    </div>
                                    </div>
                
                                    
                                    
                                </div>
                                <div class="form-group">
                                        <div class="col col-md-6"><label for="file-multiple-input" class=" form-control-label"><strong> Upload Multiple images </strong></label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="Image[]"  class="form-control-file" multiple></div>
                                </div></br>
                            
                                <div class ="col-md-6" style="padding-left:40%; padding-bottom:5%; ">
                                   <button type="submit" class="btn btn-primary btn-sm" width ="50px"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                   
    
                </div>
            </div>
        </div>
    </div>
    
   
                




  <!-- Right Panel -->

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>
@endsection
