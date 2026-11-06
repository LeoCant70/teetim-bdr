# TP/Volet 2 : Adapter un site Web dynamique en y intégrant une interface utilisateur riche par programmation asynchrone en `JavaScript`.

## Travail d'équipe permis à raison de deux personnes pas équipe maximum.
* Date limite de remise : consultez Omnivox.
* Si vous travaillez en équipe, **les deux personnes** doivent accepter les fichiers du TP sur *GitHub Classroom*.
* Vous travaillez ensuite chacun.e sur votre version de code localement, et vous faites vos fusions et synchronisations du code correctement (en général, vous faites un `pull` avant de faire votre `push` pour vous assurer d'incorporer les changements de votre collègue dans votre code avant de le synchroniser au serveur).
* Divisez le travail dans l'équipe de façon à simplifier/faciliter ces fusions (expérimentez, c'est le moment idéal ; mais mon conseil c'est d'éviter de travailler sur le même fichier en même temps).

## Objectif/exigences généraux
* Utilisation du format `JSON` pour le stockage de données du site Web
* Utilisation du format `JSON` pour l'internationnalisation du site Web
* Produire le contenu `HTML` dynamiquement avec `PHP` 
* Gérer les requêtes `HTTP` (méthode `GET`) en `PHP` 
* Formater l'affichage `HTML` avec `CSS` 
* Utiliser la programmation `JavaScript` *asynchrone* pour améliorer l'interface utilisateur du site Web

## Étapes à suivre avant de commencer le travail
1. Clonez le dépôt sur votre machine locale à l'endroit approprié

2. Testez le site sur votre serveur Web avant de commencer le travail

## Fonctionnalités à implémenter
1. [i18n] Internationnaliser (externaliser et traduire) les textes statiques restants de la page `teeshirts.php`.

2. [i18n & Catalogue] Il peut arriver qu'à un certain moment de la vie du site Web, le catalogue des produits (dynamiques/BD) ne soit pas encore localisé à toutes les langues disponibles dans le site Web (statique). Pour éviter les erreurs d'affichage, produisez le code `PHP` adéquat pour faire en sorte que si la langue courante (active) d'affichage du site Web ne correspond pas à une langue dans laquelle le catalogue de produits est disponible, le *français* est alors utilisé à la place de la langue active pour l'affichage des noms des produits. 
    > Pour faire le test de cette fonctionnalité, ajoutez une nouvelle langue dans le dossier `i18n` mais n'ajoutez pas les traductions dans le fichier `teeshirts.json` du catalogue (dossier `data`). Le site doit s'afficher correctement dans cette nouvelle langue, mais les noms des produits doivent être affichés en français.

3. [Catalogue] Complétez le fichier `teeshirts.json` pour y intégrer les 12 produits manquants des 20 produits représentés dans le fichier `Google Sheets` suivant : https://docs.google.com/spreadsheets/d/18r9TTOW1rXar0my3GQnLoiMGH2vk2LXwgncbu4V3_-w/edit?usp=sharing. 

4. [Catalogue] À l'aide de votre outil IA préféré, ajoutez **100 autres** *teeshirts* au fichier `teeshirts.json` (donc au total votre catalogue doit contenir 120 teeshirts différents). Faites varier les thèmes aléatoirement en utilisant les thèmes existants, mais aussi incluant *deux* nouveaux thèmes de votre choix. Les noms des produits, leurs prix, leurs nombres des ventes, etc. doivent être déterminés aléatoirement aussi. Les identifiants doivent suivrent la forme existante (`tsXXXX`). Enfin, vous devez *générer* ou *obtenir* **seulement 10** nouvelles images de produits requises, au format `webp`, de dimension 1024px X 1024px, et de taille maximale 100Ko. Les images doivent être dans le même style que celle déjà fournies, et correspondre aux thèmes choisis. Nommez les 10 nouveaux fichiers d'images de façon appropriée en utilisant les valeurs de 10 identifiants de produit choisis au hasard parmi les nouveaux produits générés par IA, et sauvergardez-les dans le dossier approprié avec les autres images de teeshirts.

5. [Catalogue] Comme beaucoup de ces nouveaux produits n'auront pas d'images correspondantes, vous devez corriger le code `PHP` d'affichage de la page `teeshirts.php` pour faire en sorte qu'une image par défaut soit affichée pour les teeshirts qui n'ont pas de fichier image correspondant à leur identifiant. Créez, générez ou obtenez cette image au même format `webp` et nommez-la `ts-0000.webp`.

6. [Catalogue] Intégrez l'affichage du nombre de ventes dans la page Web `teeshirts.php` comme dans les captures d'écrans disponibles ci-dessous. Produisez le code PHP à l'endroit approprié, et modifiez la feuille de style `CSS` adéquatement. Attention, remarquez l'affichage lorsqu'aucun exemplaire d'un produit n'a été encore jamais acheté (ventes == 0) !

7. [Catalogue] Intégrez l'affichage des teeshirts filtrés par catégorie (démo en classe) : lorsque l'utilisateur modifie la catégorie, la page Web est réaffichée avec les teeshirts correspondants à la catégorie sélectionnée uniquement. Attention : il est très important aussi de produire le code `PHP` adéquat pour que la catégorie affichée soit sélectionnée dans la liste déroulante (par défaut, les navigateurs Web sélectionnent toujours la première option d'une liste déroulante lorsqu'une page Web est chargée -- et ce n'est pas ce que l'on veut !)

8. [Catalogue & *code asynchrone*] Intégrez la même fonctionnalité qu'au point 7 ci-dessus, mais cette fois-ci avec la technique `Ajax` en utilisant `PHP`, `JavaScript`, et la *programmation asynchrone*. 
    > Remarquez que le point 8 est inclut uniquement pour vous faire pratiquer la technique *Ajax* ; normalement je ne conseillerai pas d'utiliser cette technique pour une telle fonctionnalité (devinez pourquoi, c'est important et vous devriez le savoir !)

9. [Catalogue] Affichez dynamiquement à côté de chaque critère de filtre disponible (*thème*), le nombre de produits correspondant à ce thème, comme illustré dans les captures d'écrans.

10. [Panier d'achats] Créez la page du *Panier d'achats* en suivant le gabarit illustré dans les captures d'écrans. Portez attention au CSS, *mobile first*, et ajustez la requête média pour les plus grands *viewports* adéquatement. Les étiquettes statiques du panier d'achats doivent être externalisées (dans les fichiers de textes du dossier `i18n`) mais les produits contenu dans le panier sont représentés statiquement sans être générés dynamiquement pour ce travail, donc vous pouvez laisser leurs textes en français.

11. [Autres pages du site Web] Créez **TOUTES** les pages manquantes du site Web, en utilisant la page `casquettes.php` comme modèle. Remarquez que les noms de ces fichiers doivent être les mêmes que ceux utilisés dans les liens (URL) dans le site.

12. [i18n] Externalisez les textes de la page du *panier d'achats* et de toutes les autres pages que vous venez de créer dans les fichiers de textes `fr` et `en`. 

13. [i18n & L12n] Produisez une traduction complète des textes statiques du site (dossier `i18n`) et des textes du catalogue des teeshirts (fichier `teeshirts.json`) dans une troisième langue de votre choix (autre que le *français* et *l'anglais* bien évidement). 

14. [Commentaires] Pour **toutes** les fonctions dans **tous** les fichiers de code des dossiers `lib` et `js` ajoutez les commentaires `PHPDoc` ou `JSDoc` adéquats manquants (inspirez-vous des commentaires existants).

15. [Remise] Testez votre solution, puis faites la remise sur `GitHub` avant l'échéance de la date de remise. Votre dernier `commit` de remise **finale** doit avoir le message suivant : "TP/Volet 2 complété et testé."

### Gardez une copie personnelle de votre travail : les dépôts de remises sur `582-3W3` seront supprimés une fois les notes publiées.

---

## Démo

* Seulement en classe, au retour de la pause des *jours de soutient à la réussite*.

## Captures d'écran

* Filtre des teeshirts, quantités disponibles pour chaque critère, troisième langue
<img src="/_captures/1.png" alt="Filtre des teeshirts" title="Filtre des teeshirts, quantités disponibles pour chaque critère, troisième langue" />

* Panier d'achats - "mobile"
<img src="/_captures/2.png" alt="Panier d'achats - mobile" title="Panier d'achats - mobile" />

* Panier d'achats - "desktop"
<img src="/_captures/3.png" alt="Panier d'achats - desktop" title="Panier d'achats - desktop" />

* Affichage dynamique du nombre de ventes
<img src="/_captures/4.png" alt="Affichange des ventes" title="Affichange des ventes" />
