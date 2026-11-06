<?php
// ATTENTION : TOUTE fonction doit avoir un commentaire de type PHPDoc.

/**
 * Obtient la liste des codes de langues disponibles sur le site.
 * 
 * @return array Tableau des codes de langues en 2 lettres. 
 */
function obtenirLanguesDisponibles() {
    $langues = [];
    $contenuI18n = scandir("i18n");
    foreach ($contenuI18n as $nomFichier) {
        if ($nomFichier != "." && $nomFichier != "..") {
            $langues[] = substr($nomFichier, 0, 2);
        }
    }
    return $langues;
}

/**
 * Détermine la langue d'affichage du site.
 * 
 * @param array $languesPermises Tableau des langues disponibles.
 * 
 * @return string Code de la langue à utiliser.
 */
function determinerLangue($languesPermises) {
    // Langue par défaut
    $langue = "fr";

    // Valeur de langue sauvgardée en cookie
    if(isset($_COOKIE["choixLangue"]) && in_array($_COOKIE["choixLangue"], $languesPermises)) {
        $langue = $_COOKIE["choixLangue"];
    }

    // Valeur de langue arrivée en paramètre URL
    if(isset($_GET["lan"]) && in_array($_GET["lan"], $languesPermises)) {
        $langue = $_GET["lan"];
        // RETENIR CE CHOIX DANS UN COOKIE!
        setcookie("choixLangue", $langue, time() + 365*24*3600);
    }

    return $langue;
}

/**
 * Obtient les textes statiques de la page à partir du fichier JSON 
 * adéquat.
 * 
 * @param string $codeLangue Code de la langue.
 * @param string $nomPage Nom de la page requise.
 * 
 * @return array Tableau contenant des raccourcis pour les textes de 
 *               l'entête, du pied de page et du contenu spécifique de 
 *               la page. 
 */
function obtenirTextesStatiques($codeLangue, $nomPage) {
    // Lire le contenu du fichier des textes statiques.
    $textesJson = file_get_contents("i18n/$codeLangue.json");

    // Convertir la chaîne JSON obtenue en un tableau PHP.
    $textes = json_decode($textesJson);

    // Définir et retourner des raccourcis utiles.
    return [
            $textes->entete, 
            $textes->pied2page, 
            $textes->$nomPage,
            $textes->catalogue
        ];
}