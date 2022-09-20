<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>

    <?php

    echo "<h1>Radi</h1>";

    ?>

    <?php

    // glavna funckija koja poziva ostale funkcije
    // pravilo je da funckija mora da se pozove i nece raditi dok se ne pozove 
    function init()
    {

        calculate();

        echo "</br>";

        saySomething();
    }
    init();

    // first function

    function calculate()

    {
        $numeberOne = 45;

        $numberTwo = 345;

        echo $numeberOne + $numberTwo;
    }

    // secound function

    function saySomething()

    {
        $something = "Hello student do you like the class,Yes or No?";
        echo $something;
    }
    ?>

    <!-- Passing the paramaters in functions -->
    <!-- ne mozes da imas dve isto imaenovane funckije u jednom programu koja su razdvojena php elementima -->
    <?php

    function greeting($name, $message)

    {
        echo "Hello dear $name, i just want to say that you are $message.";
        echo "</br>";
    };
    greeting("Nenad", "the best");


    function calculater($numeberOne, $numberTwo)
    {
        echo "</br>";

        echo $numeberOne + $numberTwo;

        echo "</br>";

        echo $numberTwo / $numeberOne;

        echo "</br>";

        echo $numeberOne * $numberTwo;
    }

    calculater(5, 100);
    ?>

    <!-- returning the values from functions -->
    <!-- kad vracas rezltat kroz funcliju ona se postavlja u memoriju u pozadini i cuva se pod nazivom same funckije,
    naravno ona teba da se ispolji tako sto ce se na globalnom nivou koristiti ugradjena echo funkcija i vrednost koja ja smestena u
    leskicku vidljivost funkcije se pokayuje na pravljenje kljuca za tu vrednost kao sto je navedeno dole u sledecem primeru tako da 
razmotri sledecu funkciju-->
    <?php

    function addNumbers($number1, $number2)

    {
        $sum = $number1 + $number2;
        return $sum;
    }

    $result = addNumbers(1, 2);

    echo $result;

    echo "</br>";

    $result = addNumbers(99, 1);

    echo $result;

    ?>

    <!-- Global varijable and scope -->
    <!-- predefinsiana funkcija koja se naziva global omogucava da lokalna varijabla 
bude vidljiva i promenljiva na globalnom nivou i da se utice na nju u bilo kom delu koda -->
    <?php

    $x = "outside line 98,and this is global scope";

    function convert()
    {
        global $x;
        $x = "inside line 101 and this is local scope";
    }

    echo $x;

    echo "</br>";

    convert();

    echo $x;

    ?>

    <!-- constance -->
    <!-- konstanta se definisi sa predefinisanom funckijom koja se zove defin() 
    ona uvek prima dva parametra prvi parametar je uvek naziv parametra a drugi parametar je vrednost istog
razmotri funckiju dole -->
    <?php

    $number = 10;

    echo $number . "</br>"; //varijabla koja je definisana liniju iznad;

    define("Edvin", 1000);

    echo Edvin;

    ?>

    <!-- predifine math function -->
    <!-- Funkcija pov() u PHP-u se koristi za izračunavanje baze podignute na stepen eksponenta.
     To je generička funkcija koja se može koristiti sa brojem podignutim na bilo koju vrednost.
      Potrebna su dva parametra koji su baza i eksponent i vraća željeni odgovor. -->

    <?php

    echo pow(2, 7); //Returns num raised to the power of exponent.

    echo "</br>";

    echo rand(1, 10); //If called without the optional min, max arguments rand() returns a pseudo-random integer between 0 and getrandmax(). If you want a random number between 5 and 15 (inclusive), for example, use rand(5, 15).

    echo "</br>";

    echo sqrt(100); // Returns the square root of num.

    echo "</br>";

    echo ceil(4.33); //Returns the next highest integer value by rounding up num if necessary.

    echo "</br>";

    echo floor(4.5); //Returns the next lowest integer value (as float) by rounding down num if necessary.
    ?>

    <!-- string functions -->
    <?php

    $stirng = "Hello Nenad Maglovski";

    echo "</br>";

    echo strlen($stirng); //Returns the length of the given string.

    echo "</br>";

    echo strtoupper($stirng); //Returns string with all alphabetic characters converted to uppercase.

    echo "</br>";

    echo strtolower($stirng); //Returns string with all alphabetic characters converted to lowercase.

    echo "</br>";

    echo print($stirng); //Outputs expression.

    echo "</br>";

    ?>

    <!-- array functions -->
    <?php

    $list  = [343, 34, 321, 23, 54, 232, 453];

    echo max($list); //If the first and only parameter is an array, max() returns the highest value in that array. If at least two parameters are provided, max() returns the biggest of these values.

    echo "</br>";

    echo min($list); //If the first and only parameter is an array, min() returns the lowest value in that array. If at least two parameters are provided, min() returns the smallest of these values.

    echo  "</br>";

    sort($list); //Sorts array in place by values in ascending order.

    echo print_r($list); //print_r() displays information about a variable in a way that's readable by humans.

    ?>
</body>

</html>