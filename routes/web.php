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
// LP獲得用(1)
Route::get('info1', function () {
    return view('fb.check'); //提出用
    // return view('fb.adran'); //LINE直追加ーAnd
    
    // return view('fb.chatl'); //チャットレディーLINE@誘導
    // return view('fb.pp'); //ワクワク - P活LP
    // return view('fb.job'); //チャットレディー案件訴求
});

//OS識別
Route::get('os', 'AdController@info');

// LP確認用
Route::get('cccheck', function () {
    return view('fb.adran'); //LINE直追加ーAnd
    
    // return view('fb.chatl'); //チャットレディーLINE@誘導
    // return view('fb.pp'); //ワクワク - P活LP
    // return view('fb.job'); //チャットレディー案件訴求
});

//OS識別 - パパ活
Route::get('os', 'AdController@os');