<?php 
class Produto {
    private $nome;
    private $marca;
    private $preco;
    private $estoque;

    // Construtor
    public function __construct($nome, $marca, $preco, $estoque){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    // Métodos
    public function exibirInfo(){
        return "Nome: $this->nome <br>
        Marca: $this->marca <br>
        Preço: R$ $this->preco <br>
        Estoque: $this->estoque <br><br>";
    }

    public function addEstoque(){
        $this->estoque++;
        return "Você adicionou um produto ao estoque! <br> Estoque atual: $this->estoque <br><br>";
    }

    public function deleteEstoque(){
        if($this->estoque > 0){
            $this->estoque--;
            return "Você retirou um produto do estoque! <br> Estoque atual: $this->estoque <br><br>";
        } else {
            return "O estoque está vazio<br><br>";
        }
    }

    // Getters
    public function getNome(){
        return $this->nome;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    // Setters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setPreco($preco){
        if($preco > 0){
            $this->preco = $preco;
        } else {
            echo "Preço inválido<br>";
        }
    }

    public function setEstoque($estoque){
        if($estoque >= 0){
            $this->estoque = $estoque;
        } else {
            echo "Estoque inválido<br>";
        }
    }
}
?>
