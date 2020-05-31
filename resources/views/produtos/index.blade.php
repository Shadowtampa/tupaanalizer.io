@extends('layout.app')
@section('title','Listar Produtos')
@section('content')
<h1>Produtos</h1>
@if ($message = Session::get('success'))
        <div class = "alert alert-success">
            {{$message}}
        </div>
@endif

<div class="row">
    <div class="col-md-12">
    <form method="POST" action="{{url('produtos/busca')}}">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="busca" id="busca" class="form-control" placeholder="Procurar produto no site..." value="{{$buscar}}"> 
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary">buscar</button>
                </div>
            </input>
        </div>
    </form>
    </div>

</div>

<div class="row">
@foreach($produtos as $produto)
    <div class="col-md-3"> 
    @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))
            <img href="{{URL::to('produtos')}}/{{$produto->id}}" src="{{url('img/produtos/'.md5($produto->id).'.jpg')}}" alt="Imagem Produto" class="img-fluid img-thumbnail">
    @endif 
    <h4 class="text-center"><a href="{{URL::to('produtos')}}/{{$produto->id}}">{{$produto->titulo}}</a></h4>
    <div class="mb-3">
    
    <form method="POST" enctype="multipart/form-data" action="{{action('ProdutosController@destroy',$produto->id)}}">
        @csrf
		<input type="hidden" name="_method" value="DELETE">
        <a href="{{URL::to('produtos/'.$produto->id.'/edit')}}" class="btn btn-primary">editar</a>
        <button class="btn btn-danger">Excluir</button>
    </form>
    </div>
    </div>
@endforeach
</div>
{{$produtos->links()}}
@endsection