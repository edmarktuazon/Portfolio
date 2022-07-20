/** @format */

// initialize Isotope
var $grid = $(".filtered-items").isotope({
	// options
	// layoutMode: 'masonry'
});

// filter items on button click
$(".item-menus").on("click", "button", function () {
	var filterValue = $(this).attr("data-filter");
	$("#filters button").removeClass("active");
	$(this).addClass("active");
	$grid.isotope({
		filter: filterValue,
	});
});

const clientBtn = document.querySelector(".client-btn");

clientBtn.addEventListener("click", () => {
	const clientContent = document.querySelector(".client-projects");
	clientContent.classList.add("show");
});

const allBtn = document.querySelector(".all-btn");

allBtn.addEventListener("click", () => {
	const clientContent = document.querySelector(".client-projects");
	clientContent.classList.remove("show");
});
