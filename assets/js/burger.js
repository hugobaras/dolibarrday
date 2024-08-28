function toggleMenu() {
  const burgerMenu = document.querySelector(".burger-menu");
  const navMobile = document.querySelector(".header-nav-mobile");
  burgerMenu.classList.toggle("active");

  if (navMobile.classList.contains("active")) {
    navMobile.classList.remove("active");
    setTimeout(() => {
      navMobile.style.display = "none";
    }, 300);
  } else {
    navMobile.style.display = "flex";
    setTimeout(() => {
      navMobile.classList.add("active");
    }, 10);
  }
}
