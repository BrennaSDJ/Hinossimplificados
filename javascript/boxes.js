function search(){
    let filter = document.getElementById("find").value.toUpperCase();

    let item = document.querySelectorAll(".mini_box");

    let l = document.getElementsByTagName("span");

    for(var i = 0; i <= l.length; i++){
       let a = item[i].getElementsByTagName("span")[0];
       
       let value = a.innerHTML || a.innerText || a.textContent;

       if(value.toUpperCase().indexOf(filter) > -1 ){
           item[i].style.display = "";

       }else{
           item[i].style.display = "none";

       }
    }
}