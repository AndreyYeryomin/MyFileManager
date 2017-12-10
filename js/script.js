el = document.getElementById("leftSide");
leftPath = document.getElementById("leftPath").value;

function myFunc(){
var path = event.target.innerHTML;
event.target.style.backgroundColor = "blue";
var newPath = document.getElementById("inPath").value = leftPath+"/"+path;
console.log(newPath);
};

el.addEventListener("click", myFunc);