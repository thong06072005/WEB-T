<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê doanh thu - BaloVuiVe</title>
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

            <div class="container my-5">
                <h2 class="mb-4">Thống kê doanh thu ( {{ ucfirst($loai) }} )</h2>

                <form method="GET" class="mb-3">
                    <label for="loai">Chọn loại thống kê:</label>
                    <select name="loai" id="loai" onchange="this.form.submit()" class="form-select w-auto d-inline-block ms-2">
                        <option value="ngay" {{ $loai == 'ngay' ? 'selected' : '' }}>Ngày</option>
                        <option value="tuan" {{ $loai == 'tuan' ? 'selected' : '' }}>Tuần</option>
                        <option value="thang" {{ $loai == 'thang' ? 'selected' : '' }}>Tháng</option>
                        <option value="nam" {{ $loai == 'nam' ? 'selected' : '' }}>Năm</option>
                    </select>

                    {{-- Ngày --}}
                    @if($loai == 'ngay')
                    <label for="ngay" class="ms-3">Ngày:</label>
                    <input type="date" name="ngay" id="ngay" value="{{ $ngay }}" onchange="this.form.submit()" class="form-control d-inline-block w-auto">
                    @endif

                    {{-- Tuần --}}
                    @if($loai == 'tuan')
                    <label for="from_date" class="ms-3">Từ ngày:</label>
                    <input type="date" name="from_date" id="from_date" value="{{ request('from_date', \Carbon\Carbon::now()->startOfWeek()->toDateString()) }}"
                        onchange="this.form.submit()" class="form-control d-inline-block w-auto">

                    <label for="to_date" class="ms-3">Đến ngày:</label>
                    <input type="date" name="to_date" id="to_date" value="{{ request('to_date', \Carbon\Carbon::now()->endOfWeek()->toDateString()) }}"
                        onchange="this.form.submit()" class="form-control d-inline-block w-auto">
                    @endif

                    {{-- Tháng --}}
                    @if($loai == 'thang')
                    <label for="thang" class="ms-3">Tháng:</label>
                    <select name="thang" id="thang" onchange="this.form.submit()" class="form-select w-auto d-inline-block">
                        @for($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}" {{ $thang == $i ? 'selected' : '' }}>Tháng {{ $i }}</option>
                            @endfor
                    </select>
                    <label for="nam" class="ms-2">Năm:</label>
                    <select name="nam" id="nam" onchange="this.form.submit()" class="form-select w-auto d-inline-block">
                        @for($i = now()->year; $i >= now()->year - 5; $i--)
                        <option value="{{ $i }}" {{ $nam == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @endif

                    {{-- Năm --}}
                    @if($loai == 'nam')
                    <label for="nam" class="ms-3">Năm:</label>
                    <select name="nam" id="nam" onchange="this.form.submit()" class="form-select w-auto d-inline-block">
                        @for($i = now()->year; $i >= now()->year - 5; $i--)
                        <option value="{{ $i }}" {{ $nam == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    @endif
                </form>


                <div class="alert alert-success">
                    <strong>Tổng doanh thu:</strong> {{ number_format($tong_doanh_thu, 0, ',', '.') }} VNĐ
                </div>

                <h5>Doanh thu theo danh mục:</h5>
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Danh mục</th>
                            <th>Doanh thu (VNĐ)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doanh_thu_danh_muc as $item)
                        <tr>
                            <td>{{ $item->ten_danh_muc }}</td>
                            <td>{{ number_format($item->doanh_thu, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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