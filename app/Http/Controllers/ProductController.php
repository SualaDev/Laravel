<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        return view('products.index');
    }

    public function create() {
        return 'This is a form to create a product FROM CONTROLLER';
    }

    public function store() {
        //
    }

    public function show($product) {
        return view('products.show');
    }

    public function edit($product) {
        return "Showing the form to edit the product {$product} FROM CONTROLLER";
    }

    public function update($product) {
        //
    }

    public function destroy($product) {
        //
    }
}

