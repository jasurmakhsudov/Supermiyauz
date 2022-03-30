// Add event on document ready
$(document).ready(function() {

  // Add event on document scroll
  $(window).scroll(function() {

    // Cycle through each counter
    $(".count").each(function() {

      // Check if counter is visible
      if ($(this).isOnScreen()) {

        // Start counter
        startCounter($(this));

      } else {

        // Check if it has only just become non-visible
        if ($(this).hasClass("notVisible") == false) {

          // Stop animation
          $(this).stop();

          // Add nonVisible class
          $(this).addClass("notVisible");
          
          // This stops the user very briefly seeing the previous number before the counter restarts
          $(this).text("0");

        }

      }
    });
  });



// Check if an element is on screen
// Thanks to Adjit - taken from the url below
// Reference : https://stackoverflow.com/questions/23222131/jquery-fire-action-when-element-is-in-view#answer-23222523
$.fn.isOnScreen = function() {

  var win = $(window);

  var viewport = {
    top: win.scrollTop(),
    left: win.scrollLeft()
  };

  viewport.right = viewport.left + win.width();
  viewport.bottom = viewport.top + win.height();

  var bounds = this.offset();
  bounds.right = bounds.left + this.outerWidth();
  bounds.bottom = bounds.top + this.outerHeight();

  return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));


};


//Run counter, separate function so we can call it from multiple places
function startCounter(counterElement) {

  // Check if it has only just become visible on this scroll
  if (counterElement.hasClass("notVisible")) {

    // Remove notVisible class
    counterElement.removeClass("notVisible");

    // Run your counter animation
    counterElement.prop('Counter', 0).animate({
      Counter: counterElement.attr("counter-lim")
    }, {
      duration: 4000,
      easing: 'swing',
      step: function(now) {
        counterElement.text(Math.ceil(now).toLocaleString());
      }
    });
  }
}


// On page load check if counter is visible
$('.count').each(function() {

  // Add notVisible class to all counters
  // It is removed within startCounter()
  $(this).addClass("notVisible");

  // Check if element is visible on page load
  if ($(this).isOnScreen() === true) {

    // If visible, start counter
    startCounter($(this));

  }

});


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


var returnModal = document.getElementById("returnModal");
var copyrightModal = document.getElementById("copyrightModal");

// Get the button that opens the modal
var returnBtn = document.getElementById("returnBtn");
var copyrightBtn = document.getElementById("copyrightBtn");

// Get the <span> element that closes the modal
var spanReturn = document.getElementsByClassName("close")[0];
var spanCopyright = document.getElementsByClassName("close")[1];
// When the user clicks the button, open the modal 

returnBtn.onclick = function() {
  returnModal.style.display = "block";
}
              
copyrightBtn.onclick = function() {
  copyrightModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanReturn.onclick = function() {
  returnModal.style.display = "none";
}
spanCopyright.onclick = function() {
  copyrightModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == returnModal) {
    returnModal.style.display = "none";
  }
  else if(event.target == copyrightModal){
    copyrightModal.style.display = "none";
  }
}



});


//footer
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}



(function() {
  var v = document.getElementsByClassName("youtube-player");
  for (var n = 0; n < v.length; n++) {
      v[n].onclick = function() {
          var iframe = document.createElement("iframe");
          iframe.setAttribute("src", "//www.youtube.com/embed/" + this.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&rel=" + this.dataset.related + "&controls=" + this.dataset.control + "&showinfo=" + this.dataset.info);
          iframe.setAttribute("frameborder", "0");
          iframe.setAttribute("id", "youtube-iframe");
          iframe.setAttribute("style", "width: 100%; height: 100%; position: absolute; top: 0; left: 0;");
          if (this.dataset.fullscreen == 1) {
              iframe.setAttribute("allowfullscreen", "");
          }
          while (this.firstChild) {
              this.removeChild(this.firstChild);
          }
          this.appendChild(iframe);
      };
  }
})(); 




function isPhone(e) {
  e = (e) ? e : window.event;
  var charCode = (e.which) ? e.which : e.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
  }
  return true;
}