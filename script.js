// Lấy tham chiếu đến nút đăng nhập/đăng ký
var loginButton = document.getElementById("loginButton");

// Xử lý sự kiện click
loginButton.addEventListener("click", function () {
    // Thay đổi vị trí trang web tới hộp đăng nhập/đăng ký
    window.location.href = "login/login.html"; // Thay thế "dang-nhap-dang-ky.html" bằng đường dẫn tới hộp đăng nhập/đăng ký của bạn
});
