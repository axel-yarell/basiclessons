<?php

    
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product; 

class ProductController extends Controller
{
    //
    public function create()
    {
        return view("pages.create");
    }
    public function saveproduct(Request $request)
    {
       $request->validate([
    'product_name' => 'required',
    'product_description' => 'required',
    'product_price' => 'required'
    ]);


        // $product = new \App\Models\Product;
        // $product->product_name = $request->input('product_name');
        // $product->product_description = $request->input('product_description');
        // $product->product_price = $request->input('product_price');
        // $product->save();
        $data = array(
            'product_name' => $request->input('product_name'),
            'product_description' => $request->input('product_description'),
            'product_price' => $request->input('product_price')
        );


        DB::table('products')->insert($data);

        return redirect('/services')->with('statuts', 'le produit '.$request->input('product_name').' a été ajouté avec succès');
    }

    public function deleteproduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/services')->with('statuts', 'le produit '.$product->product_name.' a été supprimé avec succès');
    }

public function editproduct($id)
    {
        $product = Product::find($id);
    //    return redirect('/editproduct')->with('statuts', 'le produit '.$product->product_name.' a été modifié avec succès');
          return view('pages.editproduct')->with('product', $product);
    }

public function updateproduct(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required'
        ]);
    
        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_price = $request->input('product_price');
        $product->save();
    
        return redirect('/services')->with('statuts', 'le produit '.$request->input('product_name').' a été modifié avec succès');
    }

}
