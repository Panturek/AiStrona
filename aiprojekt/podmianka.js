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
			var ftext = tekst.split('@');
			$('.front').text(ftext[0]);
			setTimeout(function(){$('.back').text(ftext[1]);}, 200);
		}
	};
	xmlhttp.open("GET","podmianka.php",true);
	xmlhttp.send();
}

$('.fresponse').click(nextCard);
$(window).load(nextCard);