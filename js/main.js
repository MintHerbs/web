

//navbar toggler
const collapsibles = document.querySelectorAll(".collapsible");
collapsibles.forEach((item) =>
  item.addEventListener("click", function () {
    this.classList.toggle("collapsible--expanded");
  })
);




//smooth scrolling for the links in the same page


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});






document.querySelectorAll('input[name="price"]').forEach((radio) => {
    radio.addEventListener("change", function() {
        document.getElementById("selected-price").textContent = "Rs " + this.value;
    });
});

