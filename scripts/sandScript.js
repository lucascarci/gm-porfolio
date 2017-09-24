var tri = document.getElementById('triangle');
var box = document.getElementById('sBox');

tri.onclick = springList;

function springList() {
  tri.style.transform = "rotate(90deg)";
  tri.style.transform = "-webkit-rotate(90deg)";
  tri.style.borderLeftColor = "hsl(15,94%,54%)";
  box.style.height= "50vh";
  tri.onclick = springListReverse;
}

function springListReverse() {
  tri.style.transform = "rotate(0deg)";
  tri.style.transform = "-webkit-rotate(0deg)";
  tri.style.borderLeftColor = "hsl(0,0%,10%)";
  box.style.height= "0";
  tri.onclick = springList;
}