<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index() {

        $pessoas = [
            [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
                'nome' => 'Alessandro', 
                'birth' => '29/01/90', 
                'idade' => 29],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Bonieky', 
                'birth' => '10/11/1933', 
                'idade' => 90],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Maria', 
                'birth' => '01/01/2020', 
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;
    
        return view('bemvindo', $dados);
    }




    public function exercicio2() { 
        
        $numero = 1;


        $url = 'https://i.pravatar.cc/150?img='.$numero;


        $dados['url'] = $url;

        return view('exercise', $dados);
    }

    
    public function firstFunction(){

        $data = array();

        $data = 
        [
            'apelido_nome' => "Roma",
            'idade' => 90,
            'data_nascimento' => '10/12/1994',
            'sobrenome' => 'Rafael'
        ];

        return view('bemvindo', $data);
    }

    public function sair(){
        return view('sair');
    }

    public function html(){
        $data = [
            'html' => '<b style = "color: red"> Negrito </b>'
        ];

        return view('viewComEdicao', $data);
    }

    public function users(Request $r)
    {
        $data = [
            'quantidade' => $r->qnt
        ];

        return view('usuarios', $data);
    }
}
