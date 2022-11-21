function signupRedirect(){
    console.log("hey");
}
function authenticate(){
    let username = document.getElementById("username");
    let password = document.getElementById("password");

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

    xhr.open("POST", "../api/login.php")
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(`username=${username.value}&password=${password.value}`);
}