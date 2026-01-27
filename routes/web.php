<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Luis';
    $idade = 21;
    $arr = [10,20,30,40,50];
    $nomes = ["Flavio", "Maria", "Bruno", "Saulo"];

    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => 21, 
            'profissao' => 'Desenvolvedor Back-end',
            'arr' => $arr,
            'nomes' => $nomes,
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});