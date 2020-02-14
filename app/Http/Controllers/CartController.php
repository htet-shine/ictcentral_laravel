<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
  public function index()
  {
	  $relatedProducts = Product::relatedProducts()->get();

	  return view('cart')->with([
			'relatedproducts'		=> $relatedProducts 	     
	  ]);    
  }

  // Add items to cart
  public function store(Request $request)
  {
    // Look for existing items in cart
    $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
      return $cartItem->id === $request->productID;
    });

    // return with message if item already exists
    if ($duplicates->isNotEmpty()) {     
      $success_msg = "<b>" . $request->productName . "</b> is already in your shopping cart.";
      return redirect('/cart')->with('success_msg', $success_msg);
    }

    Cart::add($request->productID, $request->productName, 1, $request->productPrice)->associate('App\Product');

    $success_msg = "<b>" . $request->productName . "</b> has been added to the shopping cart.";

    return redirect('/cart')->with('success_msg', $success_msg);
  }

  // Empty Cart
  public function empty()
  {
  	Cart::destroy();

  	return redirect()->route('cart.index');
  }

  // Remove Cart Item
  public function destroy(Request $request, $id)
  {
      Cart::remove($id);

      $success_msg = "<b>" . $request->productName . "</b> has been removed from the shopping cart.";

      return back()->with('success_msg', $success_msg);
  }

  // Update Product Quantity in Cart
  public function update(Request $request, $id)
  {
    $validator = Validator::make($request->all(), [
      'quantity' => 'required|numeric|between:1,5'
    ]);

    if ($validator->fails()) {
      session()->flash('err_msg', 'Quantity must be between 1 and 5.');
      return response()->json(['success' => false], 400);
    }
    
    Cart::update($id, $request->quantity);

    $success_msg = "Quantity has been updated.";

    session()->flash('success_msg', $success_msg);
    return response()->json(['success' => true]);
  }
}
