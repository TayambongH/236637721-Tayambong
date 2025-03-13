<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPIntro</title>
</head>
<body>
    <?php
    
    $a = 15;
    $b = 7;
    echo "Sum: " . ($a + $b) . "<br>"; 
    echo "Difference: " . ($a - $b) . "<br>"; 
    echo "Product: " . ($a * $b) . "<br>"; 
    echo "Quotient: " . ($a / $b) . "<br>"; 
    $number = 7;

    if ($number % 2 == 0) {
        echo "$number is even.<br>";
    } else {
        echo "$number is odd.<br>";
    }

    
    if ($number > 0) {
        echo "$number is positive.<br>";
    } elseif ($number < 0) {
        echo "$number is negative.<br>";
    } else {
        echo "$number is zero.<br>";
    }
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        } else {
            echo $i . "<br>";
        }
    }

    $fib1 = 0;
    $fib2 = 1;
    echo "Even Fibonacci numbers: <br>";
    
    for ($i = 0; $i < 10; $i++) {
        $nextFib = $fib1 + $fib2;
        if ($nextFib % 2 == 0) {
            echo $nextFib . "<br>";
        }
        $fib1 = $fib2;
        $fib2 = $nextFib;
    }


    function greet($name) {
        return "Hello, $name!<br>";
    }
    
    
    function square($number) {
        return $number * $number;
    }
    
    $name = '';
    $number = '';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST['name'];
        $number = $_POST['number'];
    
        
        echo greet($name);
    
        
        echo "The square of $number is: " . square($number) . "<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $submittedText = $_POST['inputText'];
        echo "You submitted: " . $submittedText . "<br>";
    }

    ?>
    <h2>Enter Your Name and Number</h2>
    
    <form action="" method="POST">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="number">Enter a number to square:</label>
        <input type="number" id="number" name="number" required><br><br>


        <label for="inputText">Enter Text:</label>
        <input type="text" id="inputText" name="inputText">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

