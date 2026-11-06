/******************************************************************************/
// Seulement une des deux sections suivantes doit être active à la fois !
/******************************************************************************/
/*
    Gestion du formulaire *** synchrone ***
*/
document.querySelectorAll("form.controle select").forEach(
    eltSelect => eltSelect.addEventListener("change", 
        evt => evt.target.form.submit()
    )
);

/*
    Gestion du formulaire *** asynchrone ***
*/
// document.querySelectorAll("form.controle select").forEach(
//     eltSelect => eltSelect.addEventListener("change", 
//         evt => {
//             evt.preventDefault();
//             gererProduitsAsynchrone(evt.target.form);
//         }
//     )
// );
/******************************************************************************/
/******************************************************************************/
/******************************************************************************/

/** 
* Gérer le tri en mode asynchrone.
* 
*/
async function gererProduitsAsynchrone(frm) {
  // Envoyer une requête HTTP, attendre la réponse HTTP
  let reponseFiltreEtTri = await fetch("async/teeshirts.async.php?" 
                + new URLSearchParams(new FormData(frm)).toString());
  // Récupérer le contenu JSON de la réponse HTTP
  let contenu = await reponseFiltreEtTri.json();
  // Appeler une fonction qui gère la mise à jour de l'affichage
  afficherProduits(contenu);
}

/**
 * Mettre à jour le DOM avec les produits passés en paramètre.
 */
function afficherProduits(produits) {
  // Récupérer la langue courante !
  let langue = document.querySelector("html").lang;

  // Saisir le conteneur des produits
  let conteneurProduits = document.querySelector("main.page-produits article.principal");
  // Le vider...
  conteneurProduits.innerHTML = "";
  
  // Saisir le gabarit de produit
  let gabaritProduit = document.getElementById("gabarit-produit").content;
  
  let eltPrd;
  for(let prd of produits) {
    // On obtient un clone de l'élément contenu dans le gabarit de produit
    eltPrd = gabaritProduit.cloneNode(true);

    // À faire : implémentez le format international pour le prix !
    eltPrd.querySelector(".montant").innerHTML = prd.prix.toFixed(2);
    eltPrd.querySelector(".nom").innerHTML = prd.nom[langue];
    eltPrd.querySelector(".image img").alt = prd.nom[langue];
    eltPrd.querySelector(".image img").src = "images/produits/teeshirts/" +  prd.id + ".webp";

    // On insère cet élément dans le conteneur des produits
    conteneurProduits.append(eltPrd);
  }
}