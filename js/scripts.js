function BurgerMenu() {
  const burger = document.querySelector(".header__burger");
  const menu = document.querySelector(".menu");
  const body = document.querySelector("body");
  burger.addEventListener("click", () => {
    if (!menu.classList.contains("active")) {
      menu.classList.add("active");
      burger.classList.add("active");
      body.classList.add("locked");
    } else {
      menu.classList.remove("active");
      burger.classList.remove("active");
      body.classList.remove("locked");
    }
  });

  const menuLinks = document.querySelectorAll(".menu__item-link[data-goto]");
  if (menuLinks.length > 0) {
    menuLinks.forEach((menuLink) => {
      menuLink.addEventListener("click", onMenuLinkClick);
    });

    function onMenuLinkClick(e) {
      const menuLink = e.target;
      if (
        menuLink.dataset.goto &&
        document.querySelector(menuLink.dataset.goto)
      ) {
        const gotoBlock = document.querySelector(menuLink.dataset.goto);
        const gotoBlockValue =
          gotoBlock.getBoundingClientRect().top +
          pageYOffset -
          document.querySelector(".header").offsetHeight;

        if (menu.classList.contains("active")) {
          menu.classList.remove("active");
          burger.classList.remove("active");
          body.classList.remove("locked");
        }

        window.scrollTo({
          top: gotoBlockValue,
          behavior: "smooth",
        });
        e.preventDefault();
      }
    }
  }

  window.addEventListener("resize", () => {
    if (window.innerWidth > 767.98) {
      menu.classList.remove("active");
      burger.classList.remove("active");
      body.classList.remove("locked");
    }
  });
}

BurgerMenu();

let gallery = document.getElementById("gallery");
lightGallery(gallery, {
  controls: true,
  counter: false,
  getCaptionFromTitleOrAlt: false,
});
