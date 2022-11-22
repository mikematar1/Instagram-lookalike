function loaddata(){
    
    getallposts()
    
    
}
function getandsetprofile(){
    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
       let prof= document.createElement("img");
       prof.src =this.responseText;
       document.getElementById("headerr").append(prof);

    }

    xhr.open("GET", "../api/getprofilepic.php")
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
}
function getallposts(){
    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
       let response = JSON.parse(this.responseText);
       for(let i=0;i<response.length;i++){
        let headpost = document.createElement("div");
        let temp=document.createElement("span");
        temp.innerHTML=response[i]['username'];
        headpost.append(temp);

        temp=document.createElement("span");
        temp.innerHTML=response[i]['date_created'];
        headpost.append(temp);

        let contentpost= document.createElement("div");
        temp=document.createElement("span");
        temp.innerHTML=response[i]['caption'];
        contentpost.append(temp);

        let masterdiv = document.createElement("div");
        masterdiv.append(headpost);
        masterdiv.append(contentpost);
        document.getElementById("content").append(masterdiv);
       }
    }

    xhr.open("GET", "../api/getposts.php")
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
}