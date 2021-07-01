   <?php
   $a=array(10,10,10);
  echo "sum =" .array_sum($a)."<br>";
  

  $a=array(50,40,60);
  echo array_sum($a)."<br>";

  $t=array(20,60,90);
  echo "sum = " .array_sum($t);

  $c=array("a" => 2.5,"t"=> 5.7,"y" => 9.4);
   echo "sum =" .array_sum($c)."<br>";


   $a=["c" => 1.6,"d" => 5.4,"r" => 9.4];
   echo array_sum($a);

  $a=array(10,50,80);
  echo array_sum($a);


  $a=array(50,40,20);
  echo array_sum($a);

  $a=array(10,20,50);
  echo array_product($a). "<br>";

  $a=array(10,20,30);
  echo "product =" .array_product($a);

  $a=[10,50,90];
  echo array_product($a);
   ?>