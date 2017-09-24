var sandboxElement;
var ss; //ss = sandbox style
var images = 8;

for (i = 0; i < images; i++) {
	sandboxElement = document.createElement("img");

  	// li.innerHTML = (i + 10).toString(36);
	sandboxElement.className = "sandbox__exploration";
	sandboxElement.id = "sandy" + i;
	document.getElementById("sand").appendChild(sandboxElement);
	console.log(sandboxElement);

	document.getElementById("sandy" + i).src = "../images/gifs/0" + i + ".gif";
	// ss = sandboxElement.style;
	// ss.width="10"* i + "px";
	// ss.height="30" * i + "px";
}