var modal = document.getElementById("form");
var editButton = document.getElementById("edit");
var span = document.getElementsByClassName("close")[0]

editButton.onclick = function() {
	modal.style.display = "block";
}

span.onclick = function() {
	modal.style.display = "none";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	 }
}