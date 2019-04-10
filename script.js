//-----------------------------------------------------//
//-------------------Contact Modal---------------------//
//-----------------------------------------------------//
// Get the modal
var contactModal = document.getElementById('myModal');

// Get the button that opens the modal
var iconBtn = document.getElementById("showModal");
var summaryBtn = document.getElementById("showModal2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
iconBtn.onclick = function() {
  contactModal.style.display = "block";
}

summaryBtn.onclick = function() {
  contactModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  contactModal.style.display = "none";
  // Swal.fire(
  //   'Message sent!',
  //   'Cheers, I\'ll get back to you ASAP 👍',
  //   'success'
  // )
  Swal.fire(
    'Message not sent!',
    'Your message wasn\'t sent for some reason 😓. Please re-try, or email me directly at andrew.auxilio@gmail.com',
    'error'
  )
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == contactModal) {
    contactModal.style.display = "none";
  }
}


function scrollDown() {
  var elmnt = document.getElementById("summary");
  elmnt.scrollIntoView({ block: 'start',  behavior: 'smooth' });
}