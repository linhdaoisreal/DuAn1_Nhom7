
//Drop down tài khoản
// Lấy tham chiếu đến nút dropdown và menu dropdown
const userDropdownMenu = document.getElementById("userDropdownMenu");
const userDropdownButton = document.getElementById("userDropdownButton");
// Bắt sự kiện click vào nút dropdown
userDropdownButton.addEventListener('click', function() {
  // Kiểm tra trạng thái hiện tại của menu dropdown
  const isMenuVisible = userDropdownMenu.classList.contains('hidden');

  // Nếu menu đang ẩn, hiển thị nó. Ngược lại, ẩn nó đi.
  if (isMenuVisible) {
    userDropdownMenu.classList.remove('hidden');
  } else {
    userDropdownMenu.classList.add('hidden');
  }
});

// Bắt sự kiện click bên ngoài menu dropdown để ẩn nó đi
document.addEventListener('click', function(event) {
  const isClickedInsideDropdown = userDropdownButton.contains(event.target) || userDropdownMenu.contains(event.target);

  if (!isClickedInsideDropdown) {
    userDropdownMenu.classList.add('hidden');
  }
});