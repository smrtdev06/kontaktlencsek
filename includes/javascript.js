function torles_link(link) {
    if( confirm("Biztosan töröljem?") ) {
		document.location.href = link;
	}
}
//menühöz

function nyitzar(ELEM) {
	if(ELEM.length > 0) {
		var KONKRETLAYER = document.getElementById(ELEM);
		newDisplay = KONKRETLAYER.style.display == 'none' ? 'block' : 'none';
		KONKRETLAYER.style.display = newDisplay;
	}
}

