var likeButton = document.getElementById("heart-like-button");
var commentButton = document.getElementById("comment-button");

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
}

function addComment(){
	var commentContent = document.getElementById("comment-content");
	var msg = document.getElementById("comment-msg");

	if (commentContent.value == ""){
		msg.textContent = "Please write something before you comment!";
		msg.style.color = 'red';
	}
	else{
		msg.textContent = "";

		var newMsg = document.createElement('li');
		newMsg.className = "list-group-item";

		var newMedia = document.createElement('div');
		newMedia.className = "media";
		var newMediaBody = document.createElement('div');
		newMediaBody.className = "media-body";

		var usrImgLink = document.createElement('a');
		usrImgLink.href ="user_profile.html";
		var usrProfLink = document.createElement('a');
		usrProfLink.href = "user_profile.html";

		var usrImg = document.createElement('img');
		usrImg.className = "align-self-start user-image mr-1";
		usrImg.src = "https://bootdey.com/img/Content/user_1.jpg";

		var usrProfHead = document.createElement('h5');
		usrProfHead.className = "mt-0";
		usrProfHead.textContent = "Username";

		var timestamp = document.createElement('small');
		timestamp.className = "font-italic";
		timestamp.textContent = " Posted just now";

		var cmtContent = document.createElement('p');
		cmtContent.textContent = commentContent.value;

		cmtList = document.getElementById("comment-list");
		usrProfLink.appendChild(usrProfHead);
		newMediaBody.appendChild(usrProfLink);
		newMediaBody.appendChild(timestamp);
		newMediaBody.appendChild(cmtContent);

		usrImgLink.appendChild(usrImg);
		newMedia.appendChild(usrImgLink);
		newMedia.appendChild(newMediaBody);

		newMsg.appendChild(newMedia);

		cmtList.appendChild(newMsg);
	}
}

likeButton.addEventListener("click", function(){
	colorLike();
}, false);
commentButton.addEventListener("click", function(){
	addComment();
}, false);