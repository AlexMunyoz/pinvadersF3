<?php
class ia
{

  // propiedades las cuales se definen mediante public
  public $columna = 0;
  public $fila = 1;

  // Declaración de un método
  //en metodos usamos public function, get  pide y return da.
  public function getColumna() {
      return $this->columna;
  }
  public function getFila() {
    //rand es random (aleatorio en ingles) y lleva un codigo el cual hara que sea aleatorio la fila (el numero)
      return $this->fila;
  }
//setters
public function setFila($fil){
   if ($fil>3){
     $this->fila = 3;
   }
  elseif ($fil<0){
    $this->fila=0;
  }
  else{
    $this->fila = $fil;
  }
}
public function setColumna($col){
  if ($col>3){
  $this->columna = 3;
  }
  elseif ($col<0){
    $this->columna = 0;
  }
  else{
    $this->columna = $col;
  }
}
//aqui pongo para que cuando demos click se mueva random
public function randomPos(){
  $this->columna=rand(0,3);
  $this->fila=rand(0,3);
}

}
?>
