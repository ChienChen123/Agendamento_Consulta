@extends('admin.index')

@section('admin_template')
    <div class="container-fluid px-4">
    <h1 class="mt-4">Dados Pacientes</h1>


        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="btn btn-success" 
                        data-bs-toggle="modal" 
                        data-bs-target="#exampleModal">
                        Novo Agendamento
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
                        <th>Sobrenome</th>
                        <th>CPF</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Médico</th>
                        <th>Área</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes  as $linha) 
                        <tr>
                            <td>{{ $linha->id }}</td>
                            <td>{{ $linha->pac_nome }}</td>
                            <td>{{ $linha->pac_sobrenome }}</td>
                            <td>{{ $linha->pac_cpf }}</td>
                            <td>{{ $linha->pac_endereco }}</td>
                            <td>{{ $linha->pac_telefone }}</td>
                            <td>{{ $linha->pac_sexo }}</td>
                            <td>{{ $linha->medico->med_nome }}</td>
                            <td>{{ $linha->medico->med_especialidade }}</td>
                            <td>{{ $linha->pac_data }}</td>
                            <td>{{ $linha->pac_horario }}</td>
                            <td>
                                <a href='{{ route('pacientes.formularioAlterar', ['id' => $linha->id]) }}' class='btn btn-success'>
                                    <li class='fa fa-pencil'></li>
                                </a>
                                | 
                                <a href='{{ route('pacientes.destroy', ["id" => $linha->id]) }}' class='btn btn-danger'>
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('pacientes.salvar') }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Novo Cadastro</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                            <!-- Mensagem de erro para horário -->
                                @if ($errors->has('pac_horario'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('pac_horario') }}
                                    </div>
                                @endif
                                <div class="form-floating mb-3">
                                   <select class="form-select" 
                                          aria-label="Default select example" 
                                          id="med_id"
                                          name="med_id"
                                    >
                                    @foreach($medicos as $med)
                                    <option value="{{ $med->id }}">{{ $med->med_nome }} - {{ $med->med_especialidade }}</option>
                                    @endforeach
                                    </select>
                                    <label for="floatingInput">Informação do Médico</label>
                            </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pac_nome" name="pac_nome"
                                        placeholder="Digite o nome do paciente">
                                    <label for="floatingInput">Nome</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pac_sobrenome" name="pac_sobrenome"
                                        placeholder="Digite o sobrenome do paciente ">
                                    <label for="floatingInput">Sobrenome</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pac_cpf" name="pac_cpf"
                                        placeholder="Digite o cpf do paciente ">
                                    <label for="floatingInput">CPF</label>
                                </div>

                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pac_endereco" name="pac_endereco"
                                        placeholder="Digite o cpf do paciente ">
                                    <label for="floatingInput">Endereço</label>
                                </div>

                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pac_telefone" name="pac_telefone"
                                        placeholder="Digite o telefone do paciente ">
                                    <label for="floatingInput">Telefone</label>
                                </div>

                                <div class="form-floating mb-3">
                                  <select class="form-control" id="pac_sexo" name="pac_sexo">
                                      <option value="" disabled selected>Selecione o sexo</option>
                                      <option value="Masculino">Masculino</option>
                                      <option value="Feminino">Feminino</option>
                                      <option value="Outro">Outro</option>
                                  </select>
                                  <label for="pac_sexo">Sexo</label>
                                </div>

                                 <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="pac_data" name="pac_data"
                                        placeholder="Escolha a data " required onfocus="limitarDiasUteis()">
                                    <label for="floatingInput">Data</label>
                                </div>

                                <script>
                                        function limitarDiasUteis() {
                                        const inputData = document.getElementById("pac_data");
                                        const hoje = new Date().toISOString().split("T")[0];
                                        inputData.setAttribute("min", hoje);
                                        inputData.addEventListener("input", function() {
                                        const diaSemana = new Date(this.value).getUTCDay();
                                        if (diaSemana === 0 || diaSemana === 6) { // Domingo ou Sábado
                                        this.value = '';
                                        alert("Agendamentos só podem ser feitos de segunda a sexta-feira.");
                                        }
                                        });
                                         }
                                </script>   

                                    <div class="mb-3">
                                        <label for="pac_horario" class="form-label">Horário:</label>
                                            <select class="form-select" id="pac_horario" name="pac_horario" required>
                                                <option disabled selected>Selecione um horário</option>
                                                    @if(isset($horariosDisponiveis))
                                                        @foreach($horariosDisponiveis as $horario)
                                                            <option value="{{ $horario }}">{{ $horario }}</option>
                                                        @endforeach
                                                    @endif
                                                    @if ($errors->has('pac_horario'))
                                                         <div class="alert alert-danger">
                                                        {{ $errors->first('pac_horario') }}
                                                        </div>
                                                    @endif
                                            </select>
                                        </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary" name='redirect' value='index'>Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection