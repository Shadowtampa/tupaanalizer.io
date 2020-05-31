@extends('layout.app')
@section('title','Listar Areas')
@section('content')
<h1>Areas</h1>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif


@section('searchNav')
<div class="row">

    <div class="col-md-12">

        <form method="POST" action="{{url('areas/busca')}}" class="form-inline my-2 my-lg-0">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="busca" id="busca" class="form-control mr-sm-2" placeholder="Procurar areas no site..." value="{{$buscar}}">


                <div class="input-group-append">
                    <button class="btn btn-outline-secondary">buscar</button>
                </div>

                </input>

            </div>

        </form>

    </div>

</div>
@endsection


<div class="row">
    @foreach($areas as $area)
    <div class="col-md-3">
        <!-- @if(file_exists("./img/areas/".md5($area->id).".jpg"))
    
            <img src="{{url('img/areas/'.md5($area->id).'.jpg')}}" alt="Imagem Area" class="img-fluid img-thumbnail">
    @endif 
    <h4 class="text-center"><a href="{{URL::to('areas')}}/{{$area->id}}">{{$area->titulo}}</a></h4> -->
        <div class="mb-3">

            <!--      -->
            <div class="card text-center" style="width: 18rem;">
                @if(file_exists("./img/areas/".md5($area->id).".jpg"))
                <img class="card-img-top" src="{{url('img/areas/'.md5($area->id).'.jpg')}}" alt="Card image cap">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="{{URL::to('areas')}}/{{$area->id}}">{{$area->titulo}}</a></h5>
                    <h6 class="card-text">{{$area->local}} </h6>
                    <p class="card-text">{{$area->descricao}}</p>

                    <form method="POST" enctype="multipart/form-data" action="{{action('AreasController@destroy',$area->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <container class="text-center">
                            <a href="{{URL::to('areas/'.$area->id.'/edit')}}" class="btn btn-primary">editar</a>
                            <button class="btn btn-danger">Excluir</button>
                        </container>
                    </form>
                </div>
            </div>
            <!--  -->


            <form method="POST" enctype="multipart/form-data" action="{{action('AreasController@destroy',$area->id)}}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <!-- <container class="text-center">
        <a href="{{URL::to('areas/'.$area->id.'/edit')}}" class="btn btn-primary">editar</a>
        <button class="btn btn-danger">Excluir</button>
        </container> -->
            </form>
        </div>
    </div>
    @endforeach
</div>
{{$areas->links()}}
<!-- <a class="btn btn-primary" href="javascript:history.go(-1)">Voltar</a> -->



@endsection