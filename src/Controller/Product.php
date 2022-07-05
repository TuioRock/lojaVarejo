<?php
namespace APP\Controller;

use APP\Model\Product;
use APP\Utils\Redirect;
use APP\Model\Provider;
use APP\Model\Validation;
use Stringable;

require_once '../../vendor/autoload.php';

if(empty($_POST)){
    Redirect::redirect(message: "Requisição inválida!!!", 
    type: "error");
}

$productBarCode = $_POST['barCode'];
$productName = $_POST['name'];
$productProvider = $_POST['provider'];
$productCost = $_POST['cost'];
$productQuantity = $_POST['quantity'];

$error = array();

if(!Validation::validateBarCode($productBarCode)){
    array_push($error,"O código de barra do produto é inválido");
}

if(!Validation::validateName($productName)){
    array_push($error,"O nome do produto deve conter pelo menos 5 caracteres");
}

if(!Validation::validateNumber($productCost)){
    array_push($error,"O custo de aquisição deve se maior que zero");
}

if(!Validation::validateNumber($productQuantity)){
    array_push($error,"A quantidade em estoque deve ser maior que zero");
}

if($error){ //se o array tiver elementos
    Redirect::redirect(message: $error, type: 'warning');
}else{ //se o array não tiver elementos
    $product = new Product();
    $product->barCode = $productBarCode;
    $product->name = $productName;
    $product->stock = $productQuantity;
    $product->provider = new Provider;
    $product->price = 0;
    
    echo '<pre>';
    var_dump($product);
    echo '</pre>';
}




//redirect("Produto Cadastrado com Sucesso!");