let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        id: '00',
        name: 'Date A Live - Tập 8',
        tag: "date08",
        price: 15,
        inCart: 0
    },
    {
        name: 'OVERLORD - Tập 1',
        tag: "OL01",
        price: 20,
        inCart: 0
    },
    {
        name: 'Trò Chơi Tử Thần',
        tag: 'tttt',
        price: 15,
        inCart: 0
    },
    {
        name: 'Grimgar',
        tag: 'grimgar01',
        price: 25,
        inCart: 0
    }
];

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.nav-item span').textContent = productNumbers;
    }
}

function cartNumbers(product) {
    // console.log("The product clicked is", product)
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.nav-item span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.nav-item span').textContent = 1;
    }
    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null) {
        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    // console.log("The product price is", product.price);
    let cartCost = localStorage.getItem('totalCost');
    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost);

    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);

    } else {
        localStorage.setItem("totalCost", product.price);
    }

}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer1 = document.querySelector(".products");
    let productContainer2 = document.querySelector(".cart-payment-info");
    let productContainer3 = document.querySelector(".information");
    let cartCost = localStorage.getItem('totalCost');

    console.log(cartItems);
    if (cartItems && productContainer1) {
        productContainer1.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer1.innerHTML += `
                <div class="product-cart">
                    <div class="cart-img">
                        <img src="./images/${item.tag}.jpg" alt="">
                        <div class="cart-text">
                            <h3>${item.name}</h3>
                            <span>${item.price},000đ</span>
                        </div>              
                    </div>

                    <div class="cart-price" id="cart-price">
                       <box-icon name='x-circle' ></box-icon>
                       <span>${item.inCart * item.price},000đ</span>
                    </div>            
                </div>       
            `

           
            // <div class="product">
            //     <box-icon name='x-circle'></box-icon>
            //     <img src="./images/${item.tag}.jpg" alt="">
            //     <span>${item.name}</span>
            // </div>
            // <div class="price">${item.price}</div>
            // <div class="quantity">
            //     <box-icon class="icon" name='plus'></box-icon>
            //     <span>${item.inCart}</span>
            //     <box-icon name='minus'></box-icon>
            // </div>
            // <div class="total">
            //     ${item.inCart * item.price},00VNĐ
            // </div>      
        });
        productContainer2.innerHTML += `
            <div class="cart-payment-info">
                 <p>${cartCost},000đ</p>
            </div>     
        `
        productContainer3.innerHTML += `
        <div class="cart-note">
                <h4>Ghi chú đơn hàng</h4>
                <textarea type="text" name="" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
            </div>
            <div class="po-cart policy">
                <h4>Chính sách mua hàng</h4>
                <ul>
                    <li><i class="fa fa-long-arrow-alt-right"></i>Nhập mã FREESHIP giảm 30K phí chuyển cho đơn từ 299K.</li>
                    <li><i class="fa fa-long-arrow-alt-right"></i>Đổi trả sản phẩm trong 30 ngày do lỗi sản xuất.</li>
                    <li><i class="fa fa-long-arrow-alt-right"></i>Sản phẩm còn đủ tem mác, chưa qua sử dụng.</li>
                </ul>
            </div>
        `
    }
}

displayCart();


