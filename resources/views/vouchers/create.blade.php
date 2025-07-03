<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Mã Giảm Giá</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="container-fluid">
        <main class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="mb-4 text-center text-primary">Tạo Mã Giảm Giá</h3>
                        <form method="POST" action="{{ route('vouchers.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="ma_giam_gia" class="form-label fw-semibold">Mã Giảm Giá</label>
                                <input type="text" class="form-control" id="ma_giam_gia" name="ma_giam_gia" placeholder="V123">
                            </div>

                            <div class="mb-3">
                                <label for="phuong_thuc" class="form-label fw-semibold">Phương Thức Giảm Giá</label>
                                <input type="text" class="form-control" id="phuong_thuc" name="phuong_thuc" placeholder="Giảm Trực Tiếp Vào Hóa Đơn">
                            </div>

                            <div class="mb-3">
                                <label for="gia_tri" class="form-label fw-semibold">Giá Trị Giảm</label>
                                <input type="number" class="form-control" id="gia_tri" name="gia_tri" placeholder="30">
                            </div>

                            <div class="mb-3">
                                <label for="ngay_hieu_luc" class="form-label fw-semibold">Ngày Hiệu Lực</label>
                                <input type="date" class="form-control" id="ngay_hieu_luc" name="ngay_hieu_luc">
                            </div>

                            <div class="mb-3">
                                <label for="ngay_het_han" class="form-label fw-semibold">Ngày Hết Hạn</label>
                                <input type="date" class="form-control" id="ngay_het_han" name="ngay_het_han">
                            </div>

                            <div class="mb-3">
                                <label for="bac_thanh_vien_ap_dung" class="form-label fw-semibold">Bậc Thành Viên Áp Dụng</label>
                                <input type="number" class="form-control" id="bac_thanh_vien_ap_dung" name="bac_thanh_vien_ap_dung">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4">Xác Nhận</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-secondary px-4">Hủy</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>





        <footer class="row bg-dark text-light pt-3">
            <!-- footer_main_menu -->
            <div class="footer_main_menu col-12">
                <div class="row">
                    <ul class="support list-unstyled col-sm-12 col-md-4 text-center">
                        <li>
                            <h4>TRỢ GIÚP</h4>
                        </li>
                        <li><a href="#" class="text-decoration-none text-reset">Chính sách bảo hành</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Chính sách bảo mật</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Chính sách đổi trả</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Chính sách vận chuyển, giao hàng</a>
                        </li>
                        <li><a href="#" class="text-decoration-none text-reset">Điều khoản sử dụng</a></li>
                    </ul>
                    <ul class="company_info list-unstyled col-sm-12 col-md-4 text-center">
                        <li>
                            <h4>VỀ CHÚNG TÔI</h4>
                        </li>
                        <li><a href="#" class="text-decoration-none text-reset">Hệ thống cửa hàng</a></li>
                        <li><a href="Gioi_Thieu.php" class="text-decoration-none text-reset">Giới thiệu</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Tuyển dụng</a></li>
                    </ul>
                    <ul class="payment list-unstyled col-sm-12 col-md-4 text-center">
                        <li>
                            <h4>THANH TOÁN</h4>
                        </li>
                        <li><a href="#" class="text-decoration-none text-reset">Visa / Mastercard</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Quét mã QR</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Mua trước trả sau</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Ví điện tử</a></li>
                        <li><a href="#" class="text-decoration-none text-reset">Thanh toán khi nhận hàng</a></li>
                    </ul>
                </div>
            </div>
            <!-- social -->
            <div class="social col-12 d-flex justify-content-around mt-3">
                <img src={{ asset("./image/logo_bo_cong_thuong.png") }} alt="lỗi hình ảnh" height="60px">
                <div class="social">
                    <div class="title">Đồng hành cùng chúng tôi</div>
                    <div class="social_link">
                        <ul class="social_icon list-unstyled d-flex flex-row justify-content-around">
                            <li>
                                <a href="https://www.facebook.com/dathis.dathat"><i
                                        class="fa-brands fa-facebook fs-4"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/tuanthong.ma.7"><i
                                        class="fa-brands fa-instagram fs-4"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/nguyenloc.2384"><i
                                        class="fa-brands fa-tiktok fs-4"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/hung.tranvi.33"><i
                                        class="fa-brands fa-twitter fs-4"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- copy_right -->
            <div class="copy_right col-12 d-flex flex-column mt-3">
                <p class="text-center mb-1">© 2025 - CÔNG TY TNHH BALO VUI VẺ</p>
                <p class="text-center mb-1">Giấy CNĐKDN: 0312345678 – Ngày cấp: 15/08/2015 - Cơ quan cấp: Phòng Đăng Ký
                    Kinh Doanh – Sở Kế Hoạch
                    và Đầu Tư TP.HCM</p>
                <p class="text-center mb-1">Địa chỉ đăng ký kinh doanh: 123 Đường Nguyễn Văn A, Phường 5, Quận 3, TP.HCM
                    - Điện thoại: (028) 1234
                    5678 - Mua hàng: (028) 8765 4321 - Email: cskh@balovuive.vn</p>
            </div>
        </footer>
    </div>
</body>

<script src="{{ asset('js/main.js') }}"></script>


</html>