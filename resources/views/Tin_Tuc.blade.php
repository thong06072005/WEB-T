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
            <div class="container-fluid my-5">
                <div class="card text-center" id="T-card">
                    <div class="card-header fw-semibold fs-3">
                        Xin Chào
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Tin Tức - Balo TDLH</h5>
                        <p class="card-text fw-semibold">Tổng Hợp Thông Tin Về Các Sản Phẩm Mới Của Cửa Hàng Balo TDLH
                        </p>
                    </div>
                    <div class="card-footer text-body-secondary">
                        Balo TDLH
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- hàng 1 trang tin tức -->

                <div class="row">
                    <div class="col-md-6 col-12 d-flex justify-content-center">
                        <div class="card T-sp">
                            <img src="image/Blue Technology News Page Instagram Advertising Content Sharing.png"
                                class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Giảm Giá Sốc</h2>
                                <p class="card-text card-text2">Chương trình sale balo mùa hè cho học sinh và sinh viên
                                    ( Ưu đãi
                                    đặc biệt
                                    dành cho người có thẻ sinh viên).</p>
                                <a href="San_Pham.php" class="btn btn-dark">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-flex justify-content-center">
                        <div class="card T-sp">
                            <img src="image/Red and White Video Centric Coming Soon Instagram Post.png"
                                class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Sản Phẩm Mới</h2>
                                <p class="card-text card-text2">Thông tin về một sản phẩm balo thông minh có cổng sạc
                                    điện thoại và
                                    các
                                    chức năng khác sắp được bật mí.
                                </p>
                                <a href="Dang_Ky.php" class="btn btn-dark">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- hàng 1 trang tin tức -->



            <div class="container">
                <!-- hàng 2 trang tin tức -->

                <div class="row">
                    <div class="col-md-6 col-12 d-flex justify-content-center pt-4">
                        <div class="card T-sp">
                            <img src="image/Green Modern Did You Know Instagram Post.png" class="card-img-top w-100"
                                alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Chúng Tôi Cần Bạn</h2>
                                <p class="card-text card-text2">Balo Vui Vẻ chi nhánh ninh kiều đang cần tìm thêm 2 bạn
                                    nhân viên
                                    tư vấn,
                                    bán hàng.
                                </p>
                                <a href="https://yame.vn/" class="btn btn-dark">Liên Hệ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-flex justify-content-center pt-4">
                        <div class="card T-sp">
                            <img src="image/Green and Black Minimalist Business Strategy Analysis Checklist Instagram Post.png"
                                class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Chiến Lược Kinh Doanh</h2>
                                <p class="card-text card-text2">Balo Vui Vẻ là một star up kinh doanh của các bạn sinh
                                    viên với
                                    những chiến
                                    lược lâu dài, hiệu quả.
                                </p>
                                <a href="Lien_he.php" class="btn btn-dark">Thông Tin</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- hàng 2 trang tin tức -->

            <div class="container">
                <!-- hàng 3 trang tin tức -->

                <div class="row">
                    <div class="col-md-6 col-12 d-flex justify-content-center pt-4">
                        <div class="card T-sp">
                            <img src="image/Orange Blue Retro Important Announcement Instagram Post.jpg"
                                class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Cửa Hàng Mới</h2>
                                <p class="card-text card-text2">Khai trương cửa hàng Balo Vui Vẻ mới ở 1231 ALD, Cái
                                    Răng, Cần Thơ
                                    với
                                    nhiều ưu đãi hấp dẫn.
                                </p>
                                <a href="Dang_Ky.php" class="btn btn-dark">Ưu Đãi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-flex justify-content-center pt-4">
                        <div class="card T-sp">
                            <img src="image/Blue and White Modern Minimal Payment Card Information Instagram Post.png"
                                class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <h2 class="card-title">Cách Thanh Toán Mới</h2>
                                <p class="card-text card-text2">Các cửa hàng đã chấp nhận phương thức thanh toán Thẻ
                                    visa,
                                    nhiều ưu đãi hấp dẫn.
                                </p>
                                <a href="Gio_Hang.php" class="btn btn-dark">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- hàng 3 trang tin tức -->
            <div class="container mt-4">
                <div class="row">
                    @forelse($tintuc as $item)
                    <div class="col-md-6 col-12 d-flex justify-content-center pt-4">
                        <div class="card T-sp">
                            <img src="{{ asset('image/' . $item->hinh_anh) }}" class="card-img-top w-100" alt="Ảnh tin tức">
                            <div class="card-body">
                                <h2 class="card-title">{{ $item->tieu_de }}</h2>
                                <p class="card-text card-text2">{{ $item->noi_dung }}</p>
                                <a href="San_Pham.php" class="btn btn-dark">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center">Chưa có bài viết nào</p>
                    @endforelse
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
                <img src="./image/logo_bo_cong_thuong.png" alt="lỗi hình ảnh" height="60px">
                <div class="social">
                    <div class="title">Đồng hành cùng chúng tôi</div>
                    <div class="social_link">
                        <ul class="social_icon list-unstyled d-flex flex-row justify-content-around">
                            <li>
                                <a href="https://www.facebook.com/dathis.dathat"><i class="fa-brands fa-facebook fs-4"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/tuanthong.ma.7"><i class="fa-brands fa-instagram fs-4"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/nguyenloc.2384"><i class="fa-brands fa-tiktok fs-4"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/hung.tranvi.33"><i class="fa-brands fa-twitter fs-4"></i></a>
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