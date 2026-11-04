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
    <title>Cửa hàng nến thơm</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-amber-50 text-gray-800">

    <!-- Header -->
    <header class="bg-amber-900 text-white">
        <div class="max-w-6xl mx-auto px-4 py-5 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <a href="index.php" class="text-2xl font-bold">
                <?php echo $ten_cua_hang ?>
            </a>
            <div class="text-sm">
                Xin chào <?php 
                echo $ho_ten 
                ?>
            </div>
            <p class="text-sm">
    Hôm nay: <?php echo $ngay_hom_nay; ?>
</p>

        </div>
    </header>
 
    <!-- Navigation -->
    <nav class="bg-amber-800 text-white">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-wrap gap-5 text-sm">
            <a href="index.php" class="font-bold underline underline-offset-4">Trang chủ</a>
            <a href="gioithieu.php" class="hover:underline">Giới thiệu</a>
            <a href="lienhe.php" class="hover:underline">Liên hệ</a>
            <a href="thuonghieu.php" class="hover:underline">Thương hiệu</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8 min-h-96">

        <section class="bg-white rounded-2xl shadow-sm p-6 md:p-8">
            <p class="text-amber-700 font-semibold">
                Chào mừng đến với cửa hàng nến thơm
            </p>

            <h1 class="text-2xl md:text-3xl font-bold mt-2">
                Nến thơm cho không gian sống của bạn
            </h1>

            <p class="text-gray-600 mt-3">
                Khám phá những mùi hương mang đến cảm giác thư giãn, ấm áp và dễ chịu.
            </p>

            <div class="mt-6 bg-amber-50 rounded-xl p-4">
                <h2 class="font-semibold"><?php echo $ten_san_pham ?></h2>
                <p>Giá gốc: <?php echo $gia_goc ?> đ</p>
                <p class="text-red-600 font-bold"> Giá ưu đãi: <?php echo $gia_ban ?>  đ </p>
            </div>
        </section>

        <!-- Danh mục -->
        <section class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 lg:gap-6">

            <div class="bg-white rounded-xl p-6 shadow-sm text-center">
              <div class="text-4xl mb-3">🕯️</div>
              <h3 class="font-bold">Nến hũ</h3>
              <p class="text-sm text-gray-500 mt-2">Hương thơm nhẹ nhàng thư giãn</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm text-center">
              <div class="text-4xl mb-3">✨</div>
              <h3 class="font-bold">Nến trang trí</h3>
              <p class="text-sm text-gray-500 mt-2">Tô điểm không gian sống. </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm text-center">
              <div class="text-4xl mb-3">🎁</div>
              <h3 class="font-bold">Nến quà tặng</h3>
              <p class="text-sm text-gray-500 mt-2">Món quà ý nghĩa cho người thân</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-6 text-sm text-center">
            <p>Email: <?php echo $email_lien_he ?></p>
            <p>Địa chỉ: <?php echo $dia_chi ?></p>
            <p>Điện thoại: <?php echo $so_dien_thoai ?></p>
            <p class="mt-3 text-gray-400"> © 2026 - Cửa hàng nến thơm</p>
        </div>
    </footer>
</body>
</html>	
