function toggleForm() {
    var loginPopup = document.getElementById("loginPopup");
    loginPopup.style.display = (loginPopup.style.display === "block") ? "none" : "block";
  }
  
  function toggleSignUp() {
    var signupContent = document.querySelector(".signup-content");
    signupContent.style.display = (signupContent.style.display === "block") ? "none" : "block";
  }