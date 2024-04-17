// navbar function

const profileAction = document.getElementById("profileAction");
const dropdownAction = document.getElementById("dropdownAction");

profileAction.addEventListener("mouseover", () => {
    dropdownAction.classList.remove("hidden");
});

dropdownAction.addEventListener("mouseleave", () => {
    dropdownAction.classList.add("hidden");
});

// nav dropdown
const notification = document.getElementById("notification");

const notificationWrapper = document.getElementById("notificationWrapper");

notification.addEventListener("mouseover", () => {
    notificationWrapper.classList.remove("hidden");
});

notificationWrapper.addEventListener("mouseleave", () => {
    notificationWrapper.classList.add("hidden");
})


// nav cart function

const cartWrapper = document.getElementById("cartWrapper");

const cart = document.getElementById("cart");

cart.addEventListener("mouseover", () => {
    cartWrapper.classList.remove("hidden");
});

cartWrapper.addEventListener("mouseleave", () => {
    cartWrapper.classList.add("hidden");
})

// homePage function

//  -- Slider --

// slider variable
const slider = document.getElementById("slider");
const leftArrow = document.getElementById("leftArrow");
const rightArrow = document.getElementById("rightArrow");

// slider function
slider.addEventListener("mouseover", () => {
    leftArrow.style.left = "0";
    rightArrow.style.right = "0";
    leftArrow.style;
});

slider.addEventListener("mouseout", () => {
    leftArrow.style.left = "2.5rem";
    rightArrow.style.right = "2.5rem";
});

// Category bar function

const categoryDropdown = document.getElementById("categoryDropdown");
const categoryDropdownArrow = document.getElementById("categoryDropdownArrow");

categoryDropdown.addEventListener("click", () => {
    categoryDropdownArrow.classList.add("rotate-180");
});
