<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'home']);




















//__Single Action Controller__//
//Route::get('/', ProvisionServer::class);

// Route::group(['prefix'=>'account'],function(){

//     Route::get('/profile',function(){
//         return "profile";
//     });

//     Route::get('/login',function(){
//         return "login";
//     });

//     Route::get('/logout',function(){
//         return "logout";
//     });

//     Route::get('/signup',function(){
//         return "signup";
//     });

//     Route::get('/update',function(){
//         return "update";
//     });
// });

//Route::get('/name/{firstname}/{Middlename}/{lastname}',[SiteController::class,'myname']);

