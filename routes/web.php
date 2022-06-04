<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\User\IndexConrtoller as AdminUserIndexController;
use App\Http\Controllers\Admin\Companies\IndexController as CompaniesAdminController;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\Company\IndexController as CompanyIndexController;
use App\Http\Controllers\Company\CreateController as CompanyCreateController;
use App\Http\Controllers\Company\StoreController as CompanyStoreController;
use App\Http\Controllers\Company\ShowController as CompanyShowController;
use App\Http\Controllers\Company\EditController as CompanyEditController;
use App\Http\Controllers\Company\UpdateController as CompanyUpdateController;
use App\Http\Controllers\Company\DeleteController as CompanyDeleteController;


use App\Http\Controllers\Department\IndexController as DepartmentIndexController;
use App\Http\Controllers\Department\CreateController as DepartmentCreateController;
use App\Http\Controllers\Department\StoreController as DepartmentStoreController;
use App\Http\Controllers\Department\ShowController as DepartmentShowController;
use App\Http\Controllers\Department\EditController as DepartmentEditController;
use App\Http\Controllers\Department\UpdateController as DepartmentUpdateController;
use App\Http\Controllers\Department\DeleteController as DepartmentDeleteController;

use App\Http\Controllers\Board\IndexController as BoardIndexController;
use App\Http\Controllers\Board\CreateController as BoardCreateController;
use App\Http\Controllers\Board\StoreController as BoardStoreController;
use App\Http\Controllers\Board\ShowController as BoardShowController;
use App\Http\Controllers\Board\EditController as BoardEditController;
use App\Http\Controllers\Board\UpdateController as BoardUpdateController;
use App\Http\Controllers\Board\DeleteController as BoardDeleteController;


use App\Http\Controllers\Problem\IndexController as ProblemIndexController;
use App\Http\Controllers\Problem\CreateController as ProblemCreateController;
use App\Http\Controllers\Problem\StoreController as ProblemStoreController;
use App\Http\Controllers\Problem\ShowController as ProblemShowController;
use App\Http\Controllers\Problem\EditController as ProblemEditController;
use App\Http\Controllers\Problem\UpdateController as ProblemUpdateController;
use App\Http\Controllers\Problem\DeleteController as ProblemDeleteController;



use App\Http\Controllers\Task\IndexController as TaskIndexController;
use App\Http\Controllers\Task\CreateController as TaskCreateController;
use App\Http\Controllers\Task\StoreController as TaskStoreController;
use App\Http\Controllers\Task\ShowController as TaskShowController;
use App\Http\Controllers\Task\EditController as TaskEditController;
use App\Http\Controllers\Task\UpdateController as TaskUpdateController;
use App\Http\Controllers\Task\DeleteController as TaskDeleteController;



//Route::get('{page}', MainController::class)->where('page', '.*');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', AdminIndexController::class)->name('admin.index');

    Route::group(['prefix' => 'companies'], function () {
        Route::get('/', CompaniesAdminController::class);
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', AdminUserIndexController::class)->name('admin.user.index');
    });
});


Route::get('/', IndexController::class);

Route::group(['prefix' => 'company'], function () {
    Route::get('/', CompanyIndexController::class)->name('company.index');
    Route::get('/create', CompanyCreateController::class)->name('company.create');
    Route::post('/', CompanyStoreController::class)->name('company.store');
    Route::get('/{company}', CompanyShowController::class)->name('company.show');
    Route::get('/{company}/edit', CompanyEditController::class)->name('company.edit');
    Route::patch('/{company}', CompanyUpdateController::class)->name('company.update');
    Route::delete('/{company}', CompanyDeleteController::class)->name('company.delete');

});

Route::group(['prefix' => 'department'], function () {
    Route::get('/', DepartmentIndexController::class)->name('department.index');
    Route::get('/create', DepartmentCreateController::class)->name('department.create');
    Route::post('/', DepartmentStoreController::class)->name('department.store');
    Route::get('/{department}', DepartmentShowController::class)->name('department.show');
    Route::get('/{department}/edit', DepartmentEditController::class)->name('department.edit');
    Route::patch('/{department}', DepartmentUpdateController::class)->name('department.update');
    Route::delete('/{department}', DepartmentDeleteController::class)->name('department.delete');

});

Route::group(['prefix' => 'board'], function () {
    Route::get('/', BoardIndexController::class)->name('board.index');
    Route::get('/create', BoardCreateController::class)->name('board.create');
    Route::post('/', BoardStoreController::class)->name('board.store');
    Route::get('/{board}', BoardShowController::class)->name('board.show');
    Route::get('/{board}/edit', BoardEditController::class)->name('board.edit');
    Route::patch('/{board}', BoardUpdateController::class)->name('board.update');
    Route::delete('/{board}', BoardDeleteController::class)->name('board.delete');

});

Route::group(['prefix' => 'problem'], function () {
    Route::get('/', ProblemIndexController::class)->name('problem.index');
    Route::get('/create', ProblemCreateController::class)->name('problem.create');
    Route::post('/', ProblemStoreController::class)->name('problem.store');
    Route::get('/{problem}', ProblemShowController::class)->name('problem.show');
    Route::get('/{problem}/edit', ProblemEditController::class)->name('problem.edit');
    Route::patch('/{problem}', ProblemUpdateController::class)->name('problem.update');
    Route::delete('/{problem}', ProblemDeleteController::class)->name('problem.delete');

});

Route::group(['prefix' => 'task'], function () {
    Route::get('/', TaskIndexController::class)->name('task.index');
    Route::get('/create', TaskCreateController::class)->name('task.create');
    Route::post('/', TaskStoreController::class)->name('task.store');
    Route::get('/{task}', TaskShowController::class)->name('task.show');
    Route::get('/{task}/edit', TaskEditController::class)->name('task.edit');
    Route::patch('/{task}', TaskUpdateController::class)->name('task.update');
    Route::delete('/{task}', TaskDeleteController::class)->name('task.delete');

});
