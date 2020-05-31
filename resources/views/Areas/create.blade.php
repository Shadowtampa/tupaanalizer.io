@extends('layout.app')
@section('title','Adicionar um Area')
@section('content')
<h1 class="mb-3">Adicionar um novo Area</h1>
    @if ($message = Session::get('success'))
        <div class = "alert alert-success">
            {{$message}}
        </div>
    @endif

    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<!-- <form method="POST" enctype="multipart/form-data" action="{{url('areas')}}">
        @csrf
		<div class="form-group mb-3">
		    <label for="sku">SKU</label>
		    <input type="text" class="form-control" id="sku" name="sku" placeholder="Digite o Código do Area..." required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">Título</label>
		    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o Nome do Area..." required>
	 	</div>
        <div class="form-group mb-3">
		    <label for="local">Local</label>
		    <input type="text" class="form-control" id="titulo" name="local" placeholder="Digite o Local do Area..." required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Descrição</label>
		   	<textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma breve descrição do Area..." required></textarea>
	 	</div>
         <div class="input-group mb-3">
			<label for="imgarea">Imagem</label>
			<input type="file" class="form-control-file" id="imgarea" name="imgarea">
		 
		 </div>
	 	
	 	<button type="submit" class="btn btn-primary">Cadastrar Area</button>
	</form> -->




    <form method="POST" enctype="multipart/form-data" action="{{url('areas')}}">
        @csrf
		<!-- <input type="hidden" name="_method" value="PATCH"> -->
		<div class="form-group mb-3">
		    <label for="sku">SKU</label>
		    <input type="text" class="form-control" id="sku" name="sku"  placeholder="Digite o Código do area..." required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">Título</label>
		    <input type="text" class="form-control" id="titulo" name="titulo"  placeholder="Digite o Nome do area..." required>
	 	</div>
         <div class="form-group mb-3">
		    <label for="local">Local</label>
		    <input type="text" class="form-control" id="local" name="local"  placeholder="Digite o Local do area..." required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Descrição</label>
		   	<textarea class="form-control" id="descricao" name="descricao" rows="3"  placeholder="Digite uma breve descrição do area..." required> </textarea>
	 	</div>

	 	<button type="submit" class="btn btn-primary">Criar Area</button>
	</form>

   

@endsection