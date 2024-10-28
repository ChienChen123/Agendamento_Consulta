@extends("admin.index")

@section("admin_template")
<div class="container-fluid px-4">
    <h1 class="mt-4">Pacientes</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Alteração dados pacientes 
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('pacientes.salvarAlterar')}}">
                @csrf
                <div class="modal-body">
                <input type="hidden" name="id"
                    value="{{$paciente->id}}"
                />

                        <div class="form-floating mb-3">
                            
                            <input type="text" 
                                    class="form-control" 
                                    id="pac_nome" 
                                    name="pac_nome" 
                                    placeholder="Digite nome"
                                    value="{{ $paciente->pac_nome }}"
                                    >
                                    <label for="floatingInput">Nome</label>
                        </div>

                        <div class="form-floating mb-3">
                            
                            <input type="text" 
                                    class="form-control" 
                                    id="pac_sobrenome" 
                                    name="pac_sobrenome" 
                                    placeholder="Digite sobrenome"
                                    value="{{ $paciente->pac_sobrenome }}"
                                    >
                                 <label for="floatingInput">Sobrenome</label>
                        </div>

                        <div class="form-floating mb-3">
                            
                            <input type="text" 
                                    class="form-control" 
                                    id="pac_cpf" 
                                    name="pac_cpf" 
                                    placeholder="Digite o cpf"
                                    value="{{ $paciente->pac_cpf }}"
                                    >
                              <label for="floatingInput">CPF</label>
                        </div>

                        <div class="form-floating mb-3">
                       
                            <input type="text" 
                                    class="form-control" 
                                    id="pac_endereco"
                                    name="pac_endereco" 
                                    placeholder="Digite o endereço "
                                    value="{{ $paciente->pac_endereco}}"
                                    >
                                     <label for="floatingInput">Endereço</label>
                        </div>
                         <div class="form-floating mb-3">
                          
                            <input type="text" 
                                    class="form-control" 
                                    id="pac_telefone"
                                    name="pac_telefone" 
                                    placeholder="Digite o telefone "
                                    value="{{ $paciente->pac_telefone}}"
                                    >
                           <label for="floatingInput">Telefone</label>
                        </div>

                          <div class="form-floating mb-3">
                                  <select class="form-control" id="pac_sexo" name="pac_sexo">
                                      <option value="" disabled>Selecione o sexo</option>
                                      <option value="Masculino" {{ $paciente->pac_sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                      <option value="Feminino" {{ $paciente->pac_sexo == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                      <option value="Outro" {{ $paciente->pac_sexo == 'Outro' ? 'selected' : '' }}>Outro</option>
                                  </select>
                                  <label for="pac_sexo">Sexo</label>
                                </div>
                          <div class="form-floating mb-3">
                        
                              <input type="date" 
                              class="form-control" 
                              id="pac_data"
                              name="pac_data" 
                              required onfocus="limitarDiasUteis()"
                              placeholder="Escolha a data"
                              value="{{ $paciente->pac_data }}">
                              <label for="pac_data">Data</label>

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
                                      </script>   
                                           <div class="mb-3">
                                        <label for="pac_horario" class="form-label">Horário:</label>
                                            <select class="form-select" id="pac_horario" name="pac_horario" value="{{ $paciente->pac_horario}}" required>
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
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>    

@endsection