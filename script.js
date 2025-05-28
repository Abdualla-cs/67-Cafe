var navLinks = document.querySelectorAll(".nav-menu .nav-link");
var menuOpenButton = document.getElementById("menu-open-button");
var menuCloseButton = document.getElementById("menu-close-button");

menuOpenButton.addEventListener("click", function () {
    document.body.classList.toggle("show-mobile-menu");
});

menuCloseButton.addEventListener("click", function () {
    menuOpenButton.click();
});

for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", function () {
        menuOpenButton.click();
    });
}

var swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 25,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
    }
});

var menuPrices = {
    coffee: 3.50,
    milkshake: 4.50,
    croissant: 2.50,
    plate: 8.00,
    dessert: 5.00,
    salad: 6.50
};

var orderSelect = document.querySelector('.order-select');
var dynamicFields = document.querySelector('.dynamic-fields');
var qtyInput = document.querySelector('.qty-input');
var totalDisplay = document.createElement('div');
totalDisplay.className = 'total-notification';
document.querySelector('.order-form').appendChild(totalDisplay);

orderSelect.addEventListener('change', function () {
    if (orderSelect.value !== "") {
        dynamicFields.style.display = 'flex';
        calculateTotal();
    } else {
        dynamicFields.style.display = 'none';
        totalDisplay.textContent = '';
    }
});

qtyInput.addEventListener('input', function () {
    calculateTotal();
});

function calculateTotal() {
    var selectedItem = orderSelect.value;
    var quantity = parseInt(qtyInput.value);
    if (isNaN(quantity)) quantity = 0;

    if (selectedItem !== "" && quantity > 0) {
        var total = (menuPrices[selectedItem] * quantity).toFixed(2);
        totalDisplay.textContent = "Total: $" + total;
        totalDisplay.style.display = 'block';
    } else {
        totalDisplay.style.display = 'none';
    }
}

document.querySelector('.order-form').addEventListener('submit', function (e) {
    if (orderSelect.value === "") {
        alert('Please select an item first');
        e.preventDefault();
        return;
    }

    var selectedOption = orderSelect.options[orderSelect.selectedIndex];
    var itemName = selectedOption.text.split(' - ')[0];
    var quantity = qtyInput.value || 1;
    var total = totalDisplay.textContent;

    alert("Order confirmed!\n\nItem: " + itemName + " (x" + quantity + ")\n" + total + "\n\nWe'll contact you shortly.");
});
