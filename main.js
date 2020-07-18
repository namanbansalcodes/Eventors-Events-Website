const selectElement = function (element) {
    return document.querySelector(element);
};
const menuToggler = selectElement(".menu-toggle");
const navItemToggler = selectElement(".item-toggle");
const body = selectElement("body");
menuToggler.addEventListener("click", function () {
    body.classList.toggle("open");
});
navItemToggler.addEventListener("click", function () {
    body.classList.toggle("open");
});

