let cards = document.querySelectorAll('button');
let products = [
    {
        name: "CHICKEN-HANDI-BIRYANI",
        tag: "Biryani",
        price: 140,
        InCart: 0,
    },
    {
        name: "CHEESE-CHICKEN-PIZZA",
        tag: "Pizza",
        price: 250,
        InCart: 0,
    },
    {
        name: "MUTTON-KASA",
        tag: "Mutton",
        price: 200,
        InCart: 0,
    },
    {
        name: "STUFFED-VEG-BURGER",
        tag: "Burger",
        price: 250,
        InCart: 0,
    }
];
for (let i = 0; i < (cards.length) / 4; i++) {
    cards[i] = addEventListener('click', () => {
        cardNumbers(products[i]);
    })
}
function onload() {
    let productNumbers = localStorage.getItem('cardNumbers');
    if (productNumbers) {
        document.querySelector('.Cart span').textContent = productNumbers;
    }
}
function cardNumbers(products) {
    console.log(products);
    let productNumbers = localStorage.getItem('cardNumbers');
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cardNumbers',productNumbers + 1);
        document.querySelector('.Cart span').textContent = productNumbers + 1;
    }
    else{
        localStorage.setItem('cardNumbers',1);
        document.querySelector('.Cart span').textContent = 1;
    }
}
onload();