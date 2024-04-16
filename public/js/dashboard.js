// navbar function

const profileAction = document.getElementById("profileAction");
const dropdownAction = document.getElementById("dropdownAction");

profileAction.addEventListener("click", () => {
    dropdownAction.classList.toggle("hidden");
});

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
});

slider.addEventListener("mouseout", () => {
    leftArrow.style.left = "2.5rem";
    rightArrow.style.right = "2.5rem";
});
