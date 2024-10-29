<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AuthController;

// Rota para salvar novo paciente (fora do middleware 'auth')
Route::post('/pacientes/salvar/user', [PacienteController::class, 'salvarNovoPaciente'])->name('pacientes.salvar');

// Middleware para rotas de administrador
Route::middleware('auth')->group(function () {
    // Página do administrador
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    // Rotas de Médicos
    Route::get("/medico", [MedicoController::class, 'index']);
    Route::get('/dados-medico', [MedicoController::class, 'index'])->name('dados.medico');
    Route::get("/medico/exc/{id}", [MedicoController::class, 'ExcluirMedico'])->name('medico_ex');
    Route::get("/medico/upd/{id}", [MedicoController::class, 'BuscarAlteracao'])->name('medico_upd');
    Route::post('/medico', [MedicoController::class, 'IncluirMedico']);
    Route::post('/medico/upd', [MedicoController::class, 'ExecutaAlteracao']);

    // Rotas de Pacientes
    Route::get('/dados-paciente', [MedicoController::class, 'index'])->name('dados.paciente');
    Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
    Route::get('/pacientes/{id}', [PacienteController::class, 'detalhesPaciente'])->name('pacientes.detalhes');
    Route::get('/pacientes/editar/{id}', [PacienteController::class, 'formularioAlterar'])->name('pacientes.formularioAlterar');
    Route::post('/pacientes/salvarAlterar', [PacienteController::class, 'salvarAlterarPaciente'])->name('pacientes.salvarAlterar');
    Route::get('/pacientes/excluir/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');

    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Página principal (pública)
Route::get('/', function () {
    return view('pagina_principal_layout.index');
})->name('home');

// Página de Agendamento (pública)
Route::get('/agendamento', [PacienteController::class, 'agendarConsulta'])->name('agendamento.index');





// Registrar (público)
Route::get("/registrar", function() {
    return view("admin.registrar");
})->name('register'); 
Route::post("/registrar", [AuthController::class, 'register']);

// Login (público)
Route::get("/login", function() {
    return view("admin.login");
})->name('login');
Route::post("/login", [AuthController::class, 'login']);



//teste

Route::get('/testar-telegram', [PacienteController::class, 'testarTelegram']);
