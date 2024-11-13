<!-- constructor dan destructor -->
 <?php

 class Car
 {
     private $brand;
 
     // Konstruktor untuk membuat objek dan menetapkan brand
     public function __construct($brand)
     {
         echo "A new car is created.<br>";
         $this->brand = $brand;
     }
 
     // Method untuk mendapatkan brand mobil
     public function getBrand()
     {
         return $this->brand;
     }
 
     // Destruktor untuk menghancurkan objek
     public function __destruct()
     {
         echo "The car is destroyed.<br>";
     }
 }
 
 $car = new Car("Toyota");
 echo "Brand: " . $car->getBrand() . "<br>";
 ?>
 
