// Function to show the popup
function showPopup(event) {
    event.preventDefault(); // Prevent form submission
    document.getElementById('popup-container').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}
function hello(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    console.log(username, password)
    if (username=='admin' && password == 'user'){
        alert("login successfully");
        
    }else{
        alert("login failed");
        window.close(); 
    }
}
document.getElementById('showPopupBtn').addEventListener('click', showPopup);
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});
sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});
