<?php
// --- PHP - Random Quote Generator ---



// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array 
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


  
// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array){
  $randomElement;
  
  $randomElement = $array[rand(0,4)]; 
  return $randomElement;  
} 



//Create the printQuote function.
function printQuote($quotes){
  $quoteElement;
  $source; 
  $quote;  
  
  $quoteElement = getRandomQuote($quotes);
  $source = $quoteElement['source'];
  $quote = $quoteElement['quote'];
  
  //echo out the html line by with concatenation

echo "<p class=\"quote\"> [quote here] </p>";
echo "<p class=\"source\"> [source here]";
echo  "<span class=\"citation\"> [citation here] </span>";
echo  "<span class=\"year\"> [year here] </span>";
echo "</p>";
  
}

printQuote($quotes);


?>