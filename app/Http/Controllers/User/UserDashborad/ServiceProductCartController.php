<?php

namespace App\Http\Controllers\User\UserDashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceProductCart;
use App\Models\ServiceProfileProduct;
use Auth;

class ServiceProductCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServiceProductCart::with('product')->where('user_id', Auth::id())->get();
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $cartCheck = ServiceProductCart::where(['product_id' => $request->product_id, 'user_id'=> Auth::id()])->count();
        $item = ServiceProductCart::where(['product_id' => $request->product_id, 'user_id'=> Auth::id()])->first();
        $product = ServiceProfileProduct::where('id', $request->product_id)->first();
 
 
        if($cartCheck){
            $item->increment('quantity');
         $item = $item->first();
         return response()->json(['item' => $item, 'quantity' => $item->quantitiy]);
        }else{
         $item = new ServiceProductCart();
         $item->product_id = $product->id;
         $item->ws_cat_id = $product->ws_cat_id;
         $item->workstation_id = $product->workstation_id;
         $item->service_profile_id = $product->service_profile_id;
         $item->subscriber_id = $product->subscriber_id;
         $item->user_id = Auth::id();
         $item->quantity = $request->quantity;
         $item->addedby_id = $product->addedby_id;
         $item->editedby_id = $product->editedby_id;
         $item->save();
    
        }

        return response()->json([
            'quantity' => $item->quantity,
            'product' => $item->product
        ]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        $item = ServiceProductCart::where('id', $id)->delete();
        return response(null, 200);
    }

    public function cartQuantityIncrease(Request $request)
    {
        $item = ServiceProductCart::where(['id' => $request->id, 'user_id'=> Auth::id()])->with('product')->first();
        // $product = ServiceProfileProduct::where('id', $request->product_id)->first();
 
            $item->increment('quantity');
            $item = $item->first();
         return response()->json(['item' => $item, 'quantity' => $item->quantitiy]);
    }



    public function cartQuantityDecrease(Request $request){
        $item = ServiceProductCart::where(['id' => $request->id, 'user_id'=> Auth::id()])->with('product')->first();
        // $product = ServiceProfileProduct::where('id', $request->product_id)->first();
            $item->decrement('quantity');
            $item = $item->first();
         return response()->json(['item' => $item, 'quantity' => $item->quantitiy]);
    }

}