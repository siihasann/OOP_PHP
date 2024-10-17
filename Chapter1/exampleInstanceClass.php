<?php 
class Product 
{
    
}

$product1 = new Product;
$product2 = new Product;

$classes = get_declared_classes();

echo "Classes:" . implode(', ', $classes) . "<br/>";

$classNames = ['Product', 'Category', 'category'];


// Mencoba cek class Student di atas apakah ada atau tidak.
foreach ($classNames as $className) {
    if (class_exists($className)) {
        echo "{$className} class ada . <br/>";

    } else {
        echo "{$className} class tidak ada. <br/>";
    }
}

 ?>