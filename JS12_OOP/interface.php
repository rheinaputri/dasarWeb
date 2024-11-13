<!-- Interface -->
 <?php
 interface Shape
 {
     public function calculateArea();
 }
 
 // Interface Color
 interface Color
 {
     public function getColor();
 }
 
 // Class Circle yang mengimplementasikan Shape dan Color
 class Circle implements Shape, Color
 {
     private $radius;
     private $color;
 
     public function __construct($radius, $color)
     {
         $this->radius = $radius;
         $this->color = $color;
     }
 
     public function calculateArea()
     {
         return pi() * pow($this->radius, 2);
     }
 
     public function getColor()
     {
         return $this->color;
     }
 }
 
 $circle = new Circle(5, "Blue");
 
 echo "Area of Circle: " . $circle->calculateArea() . "<br>";
 echo "Color of Circle: " . $circle->getColor() . "<br>";
 ?>
 