<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function getIndex()
    {
    	//return view('produto.index',["nome"=>"Livro de produtos"]);


        $produto = ["nome"=>"Livro do produtooooo","titulo"=>"titulo livro"];
        
    	return view('produto.index',compact("produto"));
    }
}
