<?php
use lib\Route;
use app\controllers\HomeController;
use app\controllers\Dia1Controller;
use app\controllers\Dia2Controller;


Route::get("/", [HomeController::class,"index"]);
Route::get("/dia1", [Dia1Controller::class,"index"]);
Route::get("/dia2", [Dia2Controller::class,"index"]);


Route::dispatch();