<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Products;


class Event extends Controller
{
    public function index(Request $request)
    {
        $products = Products::all();
        $id = $request->input();
        var_dump($id);
        exit();


        $product = Products::findOrFail(1);
        if ($product) {
            //throw new \Exception("Post inválido.");
        }

        $product->titulo = 'Novo nome do produto';
        $product->valor = 19.99;
        $product->ativo = 1;
        //$product->save();

        $products = Products::where('id', '>', 3)
            ->where('titulo', '!=', 'A')
            ->get();

        foreach ($products as $product) {
            //$product->delete();
        }

        //$id = $request->input('id');
        $produto = Products::findOrFail(1);

        return view('event', ['produtos' => $products, 'produto' => $produto]);
        //exit();
    }

    public function store(Request $request)
    {
        // Lógica para lidar com a solicitação POST aqui

        $json = $request->all(); // Obtenha todos os dados enviados no corpo da solicitação
        unset($json['_token']);
        //var_dump($json);
        //exit();


        Products::create($json);
        $json = json_encode($json);
        // Faça algo com os dados (por exemplo, salvar no banco de dados)
        return response()->json(['message' => 'Solicitação POST bem-sucedida', "json" => $json], 200);
    }
}
