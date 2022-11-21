function loaddata(){
    getandsetprofile();
    let set = document.createElement("img");
    set.src="./images/settings-logo.png";
    set.width="40px";
    
    document.getElementById("headerr").append(set);
    
}
function getandsetprofile(){
    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
       let prof= document.createElement("img");
       prof.src = "data:image/jpg;charset=utf8;base64,"+this.responseText;
       document.getElementById("headerr").append(prof);

        
    }

    xhr.open("GET", "../api/getprofilepic.php")
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
}
function getallposts(){
    
}