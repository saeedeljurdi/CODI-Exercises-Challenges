function myFunction() {
    var person = prompt("Please enter your name", "Your Name");
    if (person != null) {
      document.getElementById("demo").innerHTML =
      "Hello " + person ;
    }
  }