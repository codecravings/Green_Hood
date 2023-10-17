// This will run as soon as the script is loaded, clearing the cart
// This will run as soon as the script is loaded, clearing the cart


function addToCart(buttonElement) {
    // Getting data from the related product card
    var card = buttonElement.closest('.card');
    var productName = card.querySelector("[name='Item_Name']").value;
    var productPrice = card.querySelector("[name='Price']").value;
    var productImage = card.querySelector("img").getAttribute('src');

    var product = {
        name: productName,
        price: productPrice,
        image: productImage
    };

    // Storing to localStorage
    var cart = JSON.parse(localStorage.getItem('cart') || '[]');
    cart.push(product);
    localStorage.setItem('cart', JSON.stringify(cart));

    alert(productName + " has been added to your cart!");
}



var cart = JSON.parse(localStorage.getItem('cart') || '[]');
cart.forEach(product => {
    console.log(product.name, product.price);
    // You can use this loop to dynamically create and display product elements on your cart page
});

function displayCartItems() {
    // Retrieve cart items from localStorage
    var cart = JSON.parse(localStorage.getItem('cart') || '[]');

    // Find the container in cart.html where you wish to display the items
    var cartContainer = document.getElementById('cartContainer');

    // Loop through the cart items and display them
    cart.forEach(product => {
        var productElement = document.createElement('div');
        productElement.innerHTML = `
            <img src="${product.image}" alt="${product.name}" width="100"> <!-- adjust width as needed -->
            <h2>${product.name}</h2>
            <p>Price: ${product.price}</p>
        `;
        cartContainer.appendChild(productElement);
    });
}



