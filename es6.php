<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 10;
        $str = "<ul>";
        for ($i = 1; $i<$num; $i++) {
            if ($num % $i == 0) {
                $str = $str . "<li>$i</li>";
            }
        }
        $str = $str . "</ul>";
        echo $str
    ?> 
</body>
</html>