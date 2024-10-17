<?php 
class Product 
{
  var $name;
  var $price = 'None';
  var $category ;

  function checkProduct()
  {
    return "Product tersedia";
  }

  function productDetai()
  {
    return $this->name . ' masuk dalam category ' . $this->category;
  }

    
}

$product1 = new Product;

$product1->name = "Celana";
$product1->category = "Fashion";

echo $product1->name . "<br/>";
echo $product1->category . "<br/>";

echo $product1->checkProduct() . "<br/>";
echo $product1->productDetai() . "<br/>";

$class_methods = get_class_methods('Product');

echo "Methods milik Product:";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

if (method_exists('Product', 'checkProduct')) {
  echo "method checkProduct tersedia";
} else {
  echo "method checkProduct tidak tersedia";
}

 ?>