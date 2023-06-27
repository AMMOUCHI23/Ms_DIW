console.log("Je suis connecté! :)");
/* function qui permet d'enregestrer le panier dans localstrage
 Localstorage permet d'enregestrer que des chaines de caracteres ou des entiers... ,
  c'est pour ça on utilise la notaion en chaine de caractere avec Json*/
  let basket=document.querySelector(".ajauter-panier");
  basket.addEventListener("click", function(basket){
      localStorage.setItem("basket", JSON.stringify(basket));
  })

//Fonction qui permet de recupérer ce que on a enregestré dans localStorage

function getBasket(){
   let basket = localStorage.getItem("basket");
   if (basket == null){
    return [];
   }
   else{
    return JSON.parse(basket);
   }
}

//fonction qui permet d'ajouter des produits au panier

function addBasket(product){
    let basket = getBasket();
    let foundProduct = basket.find(p => p.id == product.id);
    if (foundProduct != undefined){
        foundProduct.quantity++;   
     }
        else{
            product.quantity = 1;
            basket.push(product);
        }
   
    saveBasket(basket);
}

// fonction pour retirer un produit du panier
function removeFromBasket(product){
    let basket=getBasket();
    basket = basket.filter(p => p.id != product.id);
    saveBasket(basket);
}
 // fonction qui permet de changer la quantité

function changeQuantity(product, quantity){
    let basket = getBasket();
    let foundProduct = basket.find(p => p.id == product.id);
    if (foundProduct != undefined){
        foundProduct.quantity+= quantity; 
        if (foundProduct.quantity<=0)  {
            removeFromBasket(foundProduct);
        }
        else{
            saveBasket(basket); 
        }
     }
     

     }


