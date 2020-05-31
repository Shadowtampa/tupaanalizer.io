@extends('layout.app')
@section('title','Listar Areas')
@section('content')
<h1>Areas</h1>
@if ($message = Session::get('success'))
        <div class = "alert alert-success">
            {{$message}}
        </div>
@endif

<div class="row">
    <div class="col-md-12">
    <form method="POST" action="{{url('areas/busca')}}">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="busca" id="busca" class="form-control" placeholder="Procurar areas no site..." value="{{$buscar}}"> 
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary">buscar</button>
                </div>
            </input>
        </div>
    </form>
    </div>

</div>
<a class="btn btn-primary" href="{{url('areas/create')}}">Cadastrar</a>

<div class="row">
@foreach($areas as $area)
    <div class="col-md-3"> 
    @if(file_exists("./img/areas/".md5($area->id).".jpg"))
            <img src="{{url('img/areas/'.md5($area->id).'.jpg')}}" alt="Imagem Area" class="img-fluid img-thumbnail">
    @endif 
    <h4 class="text-center"><a href="{{URL::to('areas')}}/{{$area->id}}">{{$area->titulo}}</a></h4>
    <div class="mb-3">
    
    <form method="POST" enctype="multipart/form-data" action="{{action('AreasController@destroy',$area->id)}}">
        @csrf
		<input type="hidden" name="_method" value="DELETE">
        <container class="center">
        <a href="{{URL::to('areas/'.$area->id.'/edit')}}" class="btn btn-primary">editar</a>
        <button class="btn btn-danger">Excluir</button>
        </container>
    </form>
    </div>
    </div>
@endforeach
</div>
{{$areas->links()}}
<!-- <a class="btn btn-primary" href="javascript:history.go(-1)">Voltar</a> -->

@endsection