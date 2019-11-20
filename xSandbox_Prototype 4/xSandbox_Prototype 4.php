<?php
echo "test" ;

class Movie {

var $title ;
var $sound_rating ;                             
var $acting_rating ;
var $effects_rating ;
var $music_rating ;
}

class category_weight {                     //Created a class for the weights as they might get change or new ones add later

    var $sound_weight   = 0.20  ;                              
    var $acting_weight  = 0.30  ;
    var $effects_weight = 0.45  ;
    var $music_weight   = 0.05  ;
    }


$Titanic = new Movie ;
$Titanic ->sound_rating   = 4 ;
$Titanic ->acting_rating  = 5 ;
$Titanic ->effects_rating = 4 ;
$Titanic ->music_rating   = 3 ;             

/* Next geting a method the do the calculation 
*/

protected static function method() {
    return "methods test ";
  }

  Movie::method();






/* 
echo $Titanic ->sound_rating*0.20 ;      good but need to take var from category_weight
echo $Titanic ->sound_rating*$sound_weight ;  does not work! Need method

*/






?>

