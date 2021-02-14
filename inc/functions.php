<?php
// --- PHP - Random Quote Generator ---

/*
  Create a multi-demensional array
  Create associative arrays in the inner arrays containing quotes, sources, citations, and years
*/
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


  
/*
  Read in a multi-demensional  array of quotes,sources, ciations, and years
  Create variable that is equal to a random element of the array
  Return that variable 
*/
function getRandomQuote($array){
  
  $randomElement = $array[rand(array_key_first($array),array_key_last($array))]; 
  return $randomElement;  
} 



/*
  Read  the random quote element(an array) as an argument
  Assign source,quote, citation, year to variables
  Create  html and concatenate source, quote, citation, and year variables into html

*/
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

//display the concatenated html
printQuote($quotes);


?>