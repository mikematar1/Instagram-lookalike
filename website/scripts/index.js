function signupRedirect(){
    console.log("hey");
}
function authenticate(){
    let username = document.getElementById("username");
    let password = document.getElementById("password");

    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
        // let response = JSON.parse(this.responseText)["found"];
        console.log(this.responseText);
        
    }

    xhr.open("POST", "../api/login.php")
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(`name=${username}&pwd=${password}`);
}