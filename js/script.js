const hamburger = document.querySelector(".navbar__nav__hamburger");
const navLinks = document.querySelector(".navbar__nav__items");
const navItem = document.querySelectorAll(".navbar__nav__items__item");

// onclick hamburger button
hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("nav-active");

  // hamburger close
  hamburger.classList.toggle("nav-open");

  // animation nav link
  navItem.forEach((item, index) => {
    if (item.style.animation) {
      item.style.animation = "";
    } else {
      item.style.animation = `fade .5s ease-out forwards ${index / 7}s`;
    }
  });
});
