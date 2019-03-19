var likeButton = document.getElementById("heart-like-button");

function colorLike(){
	var heart = document.getElementById("heart-emoticon");
	var counter = document.getElementById("like-counter");

	if (heart.style.color == 'red'){
		heart.style.color = 'black';
		counter.textContent = parseInt(counter.textContent) - 1;
	}
	else{
		heart.style.color = 'red';
		counter.textContent = parseInt(counter.textContent) + 1;
	}
	console.log(likeButton.style.color);
}

likeButton.addEventListener("click", function(){
	colorLike();
});