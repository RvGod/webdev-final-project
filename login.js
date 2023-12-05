function loginButton(){
  const userName = document.getElementById("username").value;
  const passWord = document.getElementById("password").value;

  if (userName == 'user' && passWord == 'pass') {
    // location.replace("http://127.0.0.1:5500/frontpage.html")
    location.replace("http://127.0.0.1:5500/webdev-project.html")
  } else {
    alert('ERROR');
  }
  }
