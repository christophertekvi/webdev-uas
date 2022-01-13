// function openTab(evt, cityName) {
//     var i, tabcontent, tablinks;
//     tabcontent = document.getElementsByClassName("tabcontent");
//     for (i = 0; i < tabcontent.length; i++) {
//       tabcontent[i].style.display = "none";
//     }
//     tablinks = document.getElementsByClassName("tablinks");
//     for (i = 0; i < tablinks.length; i++) {
//       tablinks[i].className = tablinks[i].className.replace(" active", "");
//     }
//     document.getElementById(cityName).style.display = "block";
//     evt.currentTarget.className += " active";
//   }

//   // Get the element with id="defaultOpen" and click on it
//   document.getElementById("defaultOpen").click();

function cancel() {
    document.getElementById("input-name").reset();
    document.getElementById("input-email").reset();
    document.getElementById("input-phone").reset();
    document.getElementById("address").reset();
  }

document.getElementById("image").onchange = function(e) {
    var file = document.getElementById("image").files[0];
    var reader = new FileReader();
    reader.onload = function() {
      console.log(reader.result);
      document.getElementById("display").src = reader.result;
      // image editing
      // ...
      var blob = window.dataURLtoBlob(reader.result);
      console.log(blob, new File([blob], "image.png", {
        type: "image/png"
      }));
    };
    reader.readAsDataURL(file);
  };


// const fr = new FileReader()
// const file = document.querySelector("input[name='img[]']").files[0]
// fr.readAsArrayBuffer(file)
// fr.onload = function() {
//     // you can keep blob or save blob to another position
//     const blob = new Blob([fr.result])

//     // url for download
//     const url = URL.createObjectURL(blob, {type: "image/png"});
//  }





  //declearing html elements

// const imgDiv = document.querySelector('.changeProfilePic');
// const img = document.querySelector('#photo');
// const file = document.querySelector('#file');
// const uploadBtn = document.querySelector('#uploadBtn');

// //if user hover on img div

// imgDiv.addEventListener('mouseenter', function(){
//     uploadBtn.style.display = "block";
// });

// //if we hover out from img div

// imgDiv.addEventListener('mouseleave', function(){
//     uploadBtn.style.display = "none";
// });

// //lets work for image showing functionality when we choose an image to upload

// //when we choose a foto to upload

// file.addEventListener('change', function(){
//     //this refers to file
//     const choosedFile = this.files[0];

//     if (choosedFile) {

//         const reader = new FileReader(); //FileReader is a predefined function of JS

//         reader.addEventListener('load', function(){
//             img.setAttribute('src', reader.result);
//         });

//         reader.readAsDataURL(choosedFile);
//     }
// });
