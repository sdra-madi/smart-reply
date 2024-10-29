// Setting Color

$(window).resize(function () {
    $(window).width();
});

// Load saved colors on page load
$(document).ready(function () {
    loadSavedColors();
});

getCheckmark();

$(".changeBodyBackgroundFullColor").on("click", function () {
    const selectedColor = $(this).attr("data-color");
    if (selectedColor == "default") {
        $("body").removeAttr("data-background-full");
    } else {
        $("body").attr("data-background-full", selectedColor);
    }

    // Save to localStorage
    localStorage.setItem("bodyBackgroundFullColor", selectedColor);

    // Remove selected class from all and add to clicked
    $(this).siblings().removeClass("selected");
    $(this).addClass("selected");

    layoutsColors();
    getCheckmark();
});

$(".changeLogoHeaderColor").on("click", function () {
    const selectedColor = $(this).attr("data-color");
    if (selectedColor == "default") {
        $(".logo-header").removeAttr("data-background-color");
    } else {
        $(".logo-header").attr("data-background-color", selectedColor);
    }

    // Save to localStorage
    localStorage.setItem("logoHeaderColor", selectedColor);

    // Remove selected class from all and add to clicked
    $(this).siblings().removeClass("selected");
    $(this).addClass("selected");

    customCheckColor();
    layoutsColors();
    getCheckmark();
});

$(".changeTopBarColor").on("click", function () {
    const selectedColor = $(this).attr("data-color");
    if (selectedColor == "default") {
        $(".main-header .navbar-header").removeAttr("data-background-color");
    } else {
        $(".main-header .navbar-header").attr(
            "data-background-color",
            selectedColor
        );
    }

    // Save to localStorage
    localStorage.setItem("topBarColor", selectedColor);

    // Remove selected class from all and add to clicked
    $(this).siblings().removeClass("selected");
    $(this).addClass("selected");

    layoutsColors();
    getCheckmark();
});

$(".changeSideBarColor").on("click", function () {
    const selectedColor = $(this).attr("data-color");
    if (selectedColor == "default") {
        $(".sidebar").removeAttr("data-background-color");
    } else {
        $(".sidebar").attr("data-background-color", selectedColor);
    }

    // Save to localStorage
    localStorage.setItem("sideBarColor", selectedColor);

    // Remove selected class from all and add to clicked
    $(this).siblings().removeClass("selected");
    $(this).addClass("selected");

    layoutsColors();
    getCheckmark();
});

$(".changeBackgroundColor").on("click", function () {
    const selectedColor = $(this).attr("data-color");
    $("body").removeAttr("data-background-color");
    $("body").attr("data-background-color", selectedColor);

    // Save to localStorage
    localStorage.setItem("backgroundColor", selectedColor);

    // Remove selected class from all and add to clicked
    $(this).siblings().removeClass("selected");
    $(this).addClass("selected");

    getCheckmark();
});

function customCheckColor() {
    var logoHeader = $(".logo-header").attr("data-background-color");
    if (logoHeader !== "white") {
        $(".logo-header .navbar-brand").attr(
            "src",
            "assets/img/kaiadmin/logo_light.svg"
        );
    } else {
        $(".logo-header .navbar-brand").attr(
            "src",
            "assets/img/kaiadmin/logo_dark.svg"
        );
    }
}

var toggle_customSidebar = false,
    custom_open = 0;

if (!toggle_customSidebar) {
    var toggle = $(".custom-template .custom-toggle");

    toggle.on("click", function () {
        if (custom_open == 1) {
            $(".custom-template").removeClass("open");
            toggle.removeClass("toggled");
            custom_open = 0;
        } else {
            $(".custom-template").addClass("open");
            toggle.addClass("toggled");
            custom_open = 1;
        }
    });
    toggle_customSidebar = true;
}

function getCheckmark() {
    var checkmark = `<i class="gg-check"></i>`;
    $(".btnSwitch").find("button").empty();
    $(".btnSwitch").find("button.selected").append(checkmark);
}

// Function to load saved colors from localStorage
function loadSavedColors() {
    const bodyBackgroundFullColor = localStorage.getItem(
        "bodyBackgroundFullColor"
    );
    const logoHeaderColor = localStorage.getItem("logoHeaderColor");
    const topBarColor = localStorage.getItem("topBarColor");
    const sideBarColor = localStorage.getItem("sideBarColor");
    const backgroundColor = localStorage.getItem("backgroundColor");

    if (bodyBackgroundFullColor) {
        $("body").attr("data-background-full", bodyBackgroundFullColor);
        $(
            ".changeBodyBackgroundFullColor[data-color='" +
                bodyBackgroundFullColor +
                "']"
        ).addClass("selected");
    }
    if (logoHeaderColor) {
        $(".logo-header").attr("data-background-color", logoHeaderColor);
        customCheckColor();
        $(
            ".changeLogoHeaderColor[data-color='" + logoHeaderColor + "']"
        ).addClass("selected");
    }
    if (topBarColor) {
        $(".main-header .navbar-header").attr(
            "data-background-color",
            topBarColor
        );
        $(".changeTopBarColor[data-color='" + topBarColor + "']").addClass(
            "selected"
        );
    }
    if (sideBarColor) {
        $(".sidebar").attr("data-background-color", sideBarColor);
        $(".changeSideBarColor[data-color='" + sideBarColor + "']").addClass(
            "selected"
        );
    }
    if (backgroundColor) {
        $("body").attr("data-background-color", backgroundColor);
        $(
            ".changeBackgroundColor[data-color='" + backgroundColor + "']"
        ).addClass("selected");
    }
}
