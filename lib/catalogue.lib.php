<?php
// Fonctions pour gérer le catalogue des produits.

/**
 * Obtenir le critère de tri choisi par l'utilisateur.
 * @return string Chaîne représentant le critère de tri.
 */
function obtenirCritereTri()
{
    if (isset($_GET["tri"]) && $_GET["tri"] != "aleatoire") {
        return $_GET["tri"];
    } else {
        return "aleatoire";
    }
}

/**
 * Trier les produits selon le critère choisi.
 * 
 * @param array $produits Tableau des produits à trier.
 * @param string $tri Critère de tri.
 * 
 * @return array Tableau des produits triés.
 */
function trierProduits($produits, $tri)
{
    if ($tri == "aleatoire") {
        shuffle($produits);
    } else {
        usort($produits, $tri);
    }
    return $produits;
}

/************ Fonctions de comparaison ***************/
/**
 * Comparer deux produits selon le nombre de ventes (du plus grand au plus petit).
 * @param object $prd1 Premier produit à comparer.
 * @param object $prd2 Deuxième produit à comparer.
 * @return int Résultat de la comparaison.
 */
function ventesDesc($prd1, $prd2)
{
    return $prd2->ventes - $prd1->ventes;
}

/**
 * Comparer deux produits selon le prix (du plus petit au plus grand).
 * @param object $prd1 Premier produit à comparer.
 * @param object $prd2 Deuxième produit à comparer.
 * @return int Résultat de la comparaison.
 */
function prixAsc($prd1, $prd2)
{
    return $prd1->prix - $prd2->prix;
}

/**
 * Comparer deux produits selon le prix (du plus grand au plus petit).
 * @param object $prd1 Premier produit à comparer.
 * @param object $prd2 Deuxième produit à comparer.
 * @return int Résultat de la comparaison.
 */
function prixDesc($prd1, $prd2)
{
    return $prd2->prix - $prd1->prix;
}


/******************************************************************************/
/************ Les fonctions suivantes sont à implémenter plus tard. ***********/
/******************************************************************************/

/**
 * Comparer deux produits selon le nom (ordre alphabétique croissant).
 * @param object $prd1 Premier produit à comparer.
 * @param object $prd2 Deuxième produit à comparer.
 * @return int Résultat de la comparaison.
 */
function nomAsc($prd1, $prd2)
{
    return 0;
}

/**
 * Comparer deux produits selon le nom (ordre alphabétique décroissant).
 * @param object $prd1 Premier produit à comparer.
 * @param object $prd2 Deuxième produit à comparer.
 * @return int Résultat de la comparaison.
 */
function nomDesc($prd1, $prd2)
{
    return 0;
}

/**
 * Comparer deux produits selon la date d'ajout au catalogue (du plus récent au plus ancien).
 * @param object $prd1 Premier produit à comparer.
 * @param object $prd2 Deuxième produit à comparer.
 * @return int Résultat de la comparaison.
 */
function dacDesc($prd1, $prd2)
{
    return 0;
}