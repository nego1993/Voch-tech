
@extends('templates.template')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


    <h1 class="text-center">Cadastrar</h1> <hr>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
	  align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>
    
    <div class="col-md-12">
        <div class="form-group">

            <form action="{{ route('cadastra_pessoa') }}" method="POST">
                @csrf <br>
                <label for="idPessoa">ID Usuario</label>
                <input class="form-control" type="text" name="idUsuario" placeholder="id" required><br>
            <label for="nome">Nome</label>
            <input class="form-control" type="text" name="name" placeholder="nome" required><br>
            <label for="idade">Idade</label>
            <input class="form-control" type="number" name="idade" placeholder="idade" required><br>
        <input class="btn-success" type="submit" value="Cadastrar">
        <a href="{{url('pessoa')}}" class="btn btn-danger btn-sm">Cancelar</a><br>
    </form>
    
</div>
    </div>

</main>
@endsection