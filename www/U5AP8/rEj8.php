<?php

$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas tempor lacus, eu ornare erat aliquet at. Nulla arcu lectus, bibendum non arcu vel, fermentum mollis felis. Nam eget imperdiet justo, at tristique leo. Donec luctus lacinia dolor et suscipit. Aliquam felis nunc, fringilla ac metus in, tincidunt vulputate erat. Suspendisse euismod hendrerit nisl. Morbi consequat est id erat porttitor, ut posuere massa condimentum. Morbi vitae nisi id magna tincidunt condimentum nec vel metus. Sed ac dignissim neque. Nam nunc tellus, malesuada sit amet nulla sed, scelerisque ullamcorper libero. Sed venenatis eu urna ut auctor. Fusce sollicitudin id nulla luctus varius.\nUt tincidunt justo sem, et vehicula diam feugiat eu.Quisque quis velit ex.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Ut erat mauris, condimentum a nulla et, iaculis elementum nisl.Mauris justo dui, sollicitudin sed lacus in, rhoncus volutpat mauris.Duis commodo, erat ac feugiat egestas, neque elit auctor nunc, quis varius eros dolor eu neque.Aliquam erat volutpat.Nunc facilisis, libero eu feugiat gravida, lorem neque gravida diam, nec gravida lacus nulla et ex.Integer at consequat diam.Suspendisse potenti.Nam sed nisi ultrices, consequat ante vehicula, posuere felis.Morbi vitae diam tempus, egestas neque vitae, maximus risus.Etiam id tempus libero.Etiam urna dui, vestibulum sit amet eleifend id, lacinia vitae mi.Aenean in nisi venenatis enim malesuada efficitur.\nNam non eleifend erat, vel tempor purus.Quisque consectetur, tellus id tincidunt consectetur, augue quam vehicula tortor, et laoreet quam magna sit amet risus.Proin sollicitudin sagittis nibh, at aliquam lorem rutrum sed.Morbi tellus magna, suscipit eget sapien ut, varius tempor velit.Etiam eu iaculis velit.Ut a rhoncus nisl.Quisque ut condimentum est.Phasellus auctor mauris vitae nisl vestibulum, in lacinia erat tincidunt.Vestibulum sit amet mi vitae purus eleifend sagittis in ac mi.Sed in mi facilisis, interdum eros non, tristique neque.Donec finibus pellentesque velit.Donec sed lorem eget nisl aliquam suscipit.Nunc fermentum, sapien a bibendum vehicula, mi nisl scelerisque lectus, ac euismod mi augue nec arcu.Praesent laoreet diam sit amet sodales efficitur.\nPhasellus nec felis sollicitudin, pulvinar risus non, euismod neque.Aenean ultricies rhoncus neque, sed tempor quam consequat vel.Donec finibus, eros sed tincidunt varius, eros magna ornare lectus, quis consequat ex nulla et lacus.Suspendisse vitae enim eget felis faucibus vestibulum.Maecenas a ligula massa.Integer nec scelerisque odio.Etiam vel aliquam neque, sit amet semper lectus.\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis iaculis leo vel pharetra ornare.Vestibulum mi nunc, sollicitudin iaculis vulputate in, egestas a orci.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Cras sit amet gravida risus.Vivamus dignissim dapibus metus, in convallis eros.Phasellus id purus tellus.Vestibulum rutrum libero sapien, non gravida odio varius sit amet.Curabitur tristique velit eu laoreet aliquam.Phasellus vel justo felis.";

//punto 1
$textoClean = str_replace(".", " ", $texto);
$textoClean = str_replace(",", " ", $textoClean);
$textoClean = str_replace(";", " ", $textoClean);
$textoClean = str_replace("\n", " ", $textoClean);
$textoClean = str_replace("  ", " ", $textoClean);
$textoClean = trim($textoClean);
/* echo $textoClean;
exit; */
$textoCaracteres = str_replace(" ", "", $textoClean);

$caracteres = strlen($textoCaracteres);
echo "Caractéres alfanuméricos (sin signos de puntuación o espacios): $caracteres\n";

//punto 2
$textoPalabras = explode(" ", $textoClean);
$palabras = count($textoPalabras);
echo "Número de palabras: $palabras\n";
//echo "Número de palabras: ".str_word_count($textoClean)."\n";


//punto3
$textoFrases = explode(".", $texto);
$frases = count($textoFrases);
echo "Número de frases: $frases\n";

//punto 4
$textoParrafos = explode("\n", $texto);
$parrafos = count($textoParrafos);
echo "Número de párrafos: $parrafos\n";

//punto 5
echo "Promedio caracteres por palabra: " . number_format(($caracteres / $palabras), 2) . "\n";

//punto 6
echo "Promedio palabras por frase: " . number_format(($palabras / $frases), 2) . "\n";

//punto 7
echo "Promedio frases por párrafo: " . number_format(($frases / $parrafos), 2) . "\n";

//punto 8
$modaPorCaracter = [];
for ($i = 0; $i < strlen($textoCaracteres); $i++) {
    $caracter = strtoupper(substr($textoCaracteres, $i, 1));
    if (isset($modaPorCaracter[$caracter])) {
        $modaPorCaracter[$caracter]++;
    } else {
        $modaPorCaracter[$caracter] = 1;
    }
}

$maxModaCaracter = 0;
$modaCaracter = [];
foreach ($modaPorCaracter as $caracter => $ocurrencias) {
    if ($ocurrencias > $maxModaCaracter) {
        $maxModaCaracter = $ocurrencias;
    }
}

foreach ($modaPorCaracter as $caracter => $ocurrencias) {
    if ($ocurrencias == $maxModaCaracter) {
        array_push($modaCaracter, $caracter);
    }
}

echo "El/los carácter/es moda: " . implode(",", $modaCaracter) . "\n";

//punto 9
$modaPorPalabra = [];
for ($i = 0; $i < count($textoPalabras); $i++) {
    $palabra = strtoupper($textoPalabras[$i]);
    if (isset($modaPorPalabra[$palabra])) {
        $modaPorPalabra[$palabra]++;
    } else {
        $modaPorPalabra[$palabra] = 1;
    }
}

$maxModaPorPalabra = 0;
$modaPalabra = [];
foreach ($modaPorPalabra as $palabra => $ocurrencias) {
    if ($ocurrencias > $maxModaPorPalabra) {
        $maxModaPorPalabra = $ocurrencias;
    }
}
foreach ($modaPorPalabra as $palabra => $ocurrencias) {
    if ($ocurrencias == $maxModaPorPalabra) {
        array_push($modaPalabra, $palabra);
    }
}

echo "La/s palabra/s moda: " . implode(", ", $modaPalabra) . "\n";
