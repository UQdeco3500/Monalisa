// While signing up...
function Signup() {
  var name = document.getElementById("signup-email");
  var pw = document.getElementById("signup-password");
  var cpw = document.getElementById("signup-password-confirm");

  // If any nessesary sign up information id vacant, the user will be asked to fill in the respective info
  if (name.value.length == 0) {
    alert("Please fill in email");
  } else if (pw.value.length == 0) {
    alert("Please fill in password");
  } else if (name.value.length == 0 && pw.value.length == 0) {
    alert("Please fill in email and password");
  } else if (pw.value != cpw.value) {
    // This step helps check is the confirmed password is same with the sign in password
    alert("Password so not match");
  } else {
    // Store user login info
    localStorage.setItem("name", name.value);
    localStorage.setItem("pw", pw.value);

    // Store that the user had logged in
    localStorage.setItem("login", true);

    alert("Your account has been created");
    window.location.replace("1_home.html");
  }
}

// login
function Login() {
  var storedName = localStorage.getItem("name");
  var storedPw = localStorage.getItem("pw");

  var userName = document.getElementById("login-email");
  var userPw = document.getElementById("login-password");

  //Check if the info had been saved or not
  if (userName.value == storedName && userPw.value == storedPw) {
    alert("You are logged in.");
    localStorage.setItem("login", true);
    window.location.replace("1_home.html");
  } else if (userName.value.length == 0) {
    alert("Please fill in registered email");
  } else if (userPw.value.length == 0) {
    alert("Please fill in password");
  } else if (userName.value.length == 0 && userPw.value.length == 0) {
    alert("Please fill in email and password");
  } else {
    alert("Could not recognize you, Try again, or sign up if you have not!");
  }
}

// Refresh Page Once (How to Reload Page Only Once in JavaScript ?, 2021)
function refresh() {
  url = location.href;
  var times = url.split("?");
  if (times[1] != 1) {
    url += "?1";
    self.location.replace(url);
    ChangetoLogin();
  }
}
onload = refresh;

// Change button to Login
if (localStorage.getItem("login") === "true") {
  ChangetoLogin();
}

function ChangetoLogin() {
  var label = document.getElementById("Signin_Label");

  if (label.innerHTML === "SignIn") {
    label.innerHTML = "Logout";

    // If Clicked on "Logout" (Storage RemoveItem() Method, n.d.)
    label.addEventListener("click", function handleClick() {
      label.innerHTML = "SignIn";
      localStorage.removeItem("login");
    });
  } else {
    label.innerHTML = "SignIn";
  }
}

// purchase - dining page
//Get all add to cart buttons
var shoppingcart = document.getElementsByClassName("addtocart");
for (i = 0; i < shoppingcart.length; i++) {
  // If clicked on shopping chart, alert all the item to chart
  shoppingcart[i].addEventListener("click", addtocart);
}

function addtocart() {
  alert("Add to cart success");
}

//switcher
const switchers = [...document.querySelectorAll(".switcher")];

switchers.forEach((item) => {
  item.addEventListener("click", function () {
    switchers.forEach((item) => item.parentElement.classList.remove("is-active"));
    this.parentElement.classList.add("is-active");
  });
});

// popup - video
window.addEventListener("load", function () {
  function open(event) {
    document.querySelector(".popup").style.display = "block";
  }
});

document.querySelector("#close").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "none";
});

// rotate
let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(Math.random() * 10000);

let flash = document.querySelector(".container div");

btn.onclick = function () {
  container.style.transform = "rotate(" + number + "deg)";
  number += Math.ceil(Math.random() * 10000);
};

// popup - text
function myFunction() {
  var popup = document.getElementsByClassName("popuptext");
  for (i = 0; i < popup.length; i++) {
    popup[i].classList.toggle("show");
  }
}
