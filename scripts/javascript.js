var sandboxElement;
var ss; //ss = sandbox style
var images = 8;
var tool;
var content;
var spani;



// for (i = 0; i < images; i++) {
// 	sandboxElement = document.createElement("img");

// 	sandboxElement.className = "sandbox__exploration";
// 	sandboxElement.id = "sandy" + i;
// 	document.getElementById("sand").appendChild(sandboxElement);
// 	console.log(sandboxElement);

// 	document.getElementById("sandy" + i).src = "images/gifs/0" + i + ".gif";

// }



for (i = 0; i < images; i++) {

	
	tool = document.createElement("a");
	tool.className = "tooltip";
	tool.id = "tool" + i;

	content = document.createElement('img');
	content.className="sandbox__exploration";
	content.id="sandy" + i;

	spani = document.createElement('span');
	spani.id = "tooltip-span";
	spani.innerHTML="Hello World!";

	document.getElementById("sand").appendChild(tool);
	document.getElementById("tool" + i ).appendChild(content);
	document.getElementById("tool" + i ).appendChild(spani);

	console.log(tool,content,spani);
	document.getElementById("sandy" + i).src = "images/gifs/0" + i + ".gif";

}





