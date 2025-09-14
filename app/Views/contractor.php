<?php
function formatEmail($email)
{
    $parts = explode('@', $email);
    $username = $parts[0];
    $domain = '@' . $parts[1];

    $len = strlen($username);

    if ($len <= 7) {
        // Email pendek → ambil 3 huruf depan
        $visiblePart = substr($username, 0, 3);
    } else {
        // Email panjang → ambil 3 huruf depan
        $visiblePart = substr($username, 0, 3);
    }

    return $visiblePart . '****' . $domain;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Bintara Jaya Persada</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/image/lgnav2fix.png') ?>">
    <link rel="stylesheet" href="src\output.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="contractor">
    <header>
        <nav class="fixed top-0 w-full bg-white shadow z-50 h-[70px] flex items-center justify-between md:px-6 px-10">
            <!-- Logo -->
            <div class="md:ps-8 ps-0 flex items-center">
                <a href="index.html">
                    <img src="<?= base_url('assets/image/lgnav2fix.png') ?>" alt="" width="60">
                </a>
                <h1 class="hidden md:block bmn text-blue-600 md:text-xl text-2xl ps-4">Bintara Jaya Persada</h1>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <ul class="flex gap-6 text-black text-sm">
                    <li>
                        <a href="#tentangkami" class="hover:text-red-700">Home</a>
                    </li>
                    <li>
                        <a href="#layanankami" class="hover:text-red-700">Produk Layanan</a>
                    </li>
                    <li>
                        <a href="#tentangkami" class="hover:text-red-700">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#feedback" class="hover:text-red-700">Review</a>
                    </li>
                    <li>
                        <a href="#hubungikami" class="hover:text-red-700">Hubungi Kami</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <!-- Checkbox hack -->
                <input type="checkbox" id="menu-toggle" class="hidden peer" />
                <label for="menu-toggle" class="cursor-pointer text-3xl select-none">
                    ☰
                </label>

                <!-- Mobile Menu -->
                <div
                    class="absolute top-[10vh] left-0 w-full bg-white mt-5 shadow-md hidden peer-checked:block">
                    <ul class="flex flex-col items-center md:gap-4 gap-2 py-6 text-lg text-black">
                        <li>
                            <a href="<?= base_url('/') ?>" class="hover:text-red-700">Home</a>
                        </li>
                        <li>
                            <a href="#layanankami" class="hover:text-red-700">Produk Layanan</a>
                        </li>
                        <li>
                            <a href="#tentangkami" class="hover:text-red-700">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#feedback" class="hover:text-red-700">Review</a>
                        </li>
                        <li>
                            <a href="#hubungikami" class="hover:text-red-700">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="flex justify-center items-center flex-col">
        <div class="top flex items-center mt-[7rem] md:flex-row flex-col justify-center gap-10 w-[80vw]">
            <div class="md:w-1/2 w-full">
                <h1 class="md:text-5xl text-3xl font-bold text-left mb-6 md:mb-5">Solusi Pengadaan Sipil Terpercaya Untuk Proyek Anda.</h1>
                <p>Membangun dengan kualitas, ketepatan, dan kepercayaan.
                    Kami hadir sebagai mitra terpercaya dalam jasa pengadaan sipil dan konstruksi untuk mendukung keberhasilan setiap proyek Anda.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1100" class="md:w-1/2 w-full flex items-center justify-center gap-1 p-4">
                <div class="">
                    <img src="<?= base_url('assets/image/phone1.png') ?>" alt="phone" width="740">
                </div>
                <!-- Gambar besar
                <div class="h-full">
                  <img src="<?= base_url('assets/image/pic1.jpg') ?>" alt="" class="h-[400px] rounded-tl-xl rounded-bl-xl border-[#f97204] shadow-2xl object-cover">
                </div>
                Dua gambar kecil
                <div class="flex flex-col h-[400px] gap-1">
                    <img src="<?= base_url('assets/image/pic4.jpg') ?>" alt="" class="h-1/2 object-cover rounded-tr-xl border-[#f97204] shadow-2xl">
                    <img src="<?= base_url('assets/image/pic5.jpg') ?>" alt="" class="h-1/2 object-cover rounded-br-xl border-[#f97204] shadow-2xl">
                </div> -->
            </div>
        </div>

        <div id="layanankami" class="layanankami pt-5 flex flex-col w-[60vw] ">
            <div class="">
                <h1 class="md:text-3xl text-2xl text-center mb-5 font-bold">Layanan Kami</h1>
            </div>
            <div class="flex gap-4 md:flex-row flex-col pt-8">
                <div class="">
                    <img src="<?= base_url('assets/image/Icon.svg') ?>" alt="icon" class="mx-auto">
                    <h2 class="text-center md:text-2xl text-1xl font-bold mb-5 mt-4">Kontraktor</h2>
                    <p class="text-center">Kami menyediakan layanan kontraktor untuk proyek-proyek konstruksi, renovasi, dan perawatan bangunan.</p>
                </div>
                <div class="">
                    <img src="<?= base_url('assets/image/Icon2.svg') ?>" alt="icon" class="mx-auto">
                    <h2 class="text-center md:text-2xl text-1xl font-bold mb-5 mt-4">Perdagangan Umum</h2>
                    <p class="text-center">Kami menyediakan berbagai produk dan jasa perdagangan umum, termasuk pengadaan barang dan jasa.</p>
                </div>
            </div>
        </div>

        <div class="keunggulankami pt-10 flex flex-col items-center justify-center">

            <div class="text-center max-w-[80vw]">
                <h1 class="md:text-3xl text-2xl font-bold">Keunggulan Kami</h1>
                <p class="my-5 md:my-8 md:text-sm text-xs">Kami percaya bahwa kepercayaan dan kualitas adalah fondasi utama dalam setiap hubungan kerja. <br>
                    Oleh karena itu, kami menghadirkan berbagai keunggulan yang membedakan kami dari yang lain
                </p>
            </div>

            <div class="flex place-content-around gap-7 flex-col md:flex-row">

                <div class="md:text-left text-center border-2 p-5 shadow-2xs rounded-lg border-[#EEC03E] md:w-[20vw] w-[80vw] bg-[#0C2985] text-[#EEC03E] shadow-2xl">
                    <i class="fa-solid fa-medal"></i>
                    <h4 class="my-5 font-bold">Pengalaman</h4>
                    <p>
                        Kami memiliki pengalaman yang luas dalam bidang kontraktor dan perdagangan umum.
                    </p>
                </div>

                <div class="md:text-left text-center border-2 p-5 shadow-2xs rounded-lg border-[#0C2985] md:w-[20vw] w-[80vw] bg-[#EEC03E] text-[#0C2985] shadow-2xl">
                    <i class="fa-solid fa-star"></i>
                    <h4 class="my-5 font-bold">Kualitas</h4>
                    <p>
                        Kami berkomitmen untuk memberikan layanan yang berkualitas tinggi dan profesional.
                    </p>
                </div>

                <div class="md:text-left text-center border-2 p-5 shadow-2xs rounded-lg border-[#EEC03E] md:w-[20vw] w-[80vw] bg-[#0C2985] text-[#EEC03E] shadow-2xl">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h4 class="my-5 font-bold">Inovasi</h4>
                    <p>
                        Kami terus berinovasi untuk meningkatkan layanan dan produk kami.
                    </p>
                </div>

            </div>
        </div>

        <div id="tentangkami" class="tentangkami w-full flex flex-col p-10 items-center justify-center">
            <div class="w-[80vw] py-10">
                <h1 class="text-center md:text-center md:text-3xl text-2xl mb-5 font-bold">Tentang Kami</h1>
                <p class="text-center md:text-center md:text-sm text-xs">PT Bintara Jaya Persada adalah sebuah perusahaan yang bergerak di bidang kontraktor dan perdagangan umum,
                    dengan fokus utama pada penyediaan jasa konstruksi, pengadaan barang, serta layanan pendukung lainnya yang relevan dengan kebutuhan klien.
                    Dengan pengalaman dan keahlian yang dimiliki, perusahaan kami senantiasa berkomitmen untuk memberikan layanan yang berkualitas tinggi, tepat waktu,
                    dan profesional pada setiap proyek yang kami tangani. Kami percaya bahwa kepuasan pelanggan merupakan prioritas utama, sehingga setiap pekerjaan
                    dilakukan dengan penuh tanggung jawab, perencanaan yang matang, serta didukung oleh tenaga kerja yang berkompeten dan berpengalaman
                </p>
            </div>
            <div class="flex md:flex-row flex-col w-[80vw] items-center justify-center">
                <div class="w-[50%]">
                    <img src="<?= base_url('assets/image/phone2.png') ?>" alt="phone" width="440">
                </div>
                <div class="flex flex-col items-center justify-center md:w-[50%] w-[90%]">
                    <div class="visi mb-5">
                        <h3 class="mb-5 mt-4 text-2xl font-bold">Visi</h3>
                        <p class="md:text-sm text-xs">Menjadi perusahaan kontraktor dan perdagangan umum terkemuka di Indonesia dengan reputasi yang baik dan layanan yang berkualitas.</p>
                    </div>
                    <div class="misi">
                        <h3 class="mb-5 mt-4 text-2xl font-bold">Misi</h3>
                        <p class="md:text-sm text-xs">Memberikan layanan yang profesional, berkualitas, dan inovatif dalam bidang kontraktor dan perdagangan umum untuk memenuhi kebutuhan pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="feedback" id="feedback">
            <div class="w-[80vw] mx-auto">
                <h1 class="text-center md:text-3xl text-2xl my-8 font-bold">APA KATA KLIEN KAMI</h1>
                <p class="text-center md:text-sm text-xs">Kami bangga telah menjadi mitra bagi berbagai proyek.
                    Lihat apa kata mereka tentang layanan kami.
                </p>
            </div>
            <div class="flex items-stretch flex-wrap gap-4 w-[80vw] gap-4 justify-center mt-5 p-5 mx-auto">
                <?php foreach ($pesan as $p): ?>
                    <div class="border-2 border-black p-6 w-60 bg-[#143c6f] text-[#e0e2a6] 
            rounded-xl flex flex-col items-center justify-between">

                        <img src="<?= base_url('assets/image/feedback.png') ?>"
                            alt="" width="50" class="mx-auto">

                        <p class="mt-3 playpensans min-h-24 text-center">
                            “ <?= esc($p['deskripsi']) ?> ”
                        </p>

                        <!-- <div class=""><?= esc($p['rating']) ?>
                        <div>
                                <span class="fa fa-star" id="star-1" onclick="rate(1)"></span>
                                <span class="fa fa-star" id="star-2" onclick="rate(2)"></span>
                                <span class="fa fa-star" id="star-3" onclick="rate(3)"></span>
                                <span class="fa fa-star" id="star-4" onclick="rate(4)"></span>
                                <span class="fa fa-star" id="star-5" onclick="rate(5)"></span>
                            </div>
                        </div> -->

                        <div class="">
                            <?php $rating = (int)$p['rating']; ?>
                            <div>
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <span class="fa fa-star <?= $i <= $rating ? 'text-yellow-400' : 'text-gray-400' ?>"></span>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <div class="mt-4 text-center w-full">
                            <p class="font-bold playpensans"><?= esc($p['nama']) ?></p>
                            <p class="font-bold playpensans break-all">
                                <?= formatEmail($p['email']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="my-3 w-[80vw] text-center">
                <div class="mb-4">
                    <p class="text-lg text-black">
                        Rating Rata-rata: <?= $averageRating ? number_format($averageRating, 1) : 'Belum ada rating' ?>
                        / 5  <i class="fas fa-star text-yellow-400"></i>
                    </p>
                </div>
                <p class="text-center md:text-sm text-xs">Anda juga bisa membagikan pengalaman Anda bekerja sama dengan kami. <br> Dengan menekan tombol dibawah ini.
                </p>
                <div class="mt-8 mb-12">
                    <label for="my-modal" class="px-8 py-2 bg-[#143c6f] rounded text-[#e0e2a6] font-bold cursor-pointer ">Kirim Pesan</label>
                </div>
            </div>

            <!-- Checkbox Hidden -->
            <input type="checkbox" id="my-modal" class="peer hidden" />

            <!-- Modal -->
            <div class="fixed inset-0 bg-black bg-opacity-50 hidden peer-checked:flex items-center justify-center md:pt-20 pt-10">
                <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                    <form action="<?= base_url('/bintarajayapersada/pesan') ?>" method="POST" class="space-y-5 mt-5">
                        <?= csrf_field() ?>
                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1 ">Nama</label>
                            <input type="text" id="nama" name="nama" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                placeholder="Masukkan nama anda">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1 ">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                placeholder="nama@email.com">
                        </div>

                        <!-- Pesan -->
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1 ">Pesan</label>
                            <textarea id="pesan" name="pesan" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                placeholder="Pesan Anda"></textarea>
                        </div>
                        <div>
                            <label for="email" class="form-label">Berikan Ratingmu :</label>
                            <input type="hidden" name="rating">
                            <div>
                                <span class="fa fa-star" id="star-1" onclick="rate(1)"></span>
                                <span class="fa fa-star" id="star-2" onclick="rate(2)"></span>
                                <span class="fa fa-star" id="star-3" onclick="rate(3)"></span>
                                <span class="fa fa-star" id="star-4" onclick="rate(4)"></span>
                                <span class="fa fa-star" id="star-5" onclick="rate(5)"></span>
                            </div>
                        </div>

                        <!-- Tombol -->
                        <button type="submit"
                            class="kirim-btn w-full py-2.5 px-4 bg-[#143c6f] text-white font-medium rounded-xl shadow hover:bg-[#143c3a] focus:outline-none focus:ring-4 focus:ring-blue-300" id="kirim-btn" disabled>
                            Kirim Pesan
                        </button>
                    </form>

                    <!-- Tombol Tutup -->
                    <label for="my-modal" class="absolute top-2 left-6 text-gray-500 hover:text-black cursor-pointer">
                        <i class="fa-solid fa-xmark" style="color: black;"></i>
                    </label>
                </div>
            </div>


        </div>

        <div id="galerikami" class="my-8">
            <div class="md:w-[50vw] w-[90vw] mx-auto">
                <h1 class="text-center md:text-3xl text-2xl my-8 font-bold">Galeri Kami</h1>
                <p class="text-center md:text-sm text-xs">Kami percaya bahwa setiap gambar memiliki cerita. Di galeri ini, Anda dapat melihat berbagai momen, karya, dan aktivitas yang menjadi bagian dari perjalanan kami dalam dunia advertising.
                </p>
            </div>
            <div class="flex flex-col gap-[50px] mt-5 mx-auto">
                <div class="flex mx-auto place-content-center items-center w-[80vw] md:w-[70vw] gap-[50px] md:flex-row flex-col">
                    <img src="<?= base_url('assets/image/pic4.jpg') ?>" alt="galeripic" class="w-[204px] border-4 border-black rounded-xl object-cover">
                    <img src="<?= base_url('assets/image/galeri1.jpg') ?>" alt="galeripic" class="w-[204px] border-4 border-black rounded-xl object-cover">
                </div>

                <div class="flex mx-auto place-content-center items-center w-[80vw] md:w-[70vw] gap-[50px] md:flex-row flex-col">
                    <img src="<?= base_url('assets/image/galeri2.jpg') ?>" alt="galeripic" class="w-[204px] border-4 border-black rounded-xl object-cover">
                    <img src="<?= base_url('assets/image/galeri3.jpg') ?>" alt="galeripic" class="w-[204px] border-4 border-black rounded-xl object-cover">
                    <img src="<?= base_url('assets/image/galeri4.jpg') ?>" alt="galeripic" class="w-[204px] border-4 border-black rounded-xl object-cover">
                </div>

                <div class="flex mx-auto place-content-center items-center w-[80vw] md:w-[70vw] gap-[50px] md:flex-row flex-col">
                    <img src="<?= base_url('assets/image/galeri5.jpg') ?>" alt="galeripic" class="w-[204px] border-4 border-black rounded-xl object-cover">
                    <img src="<?= base_url('assets/image/galeri6.jpg') ?>" alt="galeripic" class="w-[204px] border-4 border-black rounded-xl object-cover">
                </div>
            </div>

        </div>

        <div class="hubungikami flex flex-col items-center w-full bg-[#f5f5f5]" id="hubungikami">
            <div class="md:w-[50vw] w-[90vw] my-7 md:mb-0">
                <h1 class="text-center md:text-3xl text-2xl my-8 font-bold">Hubungi Kami & Ikuti Kami</h1>
                <p class="text-center md:text-sm text-xs">Kami sangat menghargai setiap kesempatan untuk terhubung dengan Anda.
                    Jangan ragu untuk menghubungi kami melalui kontak di bawah ini atau ikuti kami di media sosial untuk mendapatkan informasi terbaru seputar layanan dan proyek kami.
                </p>
            </div>
            <div class="flex md:flex-row flex-col md:px-20 px-10 gap-10">
                <div class="md:w-1/2 w-full flex order-2 mb-8 md:mb-0 md:order-1 flex-col justify-center">
                    <h3 class="mb-5 md:text-2xl text-1xl font-bold">Kontak</h3>
                    <a href="" class="md:text-2xl text-xs">
                        <i class="fa-brands fa-whatsapp pe-4 mb-4"></i> +62 851-7688-7162
                    </a>
                    <a href="" class="md:text-2xl text-xs">
                        <i class="fa-solid fa-envelope pe-4 mb-4"></i> bintarajayapersada@yahoo.co.id
                    </a>
                    <h3 class="mb-5 md:text-2xl text-1xl font-bold">Media Sosial</h3>
                    <a href="" class="md:text-2xl text-xs">
                        <i class="fa-solid fa-brands fa-instagram  pe-5"></i>@bintarajayapersada99
                    </a>
                </div>
                <div class="w/1/2 order-1 md:order-2">
                    <img src="<?= base_url('assets/image/hubungikami.png') ?>" alt="" width="500">
                </div>
            </div>
        </div>

        <footer class="flex place-content-around md:flex-row flex-col md:py-0 py-5 w-full items-center h-[10vh]">
            <div class="p-2 flex items-center">
                <h1 class="text-blue-600 text-2xl">
                    <img src="<?= base_url('assets/image/lgnav2fix.png') ?>" alt="" width="40">
                </h1>
            </div>
            <div class="p-2 flex items-center">
                <span class="md:text-1xl text-xs text-black ps-3">&copy; 2025 All rights reserved.</span>
            </div>
            <div class="p-2 justify-self-end">
                <i class="text-black text-1xl mr-3 fa-brands fa-whatsapp"></i>
                <i class="text-black text-1xl mr-3 fa-brands fa-tiktok"></i>
                <i class="text-black text-1xl mr-3 fa-brands fa-instagram"></i>
            </div>
        </footer>
    </section>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        function rate(id) {

            document.getElementsByName("rating")[0].value = id;
            switch (id) {
                case 1:
                    checked("star-1");
                    unchecked("star-2");
                    unchecked("star-3");
                    unchecked("star-4");
                    unchecked("star-5");
                    document.getElementById("kirim-btn").disabled = false;
                    break;

                case 2:
                    checked("star-1");
                    checked("star-2");
                    unchecked("star-3");
                    unchecked("star-4");
                    unchecked("star-5");
                    document.getElementById("kirim-btn").disabled = false;
                    break;

                case 3:
                    checked("star-1");
                    checked("star-2");
                    checked("star-3");
                    unchecked("star-4");
                    unchecked("star-5");
                    document.getElementById("kirim-btn").disabled = false;
                    break;

                case 4:
                    checked("star-1");
                    checked("star-2");
                    checked("star-3");
                    checked("star-4");
                    unchecked("star-5");
                    document.getElementById("kirim-btn").disabled = false;
                    break;

                case 5:
                    checked("star-1");
                    checked("star-2");
                    checked("star-3");
                    checked("star-4");
                    checked("star-5");
                    document.getElementById("kirim-btn").disabled = false;
                    break;

                default:
            }
        }

        function checked(star_id) {
            var element = document.getElementById(star_id);
            element.classList.add("checked");
        }

        function unchecked(star_id) {
            var element = document.getElementById(star_id);
            element.classList.remove("checked");
        }
    </script>
</body>

</html>