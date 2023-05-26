@extends('modeloCliente')

@section('content')
        <main>
            <div class="login">
                <form>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Suas informações estão seguras.</div>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="botoes">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <a href="cadastro.html">Não sou possui cadastro?</a>
                    </div>  
                </form>
            </div>
        </main>
        @endsection