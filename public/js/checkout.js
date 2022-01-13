function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){

      text1.style.display = "block";
      text2.style.display = "block";
      //text2.replace(text2, "0")
    } else {

      text1.style.display = "none";
      //text2.replace(text2, "0")
      text2.style.display = "none";
    }
  }
