function finish(event) {
	var a = event.currentTarget.parentNode.childNodes[1];
	a.innerHTML = "<strike>" + a.innerHTML + "</strike>";
	console.log(a);
}




var size = document.querySelectorAll("#tasks button").length;
console.log(size);

/*for ( i = 0; i < size; i++) {
	document.querySelectorAll("#tasks button")[i].addEventListener('click',finish);
}*/

var j = 0
while(j<size){
	document.querySelectorAll("#tasks button")[j].addEventListener('click',finish);
	j++;
}

