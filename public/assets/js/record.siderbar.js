// document.addEventListener("DOMContentLoaded", function() {
//     var dropdownTogglers = document.querySelectorAll('.sidebar-link.has-arrow');
//     for (var i = 0; i < dropdownTogglers.length; i++) {
//         dropdownTogglers[i].addEventListener('click', function() {
//             this.parentElement.classList.toggle('active');
//             var dropdownMenu = this.nextElementSibling;
//             if (dropdownMenu.style.display === "block") {
//                 dropdownMenu.style.display = "none";
//             } else {
//                 dropdownMenu.style.display = "block";
//             }
//         });
//     }
// });


// Ambil elemen sidebar dan dropdown
var recordSidebar = document.getElementById('recordSidebar');
var recordDropdown = document.getElementById('recordDropdown');

// Tambahkan event listener untuk klik pada sidebar
recordSidebar.addEventListener('click', function(event) {
  // Cegah aksi default dari link
  event.preventDefault();

  // Toggle tampilan dropdown
  if (recordDropdown.style.display === 'block') {
    recordDropdown.style.display = 'none';
  } else {
    recordDropdown.style.display = 'block';
  }
});

document.getElementById('recordSidebar').addEventListener('click', function() {
    var dropdown = document.getElementById('recordDropdown');
    dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
});
