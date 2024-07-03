<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }


    public function show($id)
    {
        $product = Product::find($id); // Récupère le produit basé sur l'ID
        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($product); // Retourne le produit au format JSON
    }
}


