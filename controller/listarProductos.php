<?php

require_once __DIR__.'/model/getProducts.php';

$productos = getProducts(connexio, 1);
echo productos;

?>