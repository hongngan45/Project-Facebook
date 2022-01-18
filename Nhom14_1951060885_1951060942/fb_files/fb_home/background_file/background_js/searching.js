function searching()
{
	var xmlhttp;

  	xmlhttp=new XMLHttpRequest(); 
	xmlhttp.onreadystatechange=function() 

	{	
  			var details=document.getElementById("searching_ID");
	  		details.innerHTML=xmlhttp.responseText; // trả về json string 
	}
	xmlhttp.open("GET","Search_Display.php?search_text="+document.fb_search.search1.value,true); // phương thức gọi lên server client , đường dẫn gọi lên server , gọi đồng bộ lên 
	xmlhttp.send(null); 
}