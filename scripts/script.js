$(function() {
    const closeCartButton = document.getElementById('close-cart');
    const cartToggle = document.getElementById('cart-toggle');
    const cartContainer = document.getElementById('cart-container');

    

    cartToggle.addEventListener('click', () => {
        cartContainer.classList.toggle('cart-open');
    });
    
    closeCartButton.addEventListener('click', () => {
        cartContainer.classList.remove('cart-open');
    });
})



