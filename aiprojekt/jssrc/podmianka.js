function nextCard() {
    
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} 
	else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
	        var tekst = this.responseText;
			$('#dodaj').text("coes");
		}
		$('#dodaj').text(this.status);
	};
	xmlhttp.open("GET","/../getuser.php?",true);
	xmlhttp.send();
}

$('.fresponse').click(nextCard);