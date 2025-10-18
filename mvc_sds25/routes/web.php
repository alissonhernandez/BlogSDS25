<?php
use lib\Route;
use app\controllers\HomeController;
use app\controllers\Dia1Controller;
use app\controllers\Dia2Controller;
use app\controllers\Dia3Controller;
use app\controllers\Dia4Controller;
use app\controllers\Dia5Controller;
use app\controllers\PerfilController;
use app\controllers\VisitasController;

Route::get("/", [HomeController::class,"index"]);
Route::get("/dia1", [Dia1Controller::class,"index"]);
Route::get("/dia2", [Dia2Controller::class,"index"]);
Route::get("/dia3", [Dia3Controller::class,"index"]);
Route::get("/dia4", [Dia4Controller::class,"index"]);
Route::get("/dia5", [Dia5Controller::class,"index"]);
Route::get("/perfil", [PerfilController::class,"index"]);
Route::get("/visitas", [VisitasController::class,"index"]);
Route::post("/visitas/guardar", [VisitasController::class,"guardar"]);

Route::dispatch();