<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>move</title>
</head>
<body>
    <?php
    foreach($spelers as $speler)
    {
        $boardid = $speler['board_id'];
        echo "board_id: $boardid";
    }

    foreach($boards as $board)
    {
         $categorie = $board['categorie_id'];
         echo "categorie: $categorie";
    }
    ?>
</body>
</html>