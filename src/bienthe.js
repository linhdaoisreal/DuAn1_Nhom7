//Xử lý sự kiện thay đổi giá của biến thể

function bienThe(selectedOption) {
    var muc_tang = parseFloat(selectedOption.value);
    var gia_goc = parseFloat(document.getElementById("gia_goc").value);
    if (!isNaN(muc_tang) && !isNaN(gia_goc)) {
      document.getElementById("gia").innerHTML = gia_goc + muc_tang;
    }
  }