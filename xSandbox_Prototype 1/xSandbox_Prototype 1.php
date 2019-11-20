<?php

echo "start of php" ;
echo "<br />";
echo "<br />";

//Very simpe just to get started next step implement: input a movie's title, and get scores with the rating



$title = "Titanic";
$sound_rating = 4 ;
$acting_rating = 5 ;
$effects_rating = 4 ;
$music_rating = 3 ;


$overall_rating = ($sound_rating * 0.2) + ($acting_rating*0.3) + ($effects_rating*0.45) + ($music_rating*0.05)   ;        

/* specific weights are given by from Requirements
 weights might be diffent in the furture. Create weights Class? */
                                                        
                                                        

echo "The movie " . $title . " have an overall rating of " . $overall_rating;



?>