<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
//use App\Products as products;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Products::orderBy('pro_id','DESC')->get();
        return view("admin.product-list",['title'=> 'Product listing', 'products'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_product($id=0, Request $request)
    {
        if($id>0){
            $product = Products::find($id);
            //$floor = Floor::where('building_id',$id)->delete();
        }else{
            $product = new Products;
        }
        $product->pro_name = $request->pro_name;
        $product->alias = $request->alias;
        $product->description = $request->description;
        $product->pro_price = $request->pro_price;
        $product->pro_disc = $request->pro_disc;
        //$product->avatar = $request->avatar;
        //$product->created_by = $request->pro_id;

        //$product->save();
        if($id||$product->save())
        {
           // \Session::flash('message_activated_success','Result has been Sent!');
            $product->save();

        }
        else
        {
            echo "Please try again!";
        }
        $title='Add Product';
        $data = array();
        //return redirect('admin/add_product');
        return view('admin.add-products',['title'=>$title ,'add'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_product($id)
    {
        $title='View Product';
        if($id>0){
            $data = Products::where('pro_id',$id)->get()->first();
        }else{
            $data = array();
        }
        return view('admin.product-form',['title'=>$title, 'building'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id=0)
    {
        if($id>0){
            $data = Products::where('id',$id)->get()->first();
        }else{
            $data = array();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_product($id=0)
    {
        $delete = Products::where('pro_id', $id)->delete();
        if($delete){
            echo "<script>alert('You was succefully deleted!!!')</script>";
            return view('/home');
        }
    }
}
