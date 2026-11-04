<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$ten_cua_hang = "An Nhiên Candle";
$ho_ten = "Nguyễn Văn An";
$ngay_hom_nay = date("d/m/Y");

$email_lien_he = "contact@annhien.vn";
$dia_chi = "TP. Hồ Chí Minh";
$so_dien_thoai = "0901 234 567";

$ten_san_pham = "Yankee Candle Vanilla Cupcake";
$gia_goc = 890000;
$giam_gia = 10;

$tien_giam = $gia_goc * $giam_gia / 100;
$gia_ban = $gia_goc - $tien_giam;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu - Cửa hàng nến thơm</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-amber-50 text-gray-800">

    <!-- Header -->
    <header class="bg-amber-900 text-white">
        <div class="max-w-6xl mx-auto px-4 py-5 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <a href="index.php" class="text-2xl font-bold">
                <?php echo $ten_cua_hang; ?>
            </a>

            <div class="text-sm">
                Xin chào <?php echo $ho_ten; ?>
            </div>

            <p class="text-sm">
                Hôm nay: <?php echo $ngay_hom_nay; ?>
            </p>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-amber-800 text-white">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-wrap gap-5 text-sm">
            <a href="index.php" class="hover:underline">Trang chủ</a>

            <a href="gioithieu.php"
               class="font-bold underline underline-offset-4">
                Giới thiệu
            </a>

            <a href="lienhe.php" class="hover:underline">Liên hệ</a>
            <a href="thuonghieu.php" class="hover:underline">Thương hiệu</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">

        <!-- Tiêu đề giới thiệu -->
        <section class="bg-white rounded-2xl shadow-sm p-6 md:p-10">
            <p class="text-amber-700 font-semibold">
                Câu chuyện của chúng tôi
            </p>

            <h1 class="text-3xl md:text-4xl font-bold mt-3">
                Về cửa hàng nến thơm
            </h1>

            <p class="text-gray-600 mt-4 leading-7">
                Chào mừng bạn đến với <?php echo $ten_cua_hang; ?>!
                Chúng tôi mong muốn mang đến những sản phẩm nến thơm
                chất lượng, giúp bạn tận hưởng những khoảnh khắc thư giãn
                và tạo nên không gian sống ấm áp, dễ chịu.
            </p>

            <p class="text-gray-600 mt-3 leading-7">
                Với sự kết hợp giữa hương thơm tinh tế và thiết kế đẹp mắt,
                mỗi sản phẩm đều có thể trở thành một điểm nhấn cho căn phòng
                hoặc một món quà ý nghĩa dành tặng những người thân yêu.
            </p>
        </section>

        <!-- Sứ mệnh và giá trị -->
        <section class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-white rounded-2xl shadow-sm p-6 md:p-8">
                <div class="text-4xl mb-4">🕯️</div>

                <h2 class="text-xl font-bold text-amber-900">
                    Sứ mệnh của chúng tôi
                </h2>

                <p class="text-gray-600 mt-3 leading-7">
                    Mang hương thơm đến gần hơn với cuộc sống hằng ngày,
                    giúp mỗi người có thêm những phút giây nghỉ ngơi,
                    thư giãn sau những giờ học tập và làm việc.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 md:p-8">
                <div class="text-4xl mb-4">🤎</div>

                <h2 class="text-xl font-bold text-amber-900">
                    Giá trị của chúng tôi
                </h2>

                <p class="text-gray-600 mt-3 leading-7">
                    Chúng tôi hướng đến chất lượng sản phẩm, sự tận tâm
                    trong phục vụ và trải nghiệm mua sắm thân thiện,
                    để khách hàng có thể lựa chọn sản phẩm phù hợp
                    với sở thích và nhu cầu của mình.
                </p>
            </div>

        </section>

        <!-- Danh mục sản phẩm -->
        <section class="mt-6 bg-white rounded-2xl shadow-sm p-6 md:p-8">

            <div class="text-center mb-8">
                <p class="text-amber-700 font-semibold">
                    Khám phá bộ sưu tập
                </p>

                <h2 class="text-2xl md:text-3xl font-bold mt-2">
                    Những sản phẩm dành cho bạn
                </h2>

                <p class="text-gray-600 mt-3">
                    Tìm kiếm hương thơm phù hợp với phong cách sống của bạn.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">

                <div class="bg-amber-50 rounded-xl p-6 text-center">
                    <div class="text-4xl mb-3">🕯️</div>

                    <h3 class="font-bold text-lg">
                        Nến hũ
                    </h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Hương thơm nhẹ nhàng cho những phút giây thư giãn.
                    </p>
                </div>

                <div class="bg-amber-50 rounded-xl p-6 text-center">
                    <div class="text-4xl mb-3">✨</div>

                    <h3 class="font-bold text-lg">
                        Nến trang trí
                    </h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Tạo điểm nhấn tinh tế cho không gian sống.
                    </p>
                </div>

                <div class="bg-amber-50 rounded-xl p-6 text-center">
                    <div class="text-4xl mb-3">🎁</div>

                    <h3 class="font-bold text-lg">
                        Nến quà tặng
                    </h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Gửi trao yêu thương qua những món quà ý nghĩa.
                    </p>
                </div>

            </div>
        </section>

        <!-- Lời kết -->
        <section class="mt-6 bg-amber-900 text-white rounded-2xl p-8 md:p-10 text-center">

            <h2 class="text-2xl md:text-3xl font-bold">
                Nến cao cấp 
            </h2>

            <p class="text-amber-100 mt-4 leading-7 max-w-2xl mx-auto">
                Cảm ơn bạn đã ghé thăm cửa hàng.
                Hy vọng bạn sẽ tìm được mùi hương yêu thích
                để mỗi ngày đều trở nên ấm áp và đặc biệt hơn.
            </p>

            <a href="lienhe.php"
               class="inline-block mt-6 bg-white text-amber-900
                      font-semibold px-6 py-3 rounded-xl
                      hover:bg-amber-100 transition">
                Liên hệ với chúng tôi
            </a>

        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-6 text-sm text-center">
            <p>Email: <?php echo $email_lien_he; ?></p>
            <p>Địa chỉ: <?php echo $dia_chi; ?></p>
            <p>Điện thoại: <?php echo $so_dien_thoai; ?></p>

            <p class="mt-3 text-gray-400">
                © 2026 - Cửa hàng nến thơm
            </p>
        </div>
    </footer>

</body>
</html>