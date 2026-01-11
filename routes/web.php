<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use PhpParser\Node\Expr\FuncCall;
use SebastianBergmann\CodeCoverage\Test\Target\Function_;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
Route::get('usuario-mensaje', function(){
    return view('usuario.usuario-mensaje');
})->name('usuario-mensaje');

Route::view('vista-registro', 'usuario.usuario-registro')->name('vista-registro');

Route::post('usuario-registro', function(){
    return view('usuario.usuario-registro');
})->name('usuario-registro');
*/

Route::resource('usuario', UsuarioController::class);

/* bloque de codigo que solo se encarga de mostrar un mensaje. No se usa el controlador
Route::get('obtenerUsuario', function(){
    return view('usuario');
})->name('usuario');
*/

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
