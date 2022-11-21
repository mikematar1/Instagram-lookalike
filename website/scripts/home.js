function loaddata(){
    
    let set = document.createElement("img");
    set.src="./images/settings-logo.png";
    document.getElementById("header").append(set);
}
function getandsetprofile(){
    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
        let response = JSON.parse(this.responseText)["found"];
        if(!response){
            //user was not found
        }else{
            //user was found and transition to home page
            window.location.href="./home.html";
        }
        
    }

    xhr.open("GET", "../api/getprofilepic.php")
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(`username=${username.value}&password=${password.value}`);
}