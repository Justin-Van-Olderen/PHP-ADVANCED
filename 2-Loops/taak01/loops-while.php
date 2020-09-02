<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $leeftijd = 0;

    while($leeftijd<18){
        echo "Ik ben:$leeftijd jaar oud dus ik mag nog niet stemmen<br/>";
        $leeftijd++;
    }
    if($leeftijd=18){
        echo "Ik ben:$leeftijd jaar oud dus mag ik stemmen<br/>";
    }


?>

</body>
</html>