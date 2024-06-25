let checkoutBtn = document.getElementById('checkout');
let cartBtn = document.getElementById('keranjang');

checkoutBtn.addEventListener('click', () => {
    checkoutBtn.setAttribute('value', 'checkout');
});

cartBtn.addEventListener('click', () => {
    cartBtn.setAttribute('value', 'keranjang');
});