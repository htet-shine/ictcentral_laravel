<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
  // Organized Array for Debugging
  public function printArray($array)
   {
     echo '<pre>';
     print_r($array);
     echo '</pre>';
   } 
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::OrderBy('id', 'asc')->get();
    $paginationNumber = 9;

    // Show products by category and paginate
  	if (request()->category) {

      $products = Product::with('categories')->whereHas('categories', function($query) {
        $query->where('slug', request()->category);
      });
      // Show selected category name in section heading
      $categoryName = optional($categories->where('slug', request()->category)->first())->name;

    } else {

      $products = Product::take(1000); 
      $categoryName = "All Products";

    }

    // sort products by price in selected category
    if (request()->sort == 'high_low') {
      $products = $products->orderBy('price', 'desc')->paginate($paginationNumber);
    } elseif (request()->sort == 'low_high') {
      $products = $products->orderBy('price', 'asc')->paginate($paginationNumber);
    } else {
      $products = $products->paginate($paginationNumber);
    }
    
    

  	return view('products')->with([
      'products'      => $products,
      'categories'    => $categories,
      'categoryName'  => $categoryName,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
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
   * @param  string unique $slug
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
    $product = Product::where('slug', $slug)->firstOrFail();
    $relatedProducts = Product::where('slug','!=', $slug)->relatedProducts()->get();

    return view('product')->with([
      'product'           => $product,
      'relatedproducts'   => $relatedProducts
    ]);
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
      //
  }
}
