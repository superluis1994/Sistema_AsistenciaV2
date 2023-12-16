<?php
namespace App\Controller;
use Core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Setting\Token;

class EjemploControllers extends Token{
   private $header=[];
   public function __construct()
   {
      $this->header[1] = "Auth";
   }
   public function index(){
      $this->header[2] = "Ejemplos2";
    return Utils::view('Auth.sign-in',$data=[],$this->header);
 }
   /**SE ENCARGA DE CARGAR LOS DATOS */
    public function loadMsg()
    {

    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS FETCH */
    public function questionMsg()
    {
        
    }
}