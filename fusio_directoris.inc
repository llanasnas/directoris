<?php
function llistar_directoris($dir)
{
    $array = scandir($dir);

    foreach ($array as $directori) {
        if (is_dir($dir . "/" . $directori)) {
            echo $directori . '<br>';
        }
    }
}

function llistar_fitxers($dir)
{
    $array = scandir($dir);

    $arrayReturned = array();

    foreach ($array as $fitxer) {
        if (is_file($dir . "/" . $fitxer)) {
            echo $fitxer . '<br>';
            array_push($arrayReturned, $fitxer);
        }
    }

    return $arrayReturned;
}

function conte_fitxer($fitxer, $dir)
{
    $arrayForSearching = scandir($dir);

    foreach ($arrayForSearching as $any) {
        if (file_exists($fitxer)) {
            return true;
        }
    }
    return false;
}

function esborra_directori($dir)
{
    $arrayForRemoving = scandir($dir);

    foreach ($arrayForRemoving as $itemToRemove) {
        if (is_file($dir . "/" . $itemToRemove)) {
            unlink($dir . "/" . $itemToRemove);
        }
    }

    if (rmdir($dir)) {
        echo 'Directori esborrat correctament' . '<br>';
    }
}

?>
