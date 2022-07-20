/** @format */

// scroll reveal contact section
ScrollReveal().reveal(".address", {
	delay: 200,
});
ScrollReveal().reveal(".email", {
	delay: 400,
});
ScrollReveal().reveal(".phone1", {
	delay: 600,
});
ScrollReveal().reveal(".phone2", {
	delay: 800,
});

var slideRight = {
	distance: "10%",
	origin: "right",
	delay: 200,
	duration: 1000,
};
ScrollReveal().reveal(".form-email", slideRight);

var slideLeft = {
	distance: "10%",
	origin: "left",
	delay: 400,
	duration: 1000,
};
ScrollReveal().reveal(".form-name", slideLeft);

var slideRight = {
	distance: "10%",
	origin: "right",
	delay: 600,
	duration: 1000,
};
ScrollReveal().reveal(".form-subject", slideRight);

var slideLeft = {
	distance: "10%",
	origin: "left",
	delay: 800,
	duration: 1000,
};
ScrollReveal().reveal(".form-textarea", slideLeft);
