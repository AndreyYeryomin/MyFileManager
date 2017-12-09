var el = document.getElementsByClassName("dirName");

function myFunc(){
console.log(this.innerHTML())
};

el.addEventListener("click", myFunc);