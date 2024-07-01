<?php

namespace App\Http\Controllers;

use App\Models\categoria;

use Illuminate\Http\Request;

class categoriaController extends Controller
{
    public function in(Request $request): View
    {
        $categoria = Categoria::all();

        return view('categoria.in', ['categoria'=> $categoria]);
    }
    /*public function listagem(Request $request): View
     {
        $user = User::all();

        return view('arquivo.listagem', ['users'=> $user]);
    }
     */
    
    public function create(Request $request): View
    {
        return view('categoria.create');
    }
    
    public function loja(Request $request): View
    {  
        $users = User::all();
        $categoria = new Categoria;
        $categoria->idcategoria = $request->idcategoria;
        $categoria->nome_categoria = $request->nome_categoria;
        /*$arquivo->active = 1;*/
        
      /*  if($request->file('arquivo_ficheiro')){
            $arquivo->arquivo_ficheiro = $request->arquivo_ficheiro->store("arquivos");
        }*/
        $categoria->save();
        // Salvar o arquivo e armazenar o caminho no banco de dados
        $categoria = Categoria::all();
        return view('categoria.in', ['categoria'=> $categoria]);
    }

    public function index()
    {
        $categorias = categoria::all();       
        return view('categoria',compact('categorias'));
    }


    public function index1()
    {
            
        return view('subcategoria');
    }
    
}


