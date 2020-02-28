/*Loader*/
window.addEventListener("load", function() {
	const loader = document.querySelector(".loader");
	loader.className += " hidden"; //class "loader hidden"
});

/*Button up*/
window.onscroll = function() {
	scrollFunction()
};

function scrollFunction() {
	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		document.getElementById("btnUp").style.display = "block";
	} else {
		document.getElementById("btnUp").style.display = "none";
	}
}

function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}