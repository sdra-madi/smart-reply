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

var body = document.getElementById('body');

const savedClass = localStorage.getItem("body");
if (savedClass) {
    body.className = savedClass;
}

const savedActiveButtonId = localStorage.getItem("activeButton");
if (savedActiveButtonId) {
    document.getElementById(savedActiveButtonId).classList.add('active');
}

function updateClass(buttonId, className) {
    body.className = '';
    body.classList.add(className);
    localStorage.setItem("body", className);

    document.querySelectorAll('button').forEach(button => {
        button.classList.remove('active');
    });

    document.getElementById(buttonId).classList.add('active');
    localStorage.setItem("activeButton", buttonId);
}

document.getElementById('primary-1').addEventListener('click', function(){
    updateClass('primary-1', 'green');
});

document.getElementById('primary-2').addEventListener('click', function(){
    updateClass('primary-2', 'red');
});

document.getElementById('primary-3').addEventListener('click', function(){
    updateClass('primary-3', 'blue');
});

document.getElementById('primary-4').addEventListener('click', function(){
    updateClass('primary-4', 'pink');
});
