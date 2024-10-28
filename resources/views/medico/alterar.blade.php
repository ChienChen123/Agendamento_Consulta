@extends("admin.index")

@section("admin_template")
<div class="container-fluid px-4">
    <h1 class="mt-4">Medicos</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Alteração dados médico {{ $medico->id }}
        </div>
        <div class="card-body">
            <form method="POST" action="/medico/upd">
                @csrf
                <div class="modal-body">
                <input type="hidden" name="id"
                    value="{{ $medico->id}}"
                />

                        <div class="form-floating mb-3">
                            
                            <input type="text" 
                                    class="form-control" 
                                    id="med_nome" 
                                    name="med_nome" 
                                    placeholder="Digite o nome do médico"
                                    value="{{ $medico->med_nome }}"
                                    >
                                    <label for="floatingInput">Nome</label>
                        </div>

                        <div class="form-floating mb-3">
                       
                            <input type="text" 
                                    class="form-control" 
                                    id="med_endereco"
                                    name="med_endereco" 
                                    placeholder="Digite o endereço "
                                    value="{{ $medico->med_endereco}}"
                                    >
                                     <label for="floatingInput">Endereço</label>
                        </div>
                         <div class="form-floating mb-3">
                          
                            <input type="text" 
                                    class="form-control" 
                                    id="med_telefone"
                                    name="med_telefone" 
                                    placeholder="Digite o telefone "
                                    value="{{ $medico->med_telefone}}"
                                    >
                           <label for="floatingInput">Telefone</label>
                        </div>
                         <div class="form-floating mb-3">
                        
                            <input type="text" 
                                    class="form-control" 
                                    id="med_cpf"
                                    name="med_cpf" 
                                    placeholder="Digite o cpf "
                                    value="{{ $medico->med_cpf}}"
                                    >
                                     <label for="floatingInput">CPF</label>
                        </div>
                          <div class="form-floating mb-3">
                        
                            <input type="text" 
                                    class="form-control" 
                                    id="med_especialidade"
                                    name="med_especialidade" 
                                    placeholder="Digite sua especialidade "
                                    value="{{ $medico->med_especialidade}}"
                                    >
                                     <label for="floatingInput">Especialidade</label>
                        </div>
                          <div class="form-floating mb-3">
                        
                            <input type="text" 
                                    class="form-control" 
                                    id="med_email"
                                    name="med_email" 
                                    placeholder="Digite o seu email "
                                    value="{{ $medico->med_email}}"
                                    >
                                     <label for="floatingInput">Email</label>
                        </div>
                          <div class="form-floating mb-3">
                        
                            <input type="text" 
                                    class="form-control" 
                                    id="med_cfm"
                                    name="med_cfm" 
                                    placeholder="Digite o cfm "
                                    value="{{ $medico->med_cfm}}"
                                    >
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