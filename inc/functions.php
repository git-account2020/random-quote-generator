<?php
// --- PHP - Random Quote Generator ---



$quotes = array(

  array('quote' => '"The only way to learn a new programming language is by writing programs in it."',
        'source' => 'Dennis   Richie'),
  array('quote' => '"In some ways, programming is like painting. You start with a blank canvas and certain basic raw materials. You use a combination of science, art, and craft to determine what to do with them.',
        'source' => 'Andrew Hunt'),
   array('quote' => '"Testing leads to failure, and failure leads to understanding."',
        'source' => 'Burt Rutan'),
   array('quote' => '"The best error message is the one that never shows up."',
        'source' => 'Thomas Fuchs'),
   array('quote' => '“Programs must be written for people to read, and only incidentally for machines to execute.”',
        'source' => 'Harold Abelson')
);


  

function getRandomQuote($array){
  
 
  $randomElement;

  $randomElement = $array[rand(0,4)];
  var_dump($randomElement);
 
  return $randomElement;  


} 


function printQuote($quotes){
$quoteElement = getRandomQuote($quotes);

  
}

printQuote($quotes);


?>