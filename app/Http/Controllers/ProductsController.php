<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Product;


class ProductsController extends Controller {
	/**
	 * @Get("products")
	 * [index description]
	 * @return [type] [description]
	 */
	public function index() {

		$products = Product::get();

		return view('products.index')->withProducts($products);
	}

}