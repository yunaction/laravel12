<?php

use App\Http\Controllers\HelloInvokeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello1/{msg?}', function ($msg='no message.') {
    return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size: 16pt; color: #999;}
h1 {font-size: 100pt; text-align: right; color: #eee; margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>Hello</h1>
<p>{$msg}</p>
<p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/other', [HelloController::class, 'other']);
Route::get('/hello/invoke', HelloInvokeController::class);
