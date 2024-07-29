window.addEventListener("scroll", function () {
    const header = document.querySelector(".header");
    const headerMobile = document.querySelector(".nav-header-mobile");
    if (window.scrollY > 100) {
      header.classList.add("headerDark");
      headerMobile.classList.add("headerDark");
    } else {
      header.classList.remove("headerDark");
      headerMobile.classList.remove("headerDark");
    }
  });
  
  const openMobileNav = document.querySelector(".humbrger");
  const closeMobileNav = document.querySelector(".close-btn");
  
  if (document.querySelector(".humbrger")) {
    openMobileNav.addEventListener("click", function () {
      document.querySelector(".nav-mobile-content").classList.toggle("show");
    });
    closeMobileNav.addEventListener("click", function () {
      document.querySelector(".nav-mobile-content").classList.toggle("show");
    });
  }
  

  // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

var loader = document.getElementById("overlay");
window.addEventListener("load", function () {
    if (loader) {
        loader.style.display = "none";
    }
});