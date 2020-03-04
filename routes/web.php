<?php

/* Web Routes */

//Principal
Route::get('/', 'StartController@manager')->name('start'); // Gerenciador

//Menus: Level 2
Route:: get('/cargos', 'MenuController@cadastro_de_cargos')->name('cargos'); //Acessa o controller de menus e o método de cadastro de cargos
Route:: get('/programadores','MenuController@cadastro_de_programadores')->name('programadores'); //Acessa o controller de menus e o método de cadastro de programadores

//Inclusões
Route:: post('/inclusao_de_cargos','MenuController@inclusao_de_cargos')->name('inc_cargos'); //Método para incluir os cargos
Route:: post('/inclusao_de_programadores','MenuController@inclusao_de_programadores')->name('inc_programadores'); //Método para incluir os programadores

//Alterações
Route:: get('/alteracao_de_programadores/{id}','MenuController@alteracao_de_programadores')->name('alt_programadores'); //Método para alterar os programadores

//Deleções
Route:: get('/delecao_de_programadores/{id}','MenuController@delecao_de_programadores')->name('del_programadores'); //Método para deletar os programadores

//Datatables
Route:: get('/listagem_de_programadores','MenuController@listagem_de_programadores_view')->name('listagem_de_programadores_view');
Route:: get('/listagem_de_programadores_dat','MenuController@listagem_de_programadores')->name('listagem_de_programadores_dat');