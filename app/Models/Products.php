<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Products extends Model
{
    protected $table = 'produto';
    protected $fillable = ['titulo', 'valor', 'ativo'];

    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'ativo' => 'nullable|string',
        ]);

        // Create and store the product in the database
        $product = Products::create($validatedData);

        return $product;
        // Optionally, you can return a response or redirect to a success page
        //return redirect('/products')->with('success', 'Product created successfully');
    }



    public function edit(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'ativo' => 'nullable|string',
        ]);

        // Create and store the product in the database
        $product = Products::create($validatedData);

        return $product;
        // Optionally, you can return a response or redirect to a success page
        //return redirect('/products')->with('success', 'Product created successfully');
    }
}
