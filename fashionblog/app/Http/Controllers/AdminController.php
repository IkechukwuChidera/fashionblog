<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use App\Product;

class AdminController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = Product::all();

        return view('admin.index', compact('product'));
    }

    public function create()
    {
        // $product = Product::all();
        return view('admin.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'Product_name'=>'required',
        'Price'=> 'required|integer',
        'Description' => 'required|string'
        // 'Image'=> 'required|string'
      ]);
      $product = new Product([
        'Product_name' => $request->get('Product_name'),
        'Price'=> $request->get('Price'),
        'Description'=>$request->get('Description')
        // 'Image'=> $request->get('Image'),

      ]);
      $product->save();
      return redirect('/admin/index')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
      $request->validate([
       'Product_name'=>'required',
       'Price'=> 'required|integer',
       'Description' => 'required|string'
       // 'Image'=>'required'
     ]);

     $product = Product::find($id);
           $product->Product_name = $request->get('Product_name');
           $product->Price = $request->get('Price');
           $product->Description = $request->get('Description');
           $product->Image = $request->get('Image');


          $product->save();

     return redirect('/admin/index')->with('success', 'Stock has been updated');
=======

  public function add()
  {
    return view('admin.addproduct');

  }

public function store()
{
  return view(a);

}

public function show()
{return view(a);

}

public function edit()
{return view(a);

}

public function update()
{return view(a);

}

public function destroy()
{return view(a);

}



>>>>>>> 810d35e610547e6c7387922a50d0e850ce1e5863
}
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //   $product = Product::find($id);
    //  $product->delete();
    //
    //  return redirect('/admin/index')->with('success', 'Stock has been deleted Successfully');
    //     //
    // }
