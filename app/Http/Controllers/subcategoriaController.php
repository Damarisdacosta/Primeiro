<?php

namespace App\Http\Controllers;
use App\Models\categoria;

use Illuminate\Http\Request;

class subcategoriaController extends Controller
{


    public function loja(Request $request): View
    {  
        $users = User::all();
        $subcategoria = new Subategoria;
        $subcategoria->idsubcategoria = $request->idsubcategoria;
        $subcategoria->nome_subcategoria = $request->nome_subcategoria;
        /*$arquivo->active = 1;*/
        
      /*  if($request->file('arquivo_ficheiro')){
            $arquivo->arquivo_ficheiro = $request->arquivo_ficheiro->store("arquivos");
        }*/
        $subcategoria->save();
        // Salvar o arquivo e armazenar o caminho no banco de dados
        $subcategoria = Subategoria::all();
        return view('subcategoria.in', ['subcategoria'=> $subcategoria]);
    }



    public function index()
    {
        $subcategoria = subcategoria::all();       
        return view('subcategoria',compact('subcategoria'));
    }
}
