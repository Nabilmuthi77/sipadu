// // Get the modal
// var modal = document.getElementById("myModal");

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById("myImg");
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// } 





// // Get all images with class "myImg"
// var images = document.getElementsByClassName("myImg");
// var modals = document.getElementsByClassName("modal");
// var modalImages = document.getElementsByClassName("modal-content");
// var captions = document.getElementsByClassName("caption");
// var spans = document.getElementsByClassName("close");

// // Loop through each image and attach the click event
// for (var i = 0; i < images.length; i++) {
//   images[i].addEventListener("click", function () {
//     var index = Array.prototype.indexOf.call(images, this);
//     modals[index].style.display = "block";
//     modalImages[index].src = this.src;
//     captions[index].innerHTML = this.alt;
//   });
// }

// // Loop through each modal's close button and attach the click event
// for (var i = 0; i < spans.length; i++) {
//   spans[i].addEventListener("click", function () {
//     var index = Array.prototype.indexOf.call(spans, this);
//     modals[index].style.display = "none";
//   });
// }

// // Close the modal when clicking anywhere outside the modal content
// window.onclick = function (event) {
//   for (var i = 0; i < modals.length; i++) {
//     if (event.target == modals[i]) {
//       modals[i].style.display = "none";
//     }
//   }
// };




// Get all images with class "myImg"
var images = document.getElementsByClassName("myImg");
var modals = document.getElementsByClassName("modal");
var modalImages = document.getElementsByClassName("modal-content");
var captions = document.getElementsByClassName("caption");
var spans = document.getElementsByClassName("close");

// Loop through each image and attach the click event
for (var i = 0; i < images.length; i++) {
  images[i].addEventListener("click", function () {
    var index = Array.prototype.indexOf.call(images, this);
    modals[index].style.display = "block";
    modalImages[index].src = this.src;
    captions[index].innerHTML = this.alt;
  });
}

// Loop through each modal's close button and attach the click event
for (var i = 0; i < spans.length; i++) {
  spans[i].addEventListener("click", function () {
    var index = Array.prototype.indexOf.call(spans, this);
    modals[index].style.display = "none";
  });
}

// Close the modal when clicking anywhere outside the modal content
window.onclick = function (event) {
  for (var i = 0; i < modals.length; i++) {
    if (event.target == modals[i]) {
      modals[i].style.display = "none";
    }
  }
};
