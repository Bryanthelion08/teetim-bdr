/** Code pour le catalogue (les pages de produits) ****************/

// Gestion du formulaire de tri et de filtre
// document.querySelectorAll("form.controle select").forEach(
//   eltSelect => eltSelect.addEventListener("change",
//     evt => evt.target.form.submit()
//   )  
// );

//Méthode 2 : ASYNCHRONE
document.querySelectorAll("form.controle select").forEach(
  eltSelect => eltSelect.addEventListener("change",
    evt => {
        evt.preventDefault();
        gererProduitsAsynchrone(evt.target);
    }
  )  
);
function gererProduitsAsynchrone(frm) {
  let paramUrl = new URLSearchParams(new FormData(frm)).toString();
  let reponse = fetch("async/teeshirts.async.php"+paramUrl);
}