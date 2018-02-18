<?php


include_once("fusio_directoris.inc");
include_once("constants.inc");
$directori_nou = DIRECTORI_BASE . "/" . $_POST["dirfusionat"];

if (file_exists($directori_nou)) {
    esborra_directori($directori_nou);
    fusionar();
} else {
    fusionar();
}

function fusionar()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $primer = DIRECTORI_BASE."/".$_POST["dir1"];
        $segon = DIRECTORI_BASE."/".$_POST["dir2"];
        $directori_nou = DIRECTORI_BASE."/".$_POST["dirfusionat"];

        if (file_exists($primer) && file_exists($segon)) {
            $fitxers_primer = llistar_fitxers($primer);
            $fitxers_segon = llistar_fitxers($segon);

            $concatSecondDir = $_POST["dir2"];

            if (mkdir($directori_nou)) {
                foreach ($fitxers_primer as $element) {
                    $path = $primer . "/" . $element;
                    $dest = $directori_nou . "/" . $element;

                    copy($path, $dest);
                }

                foreach ($fitxers_segon as $element) {
                    $path = $segon . "/" . $element;
                    $dest = $directori_nou . "/" . $element;

                    if (conte_fitxer($dest, $directori_nou)) {
                        $dest = $directori_nou . "/" . $element . "_" . $concatSecondDir;
                    }

                    copy($path, $dest);
                }
            }
        }
    }
}

?>
