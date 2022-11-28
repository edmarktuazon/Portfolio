/** @format */

// sticky nav
const scroll = document.querySelector("#navigation");

window.addEventListener("scroll", () => {
	if (scrollY >= 631) {
		scroll.className.includes("sticky") ? "" : scroll.classList.add("sticky");
	} else if (scrollY < 631) {
		if (scroll.className.includes("sticky")) {
			scroll.classList.remove("sticky");
		}
	}
});
// toggle nav
const hamburgerBtn = document.querySelector(".mobile-menu-button ");
const menu = document.querySelector(".mobile-menu");
const mainContentContainer = document.querySelector("main");

hamburgerBtn.addEventListener("click", () => {
	menu.classList.toggle("open");
	mainContentContainer.classList.toggle("dim");
});

// animate hamburger icon
const hamburgerMenu = document.querySelector(".hamburger-menu");
const hamburgerIcon = document.querySelector(".bar");

hamburgerMenu.addEventListener("click", () => {
	hamburgerIcon.classList.toggle("trigger");
});

// (function () {
// 	$(".hamburger-menu").on("click", function () {
// 		$(".bar").toggleClass("trigger");
// 	});
// })();
