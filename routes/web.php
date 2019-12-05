<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/actionItems', function () {
    return view('actionItems');
});

Route::get('/changes', function () {
    return view('changes');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/decisions', function () {
    return view('decisions');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/deliverables', function () {
    return view('deliverables');
});

Route::get('/deliverables/create', function () {
    return view('delivCreate');
});

Route::get('/issues', function () {
    return view('issues');
});

Route::get('/issues/create', function () {
    return view('issueCreate');
});

Route::get('/referenceDoc', function () {
    return view('refDoc');
});

Route::get('/referenceDoc/upload', function () {
    return view('refDocUpload');
});

Route::get('/requirements', function () {
    return view('requirements');
});

Route::get('/risks', function () {
    return view('risks');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/tasks/create', function () {
    return view('taskCreate');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});
