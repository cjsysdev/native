const logLinkId = document.getElementById("loginLink");
const regLinkId = document.getElementById("registerLink");

const logFormId = document.getElementById("loginForm");
const regFormId = document.getElementById("registerForm");

function toggleForms(event, showLoginForm) {
  if (showLoginForm) {
    logFormId.hidden = false;
    regFormId.hidden = true;
    logLinkId.style.color = "aqua";
    regLinkId.style.color = "aliceblue";
  } else {
    logFormId.hidden = true;
    regFormId.hidden = false;
    logLinkId.style.color = "aliceblue";
    regLinkId.style.color = "aqua";
  }
}

logLinkId.addEventListener("click", (event) => {
  toggleForms(event, true);
});

regLinkId.addEventListener("click", (event) => {
  toggleForms(event, false);
});

function formdatas(elementId) {
  const formData = new FormData(elementId);
  const dataObj = {};

  formData.forEach((value, key) => {
    dataObj[key] = value;
  });

  return dataObj;
}

logFormId.addEventListener("submit", (event) => {
  event.preventDefault();
  const logData = formdatas(logFormId);
  console.log(logData);
});

regFormId.addEventListener("submit", (event) => {
  event.preventDefault();
  const regData = formdatas(regFormId);

  if (regData["password"] == "") {
    alert("Password Empty");
  } else {
    if (regData["password"] !== regData["confirm_password"]) {
      alert("Password doesn't match!");
    } else {
      sendDataToServer(regData);
    }
  }
});

function sendDataToServer(data) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "user.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };

  xhr.send(new URLSearchParams(data));
}
