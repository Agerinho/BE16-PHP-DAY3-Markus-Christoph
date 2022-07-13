<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DAY 3</title>
</head>
<body>
    <?php
        //Exercise 1
        for ($i = 0; $i<50; $i++) {
            echo "Markus Ager<br>";
        }
        echo "<br>";

        //Exercise 2
        $arr = array(
            50,
            10,
            57,
            24,
            65,
            8,
            62,
            21,
            34,
            17
        );

        foreach($arr as &$value) {
            echo "$value<br>";
        }
        echo "<br>";

        //Exercise 3
        function highestValue($par) {
            $value = 0;
            foreach ($par as $number) {
                if ($number >= $value) {
                    $value = $number;
                };
            }
            return $value;
        }
        
        $randomNumber = array();
        for ($i = 0; $i <= 10; $i++) {
            $randomNumber[$i] = rand();
        };
        $highestNumber = highestValue($randomNumber);
        echo $highestNumber;
        echo "<br>";
        echo "<br>";

        //Exercise 4
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "Full-Stack<br>";
            }
            elseif ($i % 3 == 0) {
                echo "Back-End<br>";
            }
            elseif ($i % 5 == 0) {
                echo "Front-End<br>";
            }
            else {
                echo $i . "<br>";
            }
        }
    ?>
</body>
</html>