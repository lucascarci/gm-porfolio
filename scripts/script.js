
var fullscreen = document.getElementById('ele');
var cs = document.getElementById('cls');
var front = document.getElementById('prj-front');
fullscreen.onclick = sizeUp;
cs.onclick= sizeDown;

function sizeUp() {
  fullscreen.style.width ="100vw";  
  fullscreen.style.height ="100vh";  
  cs.style.display = "inline";
  fullscreen.style.pointerEvents="none";
  // front.style.zIndex="99";
  // front.style.position = "fixed";

}
function sizeDown(){
  fullscreen.style.width = "750px";
  fullscreen.style.height = "300px";
  fullscreen.style.pointerEvents="auto";
  cs.style.display = "none";
}
