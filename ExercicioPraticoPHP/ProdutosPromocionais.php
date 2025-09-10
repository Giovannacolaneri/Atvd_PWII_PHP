<?php 
require_once "Produto.php";

class ProdutosPromocionais extends Produto {
    // atributo do produto promocional
    private $desconto;

    // Construtor
    public function __construct($nome, $marca, $preco, $estoque, $desconto){
        parent::__construct($nome, $marca, $preco, $estoque);
        $this->desconto = $desconto;
    }

    // Métodos
    public function calculaDesconto(){
        if($this->getPreco() < 10){
            return "Não possui desconto disponível para esse produto!<br><br>";
        } else {
            $this->desconto = $this->getPreco() * 0.1;
            return "Possui desconto de 10%<br><br>";
        }
    }

    public function precoComDesconto(){
        $precoComDesconto = $this->getPreco() - $this->desconto;
        return "O preço final com desconto é R$ $precoComDesconto <br><br>";
    }

    public function getDesconto(){
        return $this->desconto;
    }

    public function setDesconto($novoDesconto){
        if($novoDesconto >= 0){
            $this->desconto = $novoDesconto;
        } else {
            echo "Desconto inválido<br>";
        }
    }
}
?>
