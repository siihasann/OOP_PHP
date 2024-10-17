<?php 
class Product 
{
  var $name;
  var $price = 'None';
  var $category ;

    
}

$product1 = new Product;
$product2 = new Product;

$product1->name = "Celana";
$product2->name = "Baju";

echo $product1->name . "<br/>";
echo $product2->name . "<br/>";

$class_vars = get_class_vars('Product');

echo "Properti milik Product:";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

if (property_exists('Product', 'name')) {
  echo "Properti name tersedia";
} else {
  echo "properti name tidak tersedia";
}

 ?>