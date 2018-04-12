var sandboxElement;
var ss; //ss = sandbox style
var images = 20;
var tool;
var content;

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
	tool.id = "tooltip-span"+i;

	content = document.createElement('img');
	content.className="sandbox__exploration";
	content.id="sandy" + i;

	document.getElementById("sand").appendChild(tool);
	document.getElementById("tooltip-span"+i).appendChild(content);

	console.log(tool,content);
	document.getElementById("sandy" + i).src = "images/gifs/0" + i + ".jpg";

}







