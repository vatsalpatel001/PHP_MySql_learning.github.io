	
function  trigger(){
	// alert("j")
	const Head = document.querySelectorAll(".Card_Short");
	const SubStr = document.querySelectorAll(".Card_Long");
   Head.forEach((elem,index,arr) => {
    arr[index].setAttribute("vat-id","MSD_"+index)
    elem.addEventListener("click", start);
    });
      SubStr.forEach((elem,index,arr) => {
      	 arr[index].setAttribute("id","Virat_"+index);
      	 arr[index].setAttribute("class","Card_Long hide");
    elem.addEventListener("dblclick", hider);
    });
   // alert(Head.length)
}

function start(){

	document.getElementById(event.target.getAttribute("vat-id").replace("MSD","Virat")).classList.toggle("hide")
}

function hider(){
	event.target.classList.toggle("hide")
}


const textarea = document.querySelectorAll("textarea");
   textarea.forEach((elem,index,arr) => {
      var textareaLength = arr[index].value.length*0.15;

    arr[index].setAttribute("style","height:"+textareaLength +"%")
    
    });




