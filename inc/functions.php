<?php
// --- PHP - Random Quote Generator ---
// How do you work on php and test it without using a seperate php file?


// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array 
$quotes = array(

  array('quote' => 'The only way to learn a new programming language is by writing programs in it.',
        'source' => 'Dennis   Richie',
        'citation' => '',
        'year' => ''),
  array('quote' => 'Talk is cheap. Show me the code.',
        'source' => 'Linus Torvalds',
        'citation' => '',
        'year' => '1984'),
   array('quote' => 'Testing leads to failure, and failure leads to understanding.',
        'source' => 'Burt Rutan',
        'citation' => '',
        'year' => ''),
   array('quote' => 'The best error message is the one that never shows up.',
        'source' => 'Thomas Fuchs',
        'citation' => '',
        'year' => ''),
   array('quote' => 'Programs must be written for people to read, and only incidentally for machines to execute.',
        'source' => 'Harold Abelson',
        'citation' => 'Structure and Interpretation of Computer Programs',
        'year' => '1984')
);


  
// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array){
  
  $randomElement = $array[rand(array_key_first($array),array_key_last($array))]; 
  return $randomElement;  
} 



//Create the printQuote function.
function printQuote($array){
 
  
  $quoteElement = getRandomQuote($array);
  $source = $quoteElement['source'];
  $quote = $quoteElement['quote'];
  $citation = $quoteElement['citation'];
  $year = $quoteElement['year'];
  


echo "<p class=\"quote\">" . $quote . "</p>";
echo "<p class=\"source\">" . $source;
  if ($citation){
    echo  "<span class=\"citation\">" . $citation . "</span>";
  }
  if ($year){
    echo  "<span class=\"year\">" . $year . "</span>";  
  }
echo "</p>";
  
}

printQuote($quotes);


?>