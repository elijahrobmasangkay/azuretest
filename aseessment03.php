<!DOCTYPE html>
<html>

<head>
    <title>Assessment 03: Web Program Creation</title>
    <style>
        pre {
            font-family: monospace;
            line-height: 1.2;
        }
    </style>
</head>

<body>

    <h2>Isosceles Triangles</h2>

    <?php 
    
    $size = 8; 

    echo "<p><strong>Size of isosceles triangle should be from 2 to 10.</strong></p>";
    echo "<p>Side of isosceles triangle is $size</p>";

    if ($size < 2) {
        echo "<p>Square with side $size is below the minimum dimension.</p>";
    } elseif ($size > 10) {
        echo "<p>Square with side $size exceeds the side dimension.</p>";
    } else {
        echo "<pre>";

        for ($i = 1; $i <= $size; $i++) {
            echo str_repeat(string: "* ", times: $i) . "\n";
        }
        echo "\n";

        for ($i = $size; $i >= 1; $i--) {
            echo str_repeat(string: "* ", times: $i) . "\n";
        }
        echo "\n";

        for ($i = $size; $i >= 1; $i--) {
            echo str_repeat(string: "  ", times: $size - $i) . str_repeat(string: "* ", times: $i) . "\n";
        }
        echo "\n";

        for ($i = 1; $i <= $size; $i++) {
           echo str_repeat(string: "  ", times: $size - $i) . str_repeat(string: "* ", times: $i) . "\n";
        }
       echo "</pre>";

    }
    ?>

</body>

</html>