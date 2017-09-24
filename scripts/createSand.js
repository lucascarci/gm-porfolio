var lightbox;
var elements = document.getElementsByClassName('light');
console.log(elements);
elements.onclick = createLightbox;

function createLightbox() {
	alert('working');
}
