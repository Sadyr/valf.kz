let carts = document.querySelectorAll('.addToCart');
let cartsDelete = document.querySelectorAll('.delete');
let objList = document.querySelectorAll('.card');
let products = [];

objList.forEach((el,idx) => {

    let title = el.childNodes[1].innerText;
    let productz = {title:title,
        tag:title,incart:0}
        products.push(productz)
});



/*
let products = [
{
    title:'Яблоко',
    tag:'Яблоко',
    inCart:0
},
{
    title:'Банан',
    tag:'Банан',
    inCart:0
},
{
    title:'Апельсин',
    tag:'Апельсин',
    inCart:0
}
]
console.log( products)
*/

for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);

    })
}








function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers) {
        document.querySelector('.cart-num').textContent = '';

    }


}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers)
    if ( productNumbers) {
        localStorage.setItem('cartNumbers',productNumbers + 1);
       // document.querySelector('.cart-num').textContent = productNumbers + 1;

    } else {
        localStorage.setItem('cartNumbers',1);
       // document.querySelector('.cart-num').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {

        if(cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]:product

            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;

        cartItems = {
           [product.tag]:product
   
       }

    }
    
    localStorage.setItem('productsInCart', JSON.stringify(cartItems))

}


function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector('.products-container');
	let test = document.querySelector('test');
	let shopList = [];

    if(cartItems &&  productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
           <div  name="shopitem" class="products">
 <ul class="shop-list"> 
<li > <button class="btns" onclick="deleteElement('${item.title}')" ><i class="fa-solid fa-trash"></i></button>${item.title}  </li>
 </ul> </div>\ `
			shopList.push(item.title + '\n')
			
     })
	

} 
	document.getElementById('idshop').value=shopList;

	

	

}

function update() {
    let items = localStorage.length
    let productContainer = document.querySelector('.products-container');
    if (items == 0) {
        productContainer.innerHTML ='<div class="product"> <h6>Корзина пуста! </h6> <h6>Пожалуйста, выберите желаемые товары!</h6></div>';       
    } else {
        console.log('')
    }
}


function deleteElement(title){
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  delete cartItems[title]
  localStorage.setItem('productsInCart', JSON.stringify(cartItems))
  displayCart();


}

function clearCart() {
    localStorage.clear("productsInCart");
    update();

}


onLoadCartNumbers();
update() ;
displayCart();
