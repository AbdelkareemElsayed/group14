<?php 
 

 class calcArea{


      public function __call($name,$arg){

             if($name == "area"){

                switch (count($arg)) {
                    case 1:
                        # code...
                        return pi()*$arg[0]*$arg[0];
                        break;

                    case 2: 
                        # code...
                        return $arg[0]*$arg[1];
                        break;    
    
                }
             }
      }

 }





    $calc = new calcArea();

    # Circle Area  
   echo  'Circle Area = '.$calc->area(2);

   echo '<br>';

    # Rectangle Area 
   echo  'Rectangle Area = '.$calc->area(2,3);