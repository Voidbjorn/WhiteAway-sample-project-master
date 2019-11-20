<?php
echo "test" ;

class Movie {

var $title ;
var $sound_rating ;                             
var $acting_rating ;
var $effects_rating ;
var $music_rating ;
}

class category_weight {

var $sound_weight   = 0   ;  
  

}




$Titanic = new Movie ;
$Titanic ->sound_rating = 4 ;
$Titanic ->acting_rating = 5 ;
$Titanic ->effects_rating = 4 ;
$Titanic ->music_rating = 3 ;





echo $Titanic ->sound_rating*0.20 ;


?>

