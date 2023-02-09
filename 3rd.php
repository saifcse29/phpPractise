<html>
    
        <h2> Learn php </h2>
        <body>
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
echo "<br>";
/*strpos() - Search For a Text Within a String. The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE*/
echo "strpos() - Search For a Text Within a String <br>";
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo "<br>";
//The PHP str_replace() function replaces some characters with some other characters in a string
echo "The PHP str_replace() function replaces some characters with some other characters in a string <br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";
echo "<br>";
echo("The value of pi is: ".pi()); // returns 3.1415926535898
echo "<br>";
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo "<br>";
echo(max(0,  150, 30, 20, -8, -200));  // returns 150
echo "<br>";
echo "<br>";
echo(abs(-6.7));  // returns 6.7
echo "<br>";
echo "<br>";
echo(sqrt(64));  // returns 8
echo "<br>";
echo "<br>";
echo(round(0.60));  // returns 1
echo "<br>";
echo(round(0.49));   // returns 0
echo "<br>";
echo "<br>";
echo(rand());
echo "<br>";
echo(rand(10, 100));
echo "<br>";
echo "<br>";






?>

</body>
</html>
