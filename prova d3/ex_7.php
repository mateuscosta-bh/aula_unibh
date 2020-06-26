<?php
class SuperHeroi {
public function Heroi($id, $nome, $poderEspecial, $energia, $forca, $origem ){
    $this -> setid($id);
    $this -> setnome($nome);
    $this -> setpoderEspecial($poderEspecial);
    $this -> setenergia($energia);
    $this -> setforca($forca);
    $this -> setorigem($origem);
}
public function getid()
{
    return $this ->id ;
}
public function setid($id)
{
    $this ->id = $id;
}
public function nome()
{
    return $this ->nome;
}
public function energia()
{
    return $this ->energia ;
}
public function poderEspecial()
{ 
    return $this ->poderEspecial;
}
public function getid(){
    return $this ->id;
}
public function setid($id)
$this ->id = $id
public function getpoderEspecial(){
    return $this ->poderEspecial;
}



$n1 = new SuperHeroi ("1", "Son Goku", "kaioken","4000","8100","planeta vegeta")
$n1 = new SuperHeroi ("2", "Kuririn", "kaioken","1500","4000","planeta Terra")
$n1 = new SuperHeroi ("1", "Harry Potter", "magica","3000","5000","terra")
$n1 = new SuperHeroi ("1", "honey wesley", "magica","2000","3500","terra")

public function aumentarEnergia($aumentarEnergia){
    $this -> $energia*11517928;}
    public function calculopoder($calculopoder){
    $this -> $energia/$forca;}
}
?>