<?php
require_once __DIR__ . '/../config/twig.php';
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
$products = array_chunk($products, 3);
echo $twig->render('product.html.twig', ['products'=> $products]);
