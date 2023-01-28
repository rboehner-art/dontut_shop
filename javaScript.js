function myFunction() {
    const myWindow = window.open("", "", "width=300,height=300");
    myWindow.opener.document.getElementById("demo").innerHTML = "HELLO!";
  }