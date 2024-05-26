<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function createStepOne(Request $request)
    {
        $product = Session::get('product');
        return view('products.create-step-one', compact('product'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|numeric',
            'description' => 'required'
        ]);

        if (Session::exists('product')) {
            $product = Session::get('product');
            $product->fill($validatedData);
            Session::put('product', $product);
        } else {
            $product = new Product();
            $product->fill($validatedData);
            Session::put('product', $product);
        }

        return redirect()->route('products.create.step.two');
    }

    public function createStepTwo(Request $request)
    {
        $product = Session::get('product');

        return view('products.create-step-two', compact('product'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);

        $product = Session::get('product');
        $product->fill($validatedData);
        Session::put('product', $product);

        return redirect()->route('products.create.step.three');
    }

    public function createStepThree(Request $request)
    {
        $product = Session::get('product');

        return view('products.create-step-three', compact('product'));
    }

    public function postCreateStepThree(Request $request)
    {
        $product = Session::get('product');
        $product->save();

        Session::forget('product');
        Session::flush();

        return redirect()->route('products.index');
    }
}
