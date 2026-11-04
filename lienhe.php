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
    <title>Liên hệ - Cửa hàng nến thơm</title>
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

            <a href="lienhe.php"
               class="font-bold underline underline-offset-4">
                Liên hệ
            </a>

            <a href="thuonghieu.php" class="hover:underline">
                Thương hiệu
            </a>

        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">

        <!-- Tiêu đề -->
        <section class="bg-white rounded-2xl shadow-sm p-6 md:p-10">

            <p class="text-amber-700 font-semibold">
                Chúng tôi luôn sẵn sàng hỗ trợ
            </p>

            <h1 class="text-3xl md:text-4xl font-bold mt-3">
                Liên hệ với chúng tôi
            </h1>

            <p class="text-gray-600 mt-4 leading-7">
                Bạn có thắc mắc về sản phẩm nến thơm, giá cả hoặc đơn hàng?
                Hãy liên hệ với chúng tôi qua các thông tin bên dưới.
                Chúng tôi rất vui được hỗ trợ bạn.
            </p>

        </section>

        <!-- Thông tin liên hệ -->
        <section class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-5">

            <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
                <div class="text-4xl mb-4">📧</div>

                <h2 class="font-bold text-lg text-amber-900">
                    Email
                </h2>

                <p class="text-gray-600 text-sm mt-3">
                    <?php echo $email_lien_he; ?>
                </p>

                <p class="text-gray-500 text-sm mt-2">
                    Gửi câu hỏi hoặc yêu cầu tư vấn.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
                <div class="text-4xl mb-4">📞</div>

                <h2 class="font-bold text-lg text-amber-900">
                    Điện thoại
                </h2>

                <p class="text-gray-600 text-sm mt-3">
                    <?php echo $so_dien_thoai; ?>
                </p>

                <p class="text-gray-500 text-sm mt-2">
                    Liên hệ để được hỗ trợ trực tiếp.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm p-6 text-center">
                <div class="text-4xl mb-4">📍</div>

                <h2 class="font-bold text-lg text-amber-900">
                    Địa chỉ
                </h2>

                <p class="text-gray-600 text-sm mt-3">
                    <?php echo $dia_chi; ?>
                </p>

                <p class="text-gray-500 text-sm mt-2">
                    Thông tin địa chỉ cửa hàng.
                </p>
            </div>

        </section>

        <!-- Form liên hệ -->
        <section class="mt-6 bg-white rounded-2xl shadow-sm p-6 md:p-8">

            <div class="mb-6">
                <p class="text-amber-700 font-semibold">
                    Gửi lời nhắn cho chúng tôi
                </p>

                <h2 class="text-2xl font-bold mt-2">
                    Bạn cần hỗ trợ?
                </h2>

                <p class="text-gray-600 mt-2">
                    Điền thông tin bên dưới để gửi yêu cầu liên hệ.
                </p>
            </div>

            <form action="" method="POST" class="space-y-5">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    <div>
                        <label for="hoten"
                               class="block text-sm font-semibold mb-2">
                            Họ và tên
                        </label>

                        <input
                            type="text"
                            id="hoten"
                            name="hoten"
                            placeholder="Nhập họ và tên của bạn"
                            required
                            class="w-full border border-amber-200 rounded-xl
                                   px-4 py-3 outline-none
                                   focus:border-amber-700
                                   focus:ring-2 focus:ring-amber-100"
                        >
                    </div>

                    <div>
                        <label for="email"
                               class="block text-sm font-semibold mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="example@email.com"
                            required
                            class="w-full border border-amber-200 rounded-xl
                                   px-4 py-3 outline-none
                                   focus:border-amber-700
                                   focus:ring-2 focus:ring-amber-100"
                        >
                    </div>

                </div>

                <div>
                    <label for="chude"
                           class="block text-sm font-semibold mb-2">
                        Chủ đề
                    </label>

                    <select
                        id="chude"
                        name="chude"
                        required
                        class="w-full border border-amber-200 rounded-xl
                               px-4 py-3 bg-white outline-none
                               focus:border-amber-700
                               focus:ring-2 focus:ring-amber-100"
                    >
                        <option value="">-- Chọn chủ đề --</option>
                        <option value="Tu van san pham">Tư vấn sản phẩm</option>
                        <option value="Hoi ve don hang">Hỏi về đơn hàng</option>
                        <option value="Gop y">Góp ý</option>
                        <option value="Khac">Khác</option>
                    </select>
                </div>

                <div>
                    <label for="noidung"
                           class="block text-sm font-semibold mb-2">
                        Nội dung liên hệ
                    </label>

                    <textarea
                        id="noidung"
                        name="noidung"
                        rows="5"
                        placeholder="Nhập nội dung bạn muốn gửi..."
                        required
                        class="w-full border border-amber-200 rounded-xl
                               px-4 py-3 outline-none resize-y
                               focus:border-amber-700
                               focus:ring-2 focus:ring-amber-100"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    name="submit"
                    class="bg-amber-900 text-white font-semibold
                           px-6 py-3 rounded-xl
                           hover:bg-amber-800 transition
                           focus:ring-2 focus:ring-amber-300"
                >
                    Gửi liên hệ
                </button>

            </form>

        </section>

        <!-- Lời nhắn cuối trang -->
        <section class="mt-6 bg-amber-900 text-white rounded-2xl p-8 text-center">

            <div class="text-4xl mb-4">🕯️</div>

            <h2 class="text-2xl font-bold">
                Cảm ơn bạn đã quan tâm!
            </h2>

            <p class="text-amber-100 mt-3 leading-7">
                Sự tin tưởng của bạn là động lực để chúng tôi mang đến
                những sản phẩm nến thơm và trải nghiệm mua sắm tốt hơn.
            </p>

            <a href="index.php"
               class="inline-block mt-6 bg-white text-amber-900
                      font-semibold px-6 py-3 rounded-xl
                      hover:bg-amber-100 transition">
                Quay lại trang chủ
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
