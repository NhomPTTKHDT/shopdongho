const items = [{
        name: 'macbook air 13',
        price: 2000,
        quantity: 1,
        image: 'images/shopping_cart.jpg',
        color: '#999999',
        colorName: 'Silver',
    },
    {
        name: 'iPhone 11 pro max',
        price: 2500,
        quantity: 1,
        image: 'images/iphone-11-pro-max-green-400x400.jpg',
        color: 'blue',
        colorName: 'Blue',
    },
    {
        name: 'Samsung Note 10',
        price: 800,
        quantity: 1,
        image: 'images/samsung-galaxy-note-10-plus-silver-new-org.jpg',
        color: 'red',
        colorName: 'Red',
    },
]
function updateQuantity(index,quantity){
    if(quantity < 1)
        return;
    items[index].quantity=quantity;
    render();
}

function remove(index) {
    items.splice(index, 1);
    render();
}

let flag = false;
var html = '';

function render() {
    var cartlast = '';
    let subtotal = 0;
    if (items.length != 0) {
        if (flag == false) {
            html = document.getElementById("full-cart").innerHTML;
            flag = true;
        } else {
            document.getElementById("full-cart").innerHTML = cartlast;
        }
        for (let i = 0; i < items.length; i++) {
            subtotal += items[i].quantity * items[i].price;
        }
        for (let i = 0; i < items.length; i++) {
            let cart = html;
            cart = cart.replace("nameproduct", items[i].name);
            cart = cart.replace("colorproduct", items[i].color);
            cart = cart.replace("namecolorpr", items[i].colorName);
            cart = cart.replace("value=\"1\"", "value=\"" + items[i].quantity + "\"");
            cart = cart.replace("priceproduct", "$" + items[i].price);
            cart = cart.replace("imageproduct", items[i].image);
            cart = cart.replace("totalprice", "$" + (items[i].quantity * items[i].price));
            cartlast += cart;
        }
    }
    document.getElementById("sub-total").innerHTML = "$" + subtotal;
    document.getElementById("full-cart").innerHTML = cartlast;
    const deleteBtns = [...document.getElementsByClassName("deleteproduct")];
    const decBtns = [...document.getElementsByClassName("decBtns")];
    const incBtns = [...document.getElementsByClassName("incBtns")];
    for (let i = 0; i < deleteBtns.length; i++) {
        decBtns[i].addEventListener('click', () => {
            updateQuantity(i,items[i].quantity-1)
        });
        incBtns[i].addEventListener('click', () => {
            updateQuantity(i,items[i].quantity+1)
        });
        deleteBtns[i].addEventListener('click', () => {
            remove(i);
        });
    }
}
render();