left = document.getElementById("leftSide");
leftPath = document.getElementById("leftPath").value;

function setPathLeft(){
var path = event.target.innerHTML;
var str_pattern=/[0-9]/;
var check = str_pattern.test(path);
if(check){
	console.log(1);
	var newPath = document.getElementById("inPath").value = leftPath;
}else{
	console.log(2);
var newPath = document.getElementById("inPath").value = leftPath+"/"+path;
}
event.target.style.backgroundColor = "blue";
console.log(newPath);
};

left.addEventListener("click", setPathLeft);

right = document.getElementById("rightSide");
rightPath = document.getElementById("rightPath").value;

function setPathRight(){
var path = event.target.innerHTML;
var str_pattern=/[0-9]/;
var check = str_pattern.test(path);
if(check){
	console.log(1);
	var newPath = document.getElementById("inRPath").value = rightPath;
}else{
	console.log(2);
var newPath = document.getElementById("inRPath").value = rightPath+"/"+path;
}
event.target.style.backgroundColor = "blue";
console.log(newPath);
};

right.addEventListener("click", setPathRight);