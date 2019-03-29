<?php

namespace App\Http\Controllers;

use Session;
use App\Category;
use App\Product;
use App\Image as Pictures;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Product Codes
    public function index()
    { 
      $categories = Category::all();
      return view('admin.index', compact('categories'));
    }


  public function addproduct()
  { 
     return view ('admin.addproduct');
  }


  public function storeproduct(Request $request)
  {
    // dd($request->all());
    $product= new Product;
    $product->Product_name =$request->Product_name;
    $product->Price =$request->Price;
    $product->Description = $request->Description;
    $product->category_id =$request->category_id;
    $product->save();
    foreach($request->file('Image') as $Image){
      $image = new Pictures;
      $filename=$Image->getClientOriginalName();
      $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
      $extension=$Image->getClientOriginalExtension();
      $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
      $Image->storeAs('public/upload',$filenameToStore);
      $image->Image =  $filenameToStore;
      $image->products_id =$product->id;
      $image->save();

    }
     
    return redirect()->back()->with(Session::flash('success','Product added Sucessfully'));
            
  }






  // CATEGORY CODES

  public function addcategory()
  {

     return view ('admin.addcategory');

  }

  // public function get_pictures($picture, Request $request){
  //   dd($request->hasFile($picture));
  //   if($request->hasFile($picture)){
  //       $filename=$request->file($picture)->getClientOriginalName();
  //       $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
  //       $extension=$request->file($picture)->getClientOriginalExtension();
  //       $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
  //       $request->file($picture)->storeAs('public/upload',$filenameToStore);
  //       return $filenameToStore;
  //   }
  //   else{
  //       return 'noimage.jpg';
    
  //   }
  // }

  public function store(Request $request)
  {
    // dd($request->all());    
    $this->validate ($request, 
    [
     'category_name' => 'required'
    ]);

     $category = new Category([
    'category_name'=>$request->category_name
     ]);
     $category->save();

  return redirect('/admin/addcategory')->with('success', 'category created');
}

 public function showcategory(Category $id)
  {// {  dd($id);
    $product = Product::all(); 
    $category= Category:: with('Product')->find($id)->first();
    return view('admin.showcategories', compact('category', 'product'));
  }













  //API CODES

     
    public function Allusers()
    {
      $users =User::all();
      return response()->json([
        "status" =>200,
        "data" =>$users
      ]);
    }

    public function vieweach($id)
    {
      $user = User:: whereId($id)->first();
      if ($user){
        return response()->json([
          "status"=>404,
          "data"=>'No user found'
        ]);
      }else{
        return response()->json([
          "status"=>200,
          "data"=>$user

        ]);
      }
    }
   
    public function Register(Request $request)
    {
        $user = new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password=\Hash::make ($request->password);
        $user->phone=$request->phone;
        $user->gender=$request->gender;


        if ($user-> save()){

          return response()->json([
            "status"=> 200,
            "message"=>'Saved Successfuly'
          ]);
        }else{
          return response()->json([
            "status"=> 400,
            "message"=>'An error Occured'
          ]);
        }
    }



  



}
