<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\Arquivo;
use App\Models\categoria;
use App\Models\subcategoria;
use App\Models\User;

class ArquivoController extends Controller
{
    public function index(Request $request): View
    {
        $arquivos = Arquivo::all();       
        return view('arquivo.index', compact('arquivos'));
    }
    public function listagem(Request $request): View
    {
        $user = User::all();

        return view('arquivo.listagem', ['users'=> $user]);
    }

    public function edit ($id) {
        $arquivo = Arquivo::findOrFail($id);
        if ($arquivo) {
            $categorias = categoria::all();
            $subcategorias = subcategoria::all();
            return view('arquivo.create', compact('subcategorias', 'categorias', 'arquivo'));
        }
    }

    public function update (Request $request, $id) {
        $arquivo = Arquivo::findOrFail($id);
        if ($arquivo) {
            $arquivo->update($request->all());
        }
    }

    public function delete ($id) {
        $arquivo = Arquivo::findOrFail($id);
       if ($arquivo) {
            $arquivo->delete();
       }
    }
    
    
    public function create(Request $request): View
    {
        $categorias = categoria::all();
        $subcategorias = subcategoria::all();
        return view('arquivo.create', compact('subcategorias', 'categorias'));
    }
    
    public function store(Request $request): View
    {  
        $users = User::all();
        $arquivo = new Arquivo;
        $arquivo->arquivo_codigo = $request->arquivo_codigo;
        $arquivo->arquivo_titulo = $request->arquivo_titulo;
        $arquivo->active = 1;
        $arquivo->arquivo_ficheiro = "sem ficheiro";
        $arquivo->categoria = $request->categoria;
        $arquivo->subcategoria = $request->subcategoria;
        
        if($request->file('arquivo_ficheiro')){
            $arquivo->arquivo_ficheiro = $request->arquivo_ficheiro->store("arquivos");
        }
        $arquivo->save();
        // Salvar o arquivo e armazenar o caminho no banco de dados
        $arquivo = Arquivo::all();
        return view('arquivo.index', ['arquivos'=> $arquivo]); // 
    }
}
