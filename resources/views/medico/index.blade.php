@extends("admin.index")

@section("admin_template")

<div class="container-fluid px-4">
    <h1 class="mt-4">Dados Médicos</h1>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="btn btn-success" 
                        data-bs-toggle="modal" 
                        data-bs-target="#exampleModal">
                        Casdatrar
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Especialidade</th>
                        <th>email</th>
                        <th>CRM</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicos as $linha) 
                        <tr>
                            <td>{{ $linha->id }}</td>
                            <td>{{ $linha->med_nome }}</td>
                            <td>{{ $linha->med_endereco }}</td>
                            <td>{{ $linha->med_telefone }}</td>
                            <td>{{ $linha->med_cpf }}</td>
                            <td>{{ $linha->med_especialidade }}</td>
                            <td>{{ $linha->med_email }}</td>
                            <td>{{ $linha->med_cfm }}</td>
                            <td>
                                <a href='{{ route('medico_upd', ["id" => $linha->id]) }}' class='btn btn-success'>
                                    <li class='fa fa-pencil'></li>
                                </a>
                                | 
                                <a href='{{ route('medico_ex', ["id" => $linha->id]) }}' class='btn btn-danger'>
                                    <li class='fa fa-trash'></li>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="POST" action="/medico">
          @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" 
                            class="form-control" 
                            id="med_nome" 
                            name="med_nome" 
                            placeholder="Digite o nome">
                    <label for="floatingInput">Nome</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" 
                            class="form-control" 
                            id="med_endereco"
                            name="med_endereco" 
                            placeholder="Digite o endereço">
                    <label for="floatingInput">Endereço</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" 
                            class="form-control" 
                            id="med_telefone"
                            name="med_telefone" 
                            placeholder="Digite o telefone">
                    <label for="floatingInput">Telefone</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" 
                            class="form-control" 
                            id="med_cpf"
                            name="med_cpf" 
                            placeholder="Digite o CPF">
                    <label for="floatingInput">CPF</label>
                </div>

                 <div class="form-floating mb-3">
                    <input type="text" 
                            class="form-control" 
                            id="med_especialidade" 
                            name="med_especialidade" 
                            placeholder="Digite a especialidae">
                    <label for="floatingInput">Especialidade</label>
                </div>

                  <div class="form-floating mb-3">
                    <input type="text" 
                            class="form-control" 
                            id="med_email"
                            name="med_email" 
                            placeholder="Digite o email">
                    <label for="floatingInput">email</label>
                </div>
            
                <div class="form-floating mb-3">
                    <input type="text" 
                            class="form-control" 
                            id="med_cfm"
                            name="med_cfm" 
                            placeholder="Digite o CRM ">
                    <label for="floatingInput">CRM</label>
                </div>
            </div>
             
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
