<?php

class Carros{
    private $id;
    private $imagem;
    private $nome;
    private $marca;
    private $modelo;
    private $ano;
    private $preco;


    public function __construct($imagem, $nome, $marca, $modelo, $ano, $preco){
        $data = new \DateTime();
        $this->id = $data->getTimestamp() + rand();
        $this->imagem = $imagem;
        $this->nome = $nome;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->preco = $preco;
    }


    public static function fromArray($carrosVetor)
    {

        $imagem = $carrosVetor["imagem"];
        $nome = $carrosVetor["nome"];
        $marca = $carrosVetor["marca"];
        $modelo = $carrosVetor["modelo"];
        $ano = $carrosVetor["ano"];
        $preco = $carrosVetor["preco"];
        return new Carros($imagem, $nome, $marca, $modelo, $ano, $preco);
    }

    public function atualizar($carrosVetor)
    {

        $this->imagem = $carrosVetor["imagem"];
        $this->nome = $carrosVetor["nome"];
        $this->marca = $carrosVetor["marca"];
        $this->modelo = $carrosVetor["modelo"];
        $this->ano = $carrosVetor["ano"];
        $this->preco = $carrosVetor["preco"];
        return $this;
    }


    public function getImagem(){
        if (empty($this->imagem)) {
            return "img/default.png";
        }
        return $this->imagem;
    }
     
       public function setImagem($imagem) {
        $this->imagem = $imagem;
       }

    
    public function getNome() {
        return $this->nome;
       }
     
       public function setNome($nome) {
        $this->nome = $nome;
       }

    
    public function getMarca() {
        return $this->marca;
       }
     
       public function setMarca($marca) {
        $this->marca = $marca;
       }
     
       
    public function getModelo() {
        return $this->modelo;
       }
     
       public function setModelo($modelo) {
        $this->modelo = $modelo;
       }

    public function getAno() {
        return $this->ano;
       }
     
       public function setAno($ano) {
        $this->ano = $ano;
       }

    
    public function getPreco() {
        return $this->preco;
       }
     
       public function setPreco($preco) {
        $this->preco = $preco;
       }

    public function getID() {
        return $this->id;
       }
     
       public function setID($id) {
        $this->id = $id;
       }

    public function imprimir()
       {
           echo "<tr>  
               <td> {$this->id}  </td>
               <td> <img src='{$this->getImagem()}'> </td>          
               <td>{$this->nome} </td>
               <td> {$this->marca} </td>
               <td> {$this->modelo} </td>
               <td> {$this->ano} </td>
               <td> {$this->preco} </td>

               <td> <form action='php/EditarItem.php' method='get'>
               <input type='hidden' name='id' value='$this->id'>
               <button type='submit' id='edit'>Editar Item</button>
               </form></td>

               <td> <form action='php/RemoverItem.php' method='get'>
               <input type='hidden' name='id' value='$this->id'>
               <button type='submit' id='remove'>Remover Item</button>
               </form></td>
           </tr>";
       }
}