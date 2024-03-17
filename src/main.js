//Menu
const menu = document.querySelector("#menu")
const menuButton = document.querySelector("#menu-button")

menuButton.addEventListener("click",()=> {
    menu.classList.toggle("invisible")
})

//Drop down menu

// Lấy tham chiếu đến nút dropdown và menu dropdown
const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Bắt sự kiện click vào nút dropdown
dropdownButton.addEventListener('click', function() {
  // Kiểm tra trạng thái hiện tại của menu dropdown
  const isMenuVisible = dropdownMenu.classList.contains('hidden');

  // Nếu menu đang ẩn, hiển thị nó. Ngược lại, ẩn nó đi.
  if (isMenuVisible) {
    dropdownMenu.classList.remove('hidden');
  } else {
    dropdownMenu.classList.add('hidden');
  }
});

// Bắt sự kiện click bên ngoài menu dropdown để ẩn nó đi
document.addEventListener('click', function(event) {
  const isClickedInsideDropdown = dropdownButton.contains(event.target) || dropdownMenu.contains(event.target);

  if (!isClickedInsideDropdown) {
    dropdownMenu.classList.add('hidden');
  }
});

// Slide Show
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}