$(document).ready(function () {
	window.history.pushState("", "", window.location.href.replace(/#.*/, ''));
});