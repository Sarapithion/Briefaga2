//* LOGIN
let loginData = document.querySelector("#loginData");


function signin() {
  //! Login section
  // Get the password and email of the user
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let emailCredentials = {
    email: email,
    password: password,
  };

  // Define parameters to use
  let params = {
    method: "POST",
    headers: {
      "Content-Type": "application/json; charset=utf-8",
    },
    body: JSON.stringify(emailCredentials),
  };

  // send value to login.php
  fetch("http://gda/public/connexion", params)
    .then((res) => res.text())
    .then((data) => {
              document.getElementById("loginData").innerHTML = "Vous êtes connecté";
              console.log(data);
      if (data.status === "success") {
        if (data.userRole == 5 || data.userRole == 6) {
        }
      } else {
        loginData.innerHTML = data.message;
      }
    })
    .catch((error) => console.error("Error:", error));
}
