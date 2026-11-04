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
    <title>Thương hiệu - Cửa hàng nến thơm</title>
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

            <a href="index.php" class="hover:underline">
                Trang chủ
            </a>

            <a href="gioithieu.php" class="hover:underline">
                Giới thiệu
            </a>

            <a href="lienhe.php" class="hover:underline">
                Liên hệ
            </a>

            <a href="thuonghieu.php"
               class="font-bold underline underline-offset-4">
                Thương hiệu
            </a>

        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8 min-h-96">

        <!-- Tiêu đề -->
        <section class="bg-white rounded-2xl shadow-sm p-6 md:p-8 text-center">

            <p class="text-amber-700 font-semibold">
                Khám phá những thương hiệu nổi bật
            </p>

            <h1 class="text-2xl md:text-3xl font-bold mt-2">
                Thương hiệu nến thơm
            </h1>

            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Chúng tôi giới thiệu những thương hiệu nến thơm
                với hương thơm tinh tế, thiết kế đẹp mắt và chất lượng
                phù hợp cho không gian sống của bạn.
            </p>

        </section>

        <!-- Danh sách thương hiệu -->
        <section class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Thương hiệu 1 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden
                        hover:shadow-lg transition">

                <div class="h-40 bg-amber-100 flex items-center justify-center">
                    <span class="text-6xl">🕯️</span>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-amber-900">
                        Yankee Candle
                    </h2>

                    <p class="text-gray-600 text-sm mt-3">
                        Thương hiệu nến thơm nổi tiếng với nhiều
                        lựa chọn mùi hương, phù hợp cho phòng khách,
                        phòng ngủ và không gian thư giãn.
                    </p>

                    <p class="text-amber-700 font-semibold mt-4">
                        Hương thơm đa dạng
                    </p>
                </div>

            </div>

            <!-- Thương hiệu 2 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden
                        hover:shadow-lg transition">

                <div class="h-40 bg-orange-100 flex items-center justify-center">
                    <span class="text-6xl">✨</span>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-amber-900">
                        Bath & Body Works
                    </h2>

                    <p class="text-gray-600 text-sm mt-3">
                        Nổi bật với các dòng nến thơm có mùi hương
                        phong phú, mang đến cảm giác ấm áp và dễ chịu
                        cho không gian sống.
                    </p>

                    <p class="text-amber-700 font-semibold mt-4">
                        Phong cách hiện đại
                    </p>
                </div>

            </div>

            <!-- Thương hiệu 3 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden
                        hover:shadow-lg transition">

                <div class="h-40 bg-yellow-100 flex items-center justify-center">
                    <span class="text-6xl">🌿</span>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-amber-900">
                        Diptyque
                    </h2>

                    <p class="text-gray-600 text-sm mt-3">
                        Thương hiệu nến thơm cao cấp được biết đến
                        với thiết kế tinh tế và những mùi hương
                        mang phong cách nghệ thuật.
                    </p>

                    <p class="text-amber-700 font-semibold mt-4">
                        Phong cách sang trọng
                    </p>
                </div>

            </div>

            <!-- Thương hiệu 4 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden
                        hover:shadow-lg transition">

                <div class="h-40 bg-rose-100 flex items-center justify-center">
                    <span class="text-6xl">🌸</span>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-amber-900">
                        Jo Malone London
                    </h2>

                    <p class="text-gray-600 text-sm mt-3">
                        Mang phong cách thanh lịch với các tổ hợp
                        hương thơm tinh tế, thích hợp làm quà tặng
                        và trang trí nhà cửa.
                    </p>

                    <p class="text-amber-700 font-semibold mt-4">
                        Thanh lịch và tinh tế
                    </p>
                </div>

            </div>

            <!-- Thương hiệu 5 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden
                        hover:shadow-lg transition">

                <div class="h-40 bg-green-100 flex items-center justify-center">
                    <span class="text-6xl">🍃</span>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-amber-900">
                        WoodWick
                    </h2>

                    <p class="text-gray-600 text-sm mt-3">
                        Được biết đến với dòng nến có bấc gỗ đặc trưng,
                        tạo điểm nhấn độc đáo cho những phút giây
                        nghỉ ngơi tại nhà.
                    </p>

                    <p class="text-amber-700 font-semibold mt-4">
                        Ấm áp và độc đáo
                    </p>
                </div>

            </div>

            <!-- Thương hiệu 6 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden
                        hover:shadow-lg transition">

                <div class="h-40 bg-purple-100 flex items-center justify-center">
                    <span class="text-6xl">🎁</span>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-amber-900">
                        Thương hiệu Việt
                    </h2>

                    <p class="text-gray-600 text-sm mt-3">
                        Khám phá các sản phẩm nến thơm trong nước
                        với nhiều phong cách thiết kế, mùi hương
                        và lựa chọn quà tặng.
                    </p>

                    <p class="text-amber-700 font-semibold mt-4">
                        Gần gũi và sáng tạo
                    </p>
                </div>

            </div>

        </section>

        <!-- Lời giới thiệu cuối trang -->
        <section class="mt-8 bg-amber-100 rounded-2xl p-6 md:p-8 text-center">

            <h2 class="text-xl font-bold text-amber-900">
                Tìm kiếm mùi hương dành riêng cho bạn
            </h2>

            <p class="text-gray-600 mt-3">
                Hãy liên hệ với chúng tôi để được tư vấn
                và lựa chọn sản phẩm phù hợp.
            </p>

            <a href="lienhe.php"
               class="inline-block mt-5 bg-amber-800 text-white
                      px-6 py-3 rounded-lg hover:bg-amber-900 transition">
                Liên hệ ngay
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
```