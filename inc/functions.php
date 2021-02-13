<?php
// --- PHP - Random Quote Generator ---




$quotes = array(

  array('Dennis   Richie' => '"The only way to learn a new programming language is by writing programs in it."'),
  array('Andrew Hunt'=> '"In some ways, programming is like painting. You start with a blank canvas and certain basic raw materials. You use a combination of science, art, and craft to determine what to do with them.'),
  array('Burt Rutan' => '"Testing leads to failure, and failure leads to understanding."'),
  array('Thomas Fuchs'=> '"The best error message is the one that never shows up."'),
  array('Harold Abelson' => '“Programs must be written for people to read, and only incidentally for machines to execute.”')
 
);


  

function getRandomQuote(){

  global $quotes;
  $randomElement;

  $randomElement = $quotes[rand(0,4)];
  var_dump($randomElement);

} 

getRandomQuote();

function printQuote(){
  
}




?>