<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view("pages.home");
    }

    public function apropos()
    {
        return view("pages.Apropos");
    }

    public function services()
    {
        // $produits = DB::table('products')->get();
         $produits = Product::paginate(3);


        return view("pages.Services")->with('produits', $produits);
    }

    public function show($id)
    {
        // $produit = Product::find($id);
        // $produit = DB::table('products')
        // ->where('id', $id)
        // ->first();
        $produit = Product::findOrFail($id);

        return view("pages.show")->with('produit', $produit);
    }
}
