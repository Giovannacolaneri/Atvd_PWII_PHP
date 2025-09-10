<?php 
require_once "Produto.php";
require_once "ProdutosPromocionais.php";

// Instânciando objetos 
$p1 = new Produto("Batom", "Avon", 30.99, 12);
$p2 = new Produto("Rimel", "Ruby Rose", 12.99, 30);
$p3 = new Produto("Blush", "Oceanne", 60.0, 10);


$promo1 = new ProdutosPromocionais("Sombra", "RareBeauty", 200.0, 10, 20);

// Exibindo info
echo $p1->exibirInfo();
echo $p2->exibirInfo();
echo $p3->exibirInfo();
echo $promo1->exibirInfo();

// Usando métodos
echo $p1->addEstoque();
echo $p2->deleteEstoque();
$p3->setPreco(50); // usando setter
$p1->setNome("Batom Matte");

$promo1->addEstoque();
$promo1->setDesconto(25); 

echo $promo1->precoComDesconto();
echo $promo1->calculaDesconto();

echo "<br>Após atualizações:<br><br>";
echo $p1->exibirInfo();
echo $p2->exibirInfo();
echo $p3->exibirInfo();
?>
