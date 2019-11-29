<?php

//require '/../../vendor/autoload.php';
 //require $_SERVER['DOCUMENT_ROOT'].'/citas/vendor/autoload.php'; 
//require 'C:/xampp/htdocs/citas/vendor/autoload.php';
use \PHPUnit\Framework\TestCase;


class CitasController extends TestCase{   

     public function testEquality()  {
                $datosController = array(
                  'paciente_id' => 3,
                  'usuario_id' => 2,
                  'fecha' => '12/05/2019',
                  'hora' => '15:34',
                  'detalles' => 'ninguno',
                  'observaciones' => 'observaciones'
            );
           $this->assertSame(
            [  $datosController['paciente_id'], $datosController['usuario_id'], $datosController['fecha'], $datosController['hora'],
                 $datosController['detalles'], $datosController['observaciones'] ],
                  [3,2,"12/05/2019", "15:34","ninguno","observaciones"]
        );
    }

       public function testEmpty()    {
             $datosController = array(
                  'especialidad' => 'ginecologia',
                  'colegiatura' => '1345',
                  'rne' => 'rne',
                  'persona_id' => 5,
            );
            $datosController2 = array();

        $this->assertEmpty($datosController2);

    }
 
    public function testEliminar()
    {     
      //resultad que viene del modelo
         $respuesta = "aa";
         if($respuesta){
           $this->assertTrue(true);
         }else {
           $this->assertTrue(false);
         }
       
    }


   /*
      public  function adddd(){

         $array = array(
                  "0" => "bar",
                  "1" => "foo",
              ); 
         
         $this->assertEquals('nene',$array['0']);
        
     }*/

       public function testPushAndPop()
    {
        $dataMedico = [];
        //comienza con cero data
           $datosController = array(
                  'especialidad' => 'ginecologia',
                  'colegiatura' => '1345',
                  'rne' => 'rne',
                  'persona_id' => 5,
            );

        $this->assertSame(0, count($dataMedico));

        array_push($dataMedico, $datosController['especialidad']);
        array_push($dataMedico, $datosController['colegiatura']);
        array_push($dataMedico, $datosController['rne']);
        array_push($dataMedico, $datosController['persona_id']);

       // $this->assertSame('foo', array_pop($stack));
        $this->assertSame(4, count($dataMedico));
    }



}
