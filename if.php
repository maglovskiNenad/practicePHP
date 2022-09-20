<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if</title>
</head>

<body>


    <!-- if statment -->
    <!-- <?php

            if (3 > 10) {
                echo "three is less then ten";
            } elseif (4 > 5) {
                echo "of course four is less then five";
            } else {
                echo "it is not";
            }


            ?> -->

    <!-- comparison and logical operators -->
    <h2>Comaparison operators</h2>
    <pre>
        equal ==
        identical ===
        compare > < >= <= <>
        not equal !=
        not identical !==
    </pre>

    <h2>Logical operators</h2>
    <pre>
        And &&
        Or ||
        Not !
    </pre>
    <?php


    echo "</br>";

    ?>

    <!-- switch statment -->
    <!-- <?php
            $number = 134;

            switch ($number) {
                case 34:
                    echo "is it 34";
                    break;
                case 35:
                    echo "is it 35";
                    break;
                case 36:
                    echo "is it 36";
                    break;
                case 37:
                    echo "is it 37";
                    break;
                case 38:
                    echo "is it 38";
                    break;

                default:
                    echo   "We could not find anything.";
            }
            echo "</br>"
            ?> -->

    <!-- while statment -->
    <!-- <?php
            $counter = 0;

            while ($counter < 10) {
                echo "</br>";
                echo "Hello Student";
                $counter = $counter + 1;
                echo "</br>";
            }

            ?> -->

    <!-- for loop statment -->
    <!-- <?php
            for ($counter = 0; $counter < 10; $counter++) {
                echo "</br>";
                echo $counter;
            }

            ?> -->



    <!-- for each loop works only in arrays -->
    <!-- <?php

            $numbers = array(35, 397, 554, 123, 976, 111);



            foreach ($numbers as $number) {
                echo "</br>";
                echo $number;
            }


            ?> -->

    <!-- practice -->
    <?php
    for ($counter = 0; $counter < 10; $counter++) {
        echo "</br>";
        echo $counter + 1;
    }


    ?>
</body>

</html>