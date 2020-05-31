@extends('layout.app')
@section('title',$area->titulo)
@section('content')
        <h1>Indicadores - {{$area->titulo}}</h1>
        
        <div class="row">
        
            @if(file_exists("./img/areas/".md5($area->id).".jpg"))
            <div class="col-md-6">
                <img src="{{url('img/areas/'.md5($area->id).'.jpg')}}" alt="Imagem area" class="img-fluid img-thumbnail">
            </div>
            @endif
            <div class="col-md-6">
            <!-- <ul>
                <li><strong>SKU: </strong> {{$area->sku}} </li>
                <li><strong>Local: </strong> {{$area->local}} </li>
                <li><strong>Adicionado em: </strong> {{date("d/m/Y H:i",strtotime($area->created_at))}} </li>
            </ul> -->
        
            <container name="cartaoIndicadores">
            <span class="wob_t" id="wob_tm" style="display:inline">26</span>
            @foreach($indicadores as $indicador)
            <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-success">{{$indicador->titulo}}</div>
            <div class="card-body text-success">
                <h5 class="card-title">24º</h5>
                <!-- <p class="card-text">C</p> -->
            </div>
            <!-- <div class="card-footer bg-transparent border-success">Footer</div> -->
            </div>
            @endforeach
            
            </container>


            
            
        
            
            



            <p>{{$area->descricao}}</p>

            
            
        </div>
        <a class="btn btn-primary" href="javascript:history.go(-1)">Voltar</a>
        
        
        
@endsection