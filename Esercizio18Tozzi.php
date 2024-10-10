<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<select name="filmpreferito" id="">

    <?php

    $film = ["Interstellar", "Star Wars", "Il signore degli anelli", "Il miglio verde", "Titanic"];


    for($i = 0; $i <= count($film); $i++){

        $valore = 'f' . ($i + 1);

         echo "<option value='$valore'>$film[$i]</option>";

    }

    ?>

</select>
    
</body>
</html>