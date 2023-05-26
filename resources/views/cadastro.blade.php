
@extends('modeloCliente')

@section('content')
<main>
            <div class="login">
                <form>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail2">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <div class="mb-4">
                        <label  class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="exampleInputNome1">
                    </div>
                    <div class="mb-4">
                        <label  class="form-label">CPF</label>
                        <input type="text" class="form-control" id="exampleInputCPF1">
                    </div>
                    <div class="botoes">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </main>
        @endsection