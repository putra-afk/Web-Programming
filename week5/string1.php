<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    agni illo doloribus debitis saepe, aliquam quod aperiam vitae. 
    Beatae, dolores quasi expedita, dicta, dolorem cupiditate quidem 
    maiores corporis autem omnis facilis sapiente laudantium suscipit! 
    Quasi eum atque molestias, facere est modi?";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) .  "</p>";
echo "<p>" . strtolower($loremIpsum) .  "</p>";
