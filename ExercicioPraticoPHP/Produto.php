<?php 
class Produto {
    private $nome;
    private $marca;
    private $preco;
    private $estoque;

    //construtor
    public function construtor ( $nome, $marca, $preco, $estoque){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->preco = $preco;
        $this->estoque = $estoque;

    //metodos
    public function exibirInfo(){
        return "Nome: $this->nome \n
        Marca: $this->marca\n
        Preco: $this->preco\n
        Estoque: $this->estoque\n
        ";
    public function addEstoque(){
        return "Voce esta adicionando um produto ao estoque!";
    }

    }

    }
}
?>