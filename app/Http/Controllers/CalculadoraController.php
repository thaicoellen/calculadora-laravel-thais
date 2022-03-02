<?php

namespace App\Http\Controllers;

class CalculadoraController extends Controller
{
    public function index(){

        if($_POST){
            $operacao = $_POST["operacao"];
        
            if($operacao=="soma"){
                return redirect('calculadora/soma');
            }

            if($operacao=="subtracao"){
                return redirect('calculadora/subtracao');
            }

            if($operacao=="multiplicacao"){
                return redirect('calculadora/multiplicacao');
            }
            if($operacao=="divisao"){
                return redirect('calculadora/divisao');
            }
        }

        return view('calculadora.index', []);
    }

    public function soma(){

        $msg = "";

        if($_POST){

            $v1 = $_POST["valor1"];
            $v2 = $_POST["valor2"];
        
            $total = ($v1+$v2);
        
            $msg = "O resultado somando os dois valores é: ".$total;
        }
        return view('calculadora.soma', ["msg"=>$msg]);
    }

    public function subtracao(){

        $msg = "";

        if($_POST){

            $v1 = $_POST["valor1"];
            $v2 = $_POST["valor2"];
            
            if($v1<$v2){
                $msg = "O valor 2 precisa ser igual ou maior que o valor 1";
                return view('calculadora.subtracao', ["msg"=>$msg]);
            }

            $total = ($v1-$v2);
        
            $msg = "O resultado da subtração é: ".$total;
        }
        return view('calculadora.subtracao', ["msg"=>$msg]);
    }

    public function multiplicacao(){

        $msg = "";

        if($_POST){

            $v1 = $_POST["valor1"];
            $v2 = $_POST["valor2"];
            
            
            $total = ($v1*$v2);
        
            $msg = "O resultado da multiplicação é: ".$total;
        }
        return view('calculadora.multiplicacao', ["msg"=>$msg]);
    }

    public function divisao(){

        $msg = "";

        if($_POST){

            $v1 = $_POST["valor1"];
            $v2 = $_POST["valor2"];
            
            if($v1 < $v2){
                $msg = "O valor 1 precisa ser maior do que o valor 2.";
                return view('calculadora.divisao', ["msg"=>$msg]);
            }
            
            $total = ($v1/$v2);
        
            $msg = "O resultado da divisão é: ".$total;
        }
        return view('calculadora.divisao', ["msg"=>$msg]);
    }
}