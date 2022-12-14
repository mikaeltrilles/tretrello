const nbCategorie = document.getElementById('nbCategorie');
const containerCategorie = document.getElementById('containerCategorie');
let currentInput = [];
console.log(nbCategorie);
console.log(containerCategorie);

/**insere du html selon la variable donnée
 * @param {string} variable 
 */
function generateCategories(variable) {
    containerCategorie.innerHTML = variable;
  }

nbCategorie.addEventListener('input', (e) => {
    //on fait une boucle pour implémenter le tableau recapitulatif du nbre de catégories demandées
    
    for (i = 0; i < e.target.value ; i++) {
        currentInput.push("categorie"+i);
    }
    // on fait ensuite un map du tableau que l'on affiche avec la fonction generateCategories
    let mapCat = currentInput.map((cat) =>
    `
    <div class = "col-4 p-3">
    <label class ="form-label" for="${cat}">Nom de la categorie : </label>
    <input class = "form-control" type="text" id="${cat}" name="${cat}">
    </div>
    `
    ).join("");
    generateCategories(mapCat);
    // on vide le tableau
    currentInput= [];
})