<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức - BaloVuiVe</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery-3.7.1.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="container-fluid">
        <!-- promo_banner -->
        <div class="promo_banner col-12 d-flex align-items-center justify-content-center promo_height overflow-hidden">
            <p class="promo_content m-0 fade show">Ưu đãi đặc biệt - Giảm giá 20% tất cả sản phẩm!</p>
            <p class="promo_content m-0 fade d-none">Mua ngay để nhận quà tặng hấp dẫn!</p>
            <p class="promo_content m-0 fade d-none">Freeship toàn quốc cho đơn hàng từ 500K!</p>
            <p class="promo_content m-0 fade d-none">Đăng ký thành viên để nhận nhiều ưu đãi!</p>
        </div>
        <!-- header -->
        <header class="row sticky-top">
            <!-- navigation -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="Trang_Chu.php"><img src="{{ asset('image/logo.png') }}" alt="logo" width="90px"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 fw-semibold">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Trang_Chu.php">TRANG CHỦ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="San_Pham.php">SẢN PHẨM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Lien_he.php">LIÊN HỆ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Tin_Tuc.php">TIN TỨC</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success search-btn" type="submit">Search</button>
                        </form>
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="Gio_Hang.php" class="icon mx-2 fs-2" id="shopping_cart"><i
                                class="fa-solid fa-cart-shopping position-relative">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-flex align-items-center justify-content-center">34</span>
                            </i></a>
                        <a href="Dang_Nhap.php" class="icon mx-2 fs-2" id="login"><i class="fa-solid fa-user"></i></a>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <!-- bảng thông tin liên hệ -->

            <div class="container bg-light my-5 p-4" id="T-contact-info">
                <h2 class="text-center">Thông Tin Liên Hệ</h2>
                <p class="fw-semibold">Địa Chỉ: 123 Đường Nguyễn Văn Cừ, Quận Ninh Kiều, TP.Cần Thơ</p>
                <p class="fw-semibold">Điện thoại: 0123-456-789</p>
                <p class="fw-semibold">Email: BaloVuiVe@gmail.com</p>
                <p class="fw-semibold">Giờ Làm Việc: 8:00 - 21:00 ( Thứ 2 - Chủ Nhật )</p>
            </div>
            <!-- bảng thông tin liên hệ -->


            <!-- form gửi ý kiến cho cửa hàng -->

            @if(session('success'))
             <div class="container mt-3">
             <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
             </div>
@endif
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="container bg-light my-5 p-4" id="T-contact-form">
                    <h2 class="text-center">Gửi Ý Kiến Cho Cửa Hàng</h2>
                   <div class="mb-3">
                    <label class="form-label fw-semibold">Họ Và Tên</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Tên của bạn" value="{{ old('fullname') }}">
                    @error('fullname')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div id="error-fullname" class="text-danger"></div>
                    </div>

                    <div class="mb-3">
                    <label class="form-label fw-semibold">Địa Chỉ Email</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div id="error-email" class="text-danger"></div>
                    </div>

                    <div class="mb-3">
                    <label class="form-label fw-semibold">Nội Dung Góp Ý</label>
                    <textarea class="form-control" name="feedback" rows="3" placeholder="Tôi Yêu Balo Vui Vẻ" ></textarea>
                    @error('feedback')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div id="error-feedback" class="text-danger"></div>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-dark btn-secondary btn-lg w-25">Gửi</button>
                    </div>
                </div>
            </form>
            <!-- form gửi ý kiến cho cửa hàng -->


            <!-- bản đồ tới cửa hàng -->

            <div class="container my-5 ">
                <h2 class="text-center">Hãy Đến Với Cửa Hàng Balo TDLH</h2>
                <iframe class="w-100" height="450px" allowfullscreen="" loading="lazy"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8992082216396!2d105.76514301076925!3d10.02517579004012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a089118f148cf3%3A0x182d22b07354fd88!2sYaMe.vn!5e0!3m2!1svi!2s!4v1741065963139!5m2!1svi!2s">
                </iframe>

            </div>
            <!-- bản đồ tới cửa hàng -->

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
                <img src="./image/logo_bo_cong_thuong.png" alt="lỗi hình ảnh" height="60px">
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