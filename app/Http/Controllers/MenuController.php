<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cargos; //Carregando a Model Cargos
use App\Programadores; //Carregando a Model Programadores

/*Datatables
   composer require yajra/laravel-datatables-oracle:"~7.0"
   config / app.php

   'providers' => [  
      ....
      Yajra \ DataTables \ DataTablesServiceProvider :: class ,
   ]
   'aliases' => [  
      ....
      'DataTables' => Yajra 
*/

use Yajra\Datatables\Datatables;
   

class MenuController extends Controller
{
   public function cadastro_de_cargos(){
      return view('cadastro_de_cargos');
   }    
   
   public function cadastro_de_programadores(){
      $lista_de_cargos = Cargos::select ('id','cargo')->get();
      return view('cadastro_de_programadores', compact('lista_de_cargos'));
   }

   public function inclusao_de_cargos(Request $request){
      $cargos = new Cargos(); //Model linkada com a classe Cargos      
      $cargos->cargo = $request->cargo;      
      $cargos->save();
      return redirect()->route('start')->with('message', "Cargo cadastrado com sucesso!"); 
   }

   public function inclusao_de_programadores(Request $request){
      $programadores = new Programadores(); //Model linkada com a classe Programadores
      $programadores->nome = $request->nome;
      $programadores->idade = $request->idade;
      $programadores->cidade = $request->cidade;
      $programadores->email = $request->email;
      $programadores->cargo = $request->cargo;
      $programadores->anos = $request->anos;
      $programadores->save();

      if($request->tipo=='alt'){
         return redirect()->route('listagem_de_programadores_view')->with('message', "Dados alterados com sucesso!"); 
      }else{
         return redirect()->route('start')->with('message', "Programador cadastrado com sucesso!"); 
      }
   }


   public function listagem_de_programadores_view(){
      return view ('listagem_de_programadores');     
   }

   public function listagem_de_programadores(){
                        
      return Datatables::of(
         Programadores::select ('programadores.id','programadores.nome', 'programadores.idade', 'programadores.cidade','programadores.email','programadores.cargo','programadores.anos','cargos.cargo')           
            ->join('cargos', 'programadores.cargo', '=', 'cargos.id')
            ->get()
      )->make(true);

   }

   public function alteracao_de_programadores($id){
      $alt = Programadores:: where('id','=',$id)->get();
      $lista_de_cargos = Cargos::select ('id','cargo')->get();
      return view('cadastro_de_programadores',compact('alt','lista_de_cargos'));
   }

   public function delecao_de_programadores($id){
      $prog = Programadores::findOrFail($id);
      //Deletando
      $prog->delete(); 
      return redirect()->route('listagem_de_programadores_view')->with('message', "Programador excluído com sucesso!");
   }
}