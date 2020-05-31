<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Areas;
use App\Indicadores;

class AreasController extends Controller
{
    public function index(){
        $areas = Areas::paginate(8);
        
        return view('areas.index',array('areas'=>$areas, 'buscar' => null));

    }

    public function show($id){
        $indicadores = Indicadores::all();
        $area = Areas::find($id);
        return view('areas.show',array('area'=>$area, 'indicadores'=>$indicadores));
    }

    public function create(){
        return view('areas.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'sku' => 'required|unique:areas|min:3',
            'titulo' => 'required|min:3',
            'local' => 'required|min:3',
            'descricao' => 'required|min:3',
        ]); 



        $area = new Areas();
        $area->sku = $request->input('sku');
        $area->titulo = $request->input('titulo');
        $area->local = $request->input('local');
        $area->descricao = $request->input('descricao');
        

        
        if($area->save()){
            return redirect('areas/create')->with('success','Area Cadastrado com Sucesso!!!');
        }

        
    }

    public function edit($id){
        $area = Areas::find($id);
        return view('areas.edit',compact('area','id'));
    }

    public function update(Request $request, $id){
        $area = Areas::find($id);


        $this->validate($request, [
            'sku' => 'required|min:3',
            'titulo' => 'required|min:3',
            'local' => 'required|min:3',
            'descricao' => 'required|min:3',
        ]); 
        

        if($request->hasFile('imgarea')){
            $imagem = $request->file('imgarea');
            $nomearquivo = md5($id).".".$imagem->getClientOriginalExtension();
            $request->file('imgarea')->move(public_path('./img/areas/'),
            $nomearquivo); 
        }

        $area->sku = $request->get('sku');
        $area->titulo = $request->get('titulo');
        $area->local = $request->get('local');
        $area->descricao = $request->get('descricao');
        
        if($area->save()){
            return redirect('areas/'.$id.'/edit')->with('success','area Atualizado com Sucesso!!!');
        }
    }

    public function destroy($id){
        $area = Areas::find($id);
        if(file_exists("./img/areas/".md5($area->id).".jpg")){
            unlink("./img/areas/".md5($area->id).".jpg");
        }
        $area->delete();

        return redirect()->back()->with('success','Área Deletada com Sucesso!!!');
    }

    public function busca(Request $request){
        $buscaInput = $request->input('busca');
        $areas = Areas::where('titulo','LIKE','%'.$buscaInput.'%')
        ->orwhere('descricao','LIKE','%'.$buscaInput.'%')
        ->paginate(8);
        return view('areas.index',array('areas'=>$areas, 'buscar' => $buscaInput));
    }

}
