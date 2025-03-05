"use strict";

const planType = document.getElementById('plan-type');
const dataJson = {
    planType: "1",
    productId: null,
    _token: _token  // Make sure to replace this with your actual token if needed
};
const productId = document.getElementsByClassName('product');

(function() {
    let firstElementProduct = document.querySelector('.product');
    toggleButtonStyle(firstElementProduct);  // Set initial button style
    dataJson.productId = firstElementProduct.getAttribute('data-product-id');
    updateProduct(dataJson);
})();

planType.addEventListener('change', function(event) {
    dataJson.planType = planType.checked ? "2" : "1";
    updateProduct(dataJson);
});

for (let i = 0; i < productId.length; i++) {
    productId[i].addEventListener('click', function(event) {
        dataJson.productId = event.target.getAttribute('data-product-id');

        // Toggle styles for clicked button and reset others
        resetButtonStyles();
        toggleButtonStyle(event.target);

        updateProduct(dataJson);
    });
}

function toggleButtonStyle(button) {
    button.classList.toggle('btn-outline-dark');
    button.classList.toggle('btn-dark');
}

function resetButtonStyles() {
    Array.from(productId).forEach(button => {
        button.classList.remove('btn-dark');
        button.classList.add('btn-outline-dark');
    });
}

function updateProduct(dataJson) {
    fetch(`${baseUrl}get-plans`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(dataJson)
    })
    .then(response => response.json())
    .then(data => {
        let html = ``;
        if(data.status) {
            data.data.forEach(item =>{
                html+=`<div class="pricing-card product-pricing-card col-xl-2 col-lg-4 col-md-6 col-sm-10 col-10">

                <div class="text">
                    <div class="card-heading product-card-heading product-name">${item.name}</div>
                    <div class="card-heading product-card-heading product-price">
                        <p class="new-price">$${item.price}</p> `;
                    if(item.show_original_price==1){
                       html+=`<s class="orginal-price">$${item.original_price}</s>`
                    }
                    
                html+=`</div>
                    <div class="bio">
                    ${item.description}
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="${baseUrl}contact-us" target="_blank" class="text-decoration-none w-100">
                    <button
                    type="button"
                    class="btn btn-outline-dark rounded-pill d-flex align-items-center gap-2 w-100 justify-content-center">
                    Contact Us
                    </button>
                    </a>
                </div>
                </div>`;
            });
        }else{
            html="No Plan found !"
        }
        document.getElementById('plan-container').innerHTML = html;

    })
    .catch(error => {
        console.error('There was an error with the POST request:', error);
    });
}
