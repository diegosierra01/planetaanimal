function validar(obj){
	if(obj.checked==true){
		hab();		
	}else{
		deshab();		
	}
}

function deshab() { 
  frm = document.forms['form']; 
  for(i=0; ele=frm.elements[i]; i++)
  {
    if(ele.value == "N")  
         ele.checked=1;
    if(ele.value == "No")  
         ele.checked=1;
    if(ele.value == "0")  
         ele.checked=1;
  }
} 

function hab() { 
  frm = document.forms['form']; 
  for(i=0; ele=frm.elements[i]; i++) 
    if(ele.type == "radio")  
         ele.checked=0;
} 