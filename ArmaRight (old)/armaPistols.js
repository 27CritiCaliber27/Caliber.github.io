function buttonMode(productName, productPrice) {
    alert("Item added to cart!")
    // Create a JavaScript object to represent the product
    const product = {
        name: productName,
        price: productPrice
    };

    // Retrieve the current cart items from local storage
    const cartItemsJSON = localStorage.getItem("cartItems");
    const cartItems = cartItemsJSON ? JSON.parse(cartItemsJSON) : [];

    // Add the product to the cart
    cartItems.push(product);

    // Convert the updated cart items to JSON format
    const updatedCartItemsJSON = JSON.stringify(cartItems);

    // Store the updated cart items in local storage
    localStorage.setItem("cartItems", updatedCartItemsJSON);
}