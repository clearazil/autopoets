<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Product;


class ProductsController {
	public function index() {

		$products = Product::get();

		return view('products.index')->withProducts($products);
	}

}