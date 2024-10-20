<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });


// INICIO
Route::get('/', function () {
    return view('inicio');
})->name("inicio");

Route::get('/ayuda',function (){
    return view('ayuda');
})->name('ayuda');

Route::get('/contactanos',function (){
    return view('contactanos');
})->name('contactanos');



// INICIO 2
Route::get('/inicio2', function () {
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');


    // CATALOGO 
    Route::get('/catalogo',function (){
        return view('catalogo');
    })->middleware(['auth', 'verified'])->name('catalogo');


    
        Route::get('/periodo',function (){
            return view('periodo');
        })->middleware(['auth', 'verified'])->name('periodo');

        Route::get('/carreras',function (){
            return view('carreras');
        })->middleware(['auth', 'verified'])->name('carreras');

        Route::get('/plaza',function (){
            return view('plaza');
        })->middleware(['auth', 'verified'])->name('plaza');

        Route::get('/puesto',function (){
            return view('puesto');
        })->middleware(['auth', 'verified'])->name('puesto');

        Route::get('/depto',function (){
            return view('depto');
        })->middleware(['auth', 'verified'])->name('depto');        

        Route::get('/alumno',function (){
            return view('alumno');
        })->middleware(['auth', 'verified'])->name('alumno');

        
    //    
    Route::get('/Plazas.index', function(){
        return view('Plazas.index');
    })->middleware("auth")->name("Plazas.index");

    Route::get('/puestos.index', function(){
        return view('puestos.index');
    })->middleware("auth")->name("puestos.index");



    Route::get('/horarios',function (){
        return view('horarios');
    })->middleware(['auth', 'verified'])->name('horarios');

    Route::get('/proyectosInd',function (){
        return view('proyectosInd');
    })->middleware(['auth', 'verified'])->name('proyectosInd');
    //HORARIOS
        Route::get('/docentes',function (){
            return view('docentes');
        })->middleware(['auth', 'verified'])->name('docentes');

        Route::get('/alumnos',function (){
            return view('alumnos');
        })->middleware(['auth', 'verified'])->name('Halumnos');
    //
    //PROYECTOS INDIVIDUALES
        Route::get('/capacitacion',function (){
            return view('capacitacion');
        })->middleware(['auth', 'verified'])->name('capacitacion');

        Route::get('/asesoria',function (){
            return view('asesoria');
        })->middleware(['auth', 'verified'])->name('asesoria');

        Route::get('/proyectos',function (){
            return view('proyectos');
        })->middleware(['auth', 'verified'])->name('proyectos');

        Route::get('/materialD',function (){
            return view('materialD');
        })->middleware(['auth', 'verified'])->name('materialD');
        
        Route::get('/docencia',function (){
            return view('docencia');
        })->middleware(['auth', 'verified'])->name('docencia');

        Route::get('/asesoriaProy',function (){
            return view('asesoriaProy');
        })->middleware(['auth', 'verified'])->name('asesoriaProy');

        Route::get('/asesoriaSS',function (){
            return view('asesoriaSS');
        })->middleware(['auth', 'verified'])->name('asesoriaSS');

        Route::controller(AlumnoController::class)->group(function(){
            Route::get('/Alumnos2.index', [AlumnoController::class, 'index'])->name('Alumnos2.index');    // INDEX
            
            Route::get('/Alumnos2.create', [AlumnoController::class, 'create'])->name('Alumnos2.create'); // CREATE
            Route::post('/Alumnos2.store', [AlumnoController::class, 'store'])->name('Alumnos2.store');       
            
            Route::get('/Alumnos2.edit/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos2.edit');  // EDIT
            Route::get('/Alumnos2.show/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos2.show');  // VER
            
            Route::post('/Alumnos2.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos2.destroy');// DESRTOY
            Route::post('/Alumnos2.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos2.update');//UPDATE       
            });



            Route::get('/Plazas.index', [PlazaController::class, 'index'])->name('Plazas.index');    // INDEX
    
    Route::get('/Plazas.create', [PlazaController::class, 'create'])->name('Plazas.create'); // CREATE
    Route::post('/Plazas.store', [PlazaController::class, 'store'])->name('Plazas.store');       
    
    Route::get('/Plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('Plazas.edit');       // EDIT
    Route::get('/Plazas.show/{plaza}', [PlazaController::class, 'show'])->name('Plazas.show');       // VER
    
    Route::post('/Plazas.destroy/{plaza}', [PlazaController::class, 'destroy'])->name('Plazas.destroy');// DESRTOY
    Route::post('/Plazas.update/{plaza}', [PlazaController::class, 'update'])->name('Plazas.update');//UPDATE


//
Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('Puestos.index');    // INDEX
    
Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('Puestos.create'); // CREATE
Route::post('/Puestos.store', [PuestoController::class, 'store'])->name('Puestos.store');       

Route::get('/Puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('Puestos.edit');       // EDIT
Route::get('/Puestos.show/{puesto}', [PuestoController::class, 'show'])->name('Puestos.show');       // VER

Route::post('/Puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('Puestos.destroy');// DESRTOY
Route::post('/Puestos.update/{puesto}', [PuestoController::class, 'update'])->name('Puestos.update');//UPDATE

    //TUTORIAS
       

        Route::get('/capacitacion',function (){
            return view('capacitacion');
        })->middleware(['auth', 'verified'])->name('capacitacion');
    //
    // INSTRUMENTACION Y TUTORIAS
    Route::get('/instrumentacion',function (){
        return view('instrumentacion');
    })->middleware(['auth', 'verified'])->name('instrumentacion');

    Route::get('/tutorias',function (){
        return view('tutorias');
    })->middleware(['auth', 'verified'])->name('tutorias');





Route::get('/dashboard', function () {
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
