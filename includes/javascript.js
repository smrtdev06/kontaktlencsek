function torles_link(link) {
    if( confirm("Biztosan t�r�ljem?") ) {
		document.location.href = link;
	}
}
//men�h�z

function nyitzar(ELEM) {
	if(ELEM.length > 0) {
		var KONKRETLAYER = document.getElementById(ELEM);
		newDisplay = KONKRETLAYER.style.display == 'none' ? 'block' : 'none';
		KONKRETLAYER.style.display = newDisplay;
	}
}

