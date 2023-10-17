// Get all images with class "myImg"
var images = document.getElementsByClassName("myImg");
var modals = document.getElementsByClassName("modal");
var modalImages = document.getElementsByClassName("modal-content");
var spans = document.getElementsByClassName("close");

// Loop through each image and attach the click event
for (var i = 0; i < images.length; i++) {
  images[i].addEventListener("click", function () {
    var index = Array.prototype.indexOf.call(images, this);
    modals[index].style.display = "block";
    modalImages[index].src = this.src;
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
