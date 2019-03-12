@extends('layout.master')
@section('title', 'Add Product')
@section('content')



    <div class="content">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong> Add New Product </strong> 
                            </div>
                            <form class ="form area" method ="post" class = "contact-form text-right">
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

                                    <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1" name= "category_id">
                                        <option value="" label="default"></option>
                                        <option value="United States">Bags</option>
                                        <option value="United Kingdom">Belts</option>
                                        <option value="Afghanistan">Shoes</option>
                                        <option value="Aland Islands">Watches</option>
                                        <option value="Albania">Wears</option>
                                        
                                    </select>
                                    </div>
                                    </div>
                
                                    
                                    
                                </div>
                                <div class="form-group">
                                        <div class="col col-md-6"><label for="file-multiple-input" class=" form-control-label">Upload Multiple images</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                                </div></br>
                            
                                <div class ="col-md-6" style="padding-left:40%; padding-bottom:5%; ">
                                <button type="submit" class="btn btn-primary btn-sm" width ="100px"> Submit </button>
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
