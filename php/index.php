<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>


<?php
$messyArray = [
    "Marguerite" => "Orange",
    "Kiwi",
    7 => "Pomme",
    [
        "Prune",
        "Cerise" => "Cerise"
    ]
];

//À partir de messyArray afficher "Kiwi"
echo $messyArray[0]."<br>";

//À partir de messyArray afficher "Cerise"
echo $messyArray[8] ["Cerise"]."<br>";

//À partir de messyArray supprimer "Prune"
echo $messyArray[8] [0]."<br>"."<br>";


$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];
//Créer un script qui ordonne ce tableau du mot le plus court au mot le plus long.
//Bonus: Si plusieurs mots ont la même longueur trier les par ordre alphabétique

function tri_taille_chaine($chaine1, $chaine2)
{
    $taille1 = strlen($chaine1);
    $taille2 = strlen($chaine2);
    if ($taille1 == $taille2)
    {
        return strcmp($chaine1, $chaine2); // Ordre alphabétique si les chaines sont de meme taille
    }
    return ($taille1 < $taille2) ? -1 : 1;
}

usort($random_words, 'tri_taille_chaine');   
print_r($random_words);

?>
</html>