function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

}

function displayReceipt() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productReceipt1 = document.querySelector(".receipt");
    let productReceipt2 = document.querySelector(".provisional-text1");
    let productReceipt3 = document.querySelector(".totalize");
    let cartCost = localStorage.getItem('totalCost');

    console.log(cartItems);
    if (cartItems && productReceipt1) {
        productReceipt1.innerHTML = '';
        Object.values(cartItems).map(item => {
           productReceipt1.innerHTML += `
                <div class="receipt-cart">
                    <div class="ct-re">
                        <div class="text-content">
                            <div class="receipt-wrapper">
                                <img class="img-receipt" src="./images/${item.tag}.jpg" alt="">
                            </div>
                            <span class="receipt-quantity">${item.inCart}</span>                                                
                        </div>

                        <div class="receipt-text">
                            <h3>${item.name}</h3>
                        </div>
                    </div>
                                      
                    <div class="cart-price">
                        <span>${item.inCart * item.price},000đ</span>
                    </div>            
                </div>
            `
        });

        productReceipt2.innerHTML += `
            <div class="provisional-text1">
                <p>${cartCost},000đ</p>
            </div>
          
        `
        productReceipt3.innerHTML += `
            <div class="totalize">
                <p>${cartCost},000đ</p>
            </div>
          
        `



    }
}

onLoadCartNumbers();
displayReceipt();