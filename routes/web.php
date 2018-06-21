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

Route::get('/test', function () {
    $user = \App\User::find(1);
    var_dump($user->account);
    
    var_dump($user->team);
    
    $account = \App\Account::find(1);
    var_dump($account->user);
    
    $team = \App\Team::find(1);
    var_dump($team->user);
});