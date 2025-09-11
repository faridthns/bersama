<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Advertising</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/image/BMN-logo.png') ?>">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body id="advertising">
    <header>
        <nav class="fixed top-0 w-full bg-white shadow z-50 h-fit flex items-center justify-between px-6 py-2">
            <!-- Logo -->
            <div>
                <img src="<?= base_url('assets/image/BMN-logo.png') ?>" alt="" width="50">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <ul class="flex gap-6 text-lg text-black">
                    <li>
                        <a href="#tentangkami" class="hover:text-[#0d70fe]">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#layanankami" class="hover:text-[#0d70fe]">Layanan</a>
                    </li>
                    <li>
                        <a href="#produkkami" class="hover:text-[#0d70fe]">Produk Kami</a>
                    </li>
                    <li>
                        <a href="#mediasosial" class="hover:text-[#0d70fe]">Media Sosial</a>
                    </li>
                    <li>
                        <a href="#feedback" class="hover:text-[#0d70fe]">Review</a>
                    </li>
                    <li>
                        <a href="#hubungikami" class="hover:text-[#0d70fe]">Hubungi Kami</a>
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
                    class="absolute top-[10vh] left-0 w-full bg-white shadow-md hidden peer-checked:block">
                    <ul class="flex flex-col items-center gap-4 py-6 text-lg text-black">
                        <li>
                            <a href="#tentangkami" class="hover:text-[#0d70fe]">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#layanankami" class="hover:text-[#0d70fe]">Layanan</a>
                        </li>
                        <li>
                            <a href="#produkkami" class="hover:text-[#0d70fe]">Produk Kami</a>
                        </li>
                        <li>
                            <a href="#mediasosial" class="hover:text-[#0d70fe]">Media Sosial</a>
                        </li>
                        <li>
                            <a href="#feedback" class="hover:text-[#0d70fe]">Review</a>
                        </li>
                        <li>
                            <a href="#hubungikami" class="hover:text-[#0d70fe]">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="flex justify-center items-center flex-col">

        <!-- Text Top -->
        <div class="hero mt-[10vh] py-[3rem]">
            <div class="text-center lg:w-[45vw] w-[80vw] mx-auto">
                <h1 class="text-3xl font-bold playfull">Solusi Periklanan Berbasis Data</h1>
                <h1 class="text-3xl font-bold playfull">untuk Pertumbuhan yang Terukur</h1>
                <p class="text-1xl mt-5 playpensans">Kami merancang dan mengeksekusi kampanye yang didukung oleh analisis mendalam, memastikan setiap investasi pemasaran menghasilkan pengembalian yang optimal bagi bisnis Anda.</p>
            </div>

            <!-- Advertising img -->
            <div class="mt-10 flex justify-center">
                <img class="border-2 border-black rounded-lg w-[75vw] h-[28vw] object-cover" src="<?= base_url('assets/image/headerimgadvertising.jpg') ?>" alt="">
            </div>
        </div>

        <!-- Tentang Kami -->

        <div class="bg-[#f5f5f5] w-full py-16" id="tentangkami">
            <div class="max-w-[80vw] lg:max-w-[60vw] mx-auto text-center">
                <h1 class="text-3xl font-bold text-[#0d70fe] playfull">Tentang Kami</h1>
                <p class="text-1xl mt-5 text-justify  playpensans">
                    Dunia Advertising mengandalkan konsep dan timdesign, menawarkan bentuk
                    kerja sama dalam hal promotion dan organizer sebagai mitra dalam memberikan
                    solusi bagi anda yang ingin melakukan branding promotion, selling, dan
                    communication.
                    Kami berupaya memberikan layanan terbaik secara profesional guna mencapai tingkat kepuasan tertinggi.
                    Menyediakan dan menerima pembuatan media reklame outdoor dan indoor, serta kontruksi baja. Didukung dengan tenaga profesional dan quality controlled. Keunggulan
                    perusahaan kami adalah dapat menyesuaikan kebutuhan bisnis anda. Sudah free konsultasi desain, free survey lokasi disetiap pemesanan produk.
                </p>
            </div>
            <!-- End Tentang Kami -->

            <!-- Visi Misi -->
            <div class="md:max-w-[60vw] mx-auto mt-[50px] flex md:flex-row flex-col gap-10">
                <div class="visi w-[80vw] md:w-1/2 mx-auto">
                    <h1 class="text-3xl text-center font-bold text-[#0d70fe] playfull">Visi</h1>
                    <p class="text-1xl mt-5 text-justify  playpensans">
                        Menjadi mitra strategis terdepan bagi merek-merek di Indonesia dalam mewujudkan potensi penuh
                        mereka melalui komunikasi kreatif dan strategis yang berdampak.
                    </p>
                </div>
                <div class="misi w-[80vw] md:w-1/2 mx-auto">
                    <h1 class="text-3xl text-center font-bold text-[#0d70fe] playfull">Misi</h1>
                    <p class="text-1xl mt-5 text-justify playpensans">
                        Misi kami adalah menjadi mitra strategis yang mendorong pertumbuhan merek melalui komunikasi kreatif dan strategis.
                        Kami berkomitmen untuk membangun kemitraan erat dengan klien, menghadirkan solusi inovatif berbasis data, dan menciptakan kampanye yang tidak hanya menarik perhatian audiens,
                        tetapi juga menghasilkan dampak bisnis yang terukur.
                    </p>
                </div>
            </div>
        </div>
        <!-- End Visi Misi -->

        <!-- Layanan Kami -->
        <div class="w-[80vw] md:w-[60vw] text-center my-[50px] w-[75vw]">
            <div class="" id="layanankami">
                <h1 class="text-3xl font-bold text-[#0d70fe] playfull">Layanan Kami</h1>
                <p class="text-1xl mt-5 md:text-center text-justify  playpensans">
                    Kami menawarkan berbagai solusi periklanan terintegrasi yang dirancang untuk membantu merek Anda berkembang.
                    Layanan kami fokus pada strategi, kreativitas, dan hasil yang terukur.
                </p>
            </div>
            <div class="flex lg:flex-row flex-col mt-5 p-5 gap-6">
                <div class="text-left border-2 rounded-md p-5 border-black h-fit mx-auto w-fit md:w-1/3 bg-[#143c6f] text-[#e0e2a6] shadow-black-xl/30">
                    <i class="fa-solid fa-pen-to-square fa-xl"></i>
                    <h4 class="mt-5 text-xl font-semibold  playpensans">Layanan Produksi</h4>
                    <ol class="mt-5 list-disc list-inside">
                        <li class="playpensans">Billboard </li>
                        <li class="playpensans">Videotron</li>
                        <li class="playpensans">Neon Box</li>
                        <li class="playpensans">Neon Flex</li>
                        <li class="playpensans">Cutting Sticker </li>
                        <li class="playpensans">Letter Sign </li>
                        <li class="playpensans">Interior Design </li>
                        <li class="playpensans">Acrylic Frame </li>
                        <li class="playpensans">Welcome Sign </li>
                        <li class="playpensans">Signboard </li>
                        <li class="playpensans">RunningText </li>
                        <li class="playpensans">Rambu-Rambu </li>
                    </ol>
                </div>
                <div class="text-left border-2 rounded-md p-5 border-black h-fit mx-auto w-fit md:w-1/3 bg-[#e0e2a6] text-[#143c6f] shadow-black-xl/30">
                    <i class="fa-solid fa-chart-line fa-xl"></i>
                    <h4 class="mt-5 text-xl font-semibold">Pengembangan Layanan</h4>
                    <ol class="mt-5 list-disc list-inside">
                        <li class="playpensans">Jasa Perawatan dan Perbaikan</li>
                        <li class="playpensans">Jasa Pemasangan Spanduk dan Banner</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- End Of Layanan Kami -->

        <!-- Keuntungan Bersama Kami -->

        <div class="w-full py-16" id="tentangkami">
            <div class="max-w-[80vw] lg:max-w-[60vw] mx-auto text-center">
                <h1 class="text-3xl font-bold text-[#0d70fe] playfull">Keuntungan Bersama Kami</h1>
                <p class="text-1xl mt-5 text-center playpensans">
                    Bekerja sama dengan kami berarti mendapatkan lebih dari sekadar layanan advertising.
                    Kami menghadirkan strategi kreatif yang terukur, tim profesional yang berpengalaman, serta dukungan penuh dalam setiap langkah kampanye.
                    Dengan pendekatan yang transparan, inovatif, dan berorientasi hasil, kami memastikan setiap kolaborasi memberikan nilai maksimal bagi pertumbuhan bisnis Anda.
                </p>
            </div>

            <div class="md:max-w-[60vw] mx-auto mt-[50px] flex md:flex-row flex-col gap-10">
                <!-- Kolom kiri -->
                <div class="misi w-[80vw] md:w-1/2 mx-auto flex items-center flex-col gap-4">
                    <div class="flex items-center bg-[#143c6f] text-[#e0e2a6] p-6 rounded-xl w-[375px] h-[100px] border-black border-4">
                        <i class="fa-solid fa-location-dot fa-lg me-4"></i>
                        <p class="playpensans">Menyediakan layanan survey lokasi GRATIS untuk memastikan media promosi.</p>
                    </div>
                    <div class="flex items-center bg-[#e0e2a6] text-[#143c6f] p-6 rounded-xl w-[375px] h-[100px] border-black border-4">
                        <i class="fa-solid fa-map me-4"></i>
                        <p class="playpensans">Memberikan denah GRATIS yang menarik dan sesuai kebutuhan brand anda.</p>
                    </div>
                    <div class="flex items-center bg-[#143c6f] text-[#e0e2a6] p-6 rounded-xl w-[375px] h-[100px] border-black border-4">
                        <i class="fa-solid fa-building me-4"></i>
                        <p class="playpensans">Menggunakan material terbaik dan proses produksi yang standar profesional</p>
                    </div>
                </div>

                <!-- Kolom kanan -->
                <div class="misi w-[80vw] md:w-1/2 mx-auto flex items-center flex-col gap-4">
                    <div class="flex items-center bg-[#e0e2a6] text-[#143c6f] p-6 rounded-xl w-[375px] h-[100px] border-black border-4">
                        <i class="fa-solid fa-screwdriver-wrench me-4"></i>
                        <p class="playpensans">One Stop Solutions.</p>
                    </div>
                    <div class="flex items-center bg-[#143c6f] text-[#e0e2a6] p-6 rounded-xl w-[375px] h-[100px] border-black border-4">
                        <i class="fa-solid fa-eye me-4"></i>
                        <p class="playpensans">Dapat meningkatkan visibilitas dan jangkauan merk.</p>
                    </div>
                    <div class="flex items-center bg-[#e0e2a6] text-[#143c6f] p-6 rounded-xl w-[375px] h-[100px] border-black border-4">
                        <i class="fa-solid fa-dollar-sign me-4"></i>
                        <p class="playpensans">Biaya yang terjangkau dan efektif untuk jangka panjang.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Keuntungan Bersama Kami -->

        <!-- Produk Kami -->

        <div class=" text-center mt-[50px] md:max-w-[60vw]" id="produkkami">
            <h1 class="mb-6 text-3xl font-bold text-[#0d70fe] playfull">Produk Kami</h1>
            <p class="playpensans">Kami percaya bahwa setiap gambar memiliki cerita. Di galeri ini,
                Anda dapat melihat berbagai momen, karya, dan aktivitas yang
                menjadi bagian dari perjalanan kami dalam dunia advertising.
            </p>
            <div class="mt-8 mb-2 grid md:grid-cols-3 gap-2 md:grid-cols-1">
                <div class="p-4">
                    <img src="<?= base_url('assets/image/b144.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">Custom Alamat Rumah</div>
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/bni.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">Letter Box Stainless</div>
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/teqila.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">SignBoard</div>
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/thropy.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">Neon Flex</div>
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/interior.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">Interior Design</div>
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/plang.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">Rambu - rambu</div>
                </div>
            </div>
            <div class="mb-8 grid md:grid-cols-2 gap-1 grid-cols-1">
                <div class="p-4">
                    <img src="<?= base_url('assets/image/oisave.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">Neon Box</div>
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/prod.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                    <div class="mt-2 playpensans">Letter Box Acrylic</div>
                </div>
            </div>
        </div>
        <!-- End Of Produk Kami -->

        <!-- Gallery Kami -->

        <div class=" text-center mt-[50px] md:max-w-[60vw]">
            <h1 class="mb-6 text-3xl font-bold text-[#0d70fe] playfull">Gallery Kami</h1>
            <div class="mt-8 mb-2 grid md:grid-cols-3 gap-2 md:grid-cols-1">
                <div class="p-4">
                    <img src="<?= base_url('assets/image/pangkas.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/jack.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/patriot.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/jok.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/menteri.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
                <div class="p-4">
                    <img src="<?= base_url('assets/image/apd.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
            </div>
            <div class="mb-8 grid md:grid-cols-2 gap-1 grid-cols-1">
                <div class="p-2">
                    <img src="<?= base_url('assets/image/cllo.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
                <div class="p-2">
                    <img src="<?= base_url('assets/image/asg.jpg') ?>" alt="" class="rounded-xl border-black border-4 h-[300px] mx-auto w-60 h-40 object-cover">
                </div>
            </div>
        </div>
        <!-- End Of Produk Kami -->




        <div class="media-sosial w-full bg-[#f5f5f5] py-10 px-20" id="mediasosial">
            <h1 class="text-3xl mb-2 text-center font-bold text-[#0d70fe] playfull">Media Sosial</h1>
            <div class="flex md:flex-row flex-col">
                <div class="md:w-1/2">
                    <img src="<?= base_url('assets/image/mediapic.png') ?>" alt="" width="500">
                </div>
                <div class="md:w-1/2 flex flex-col justify-center items-center">
                    <p class="text-center playpensans">Ikuti perjalanan kami dan dapatkan wawasan terbaru seputar tren periklanan, <br>
                        studi kasus, serta cerita di balik layar. <br>
                        Mari terhubung dan bangun komunitas yang kuat bersama kami!
                    </p>
                    <div class="flex place-content-around mt-7 gap-7">
                        <a href="" class="flex items-center font-bold playpensans">
                            <i class="text-black text-3xl mr-3 fa-brands fa-instagram  "></i>dunia.adv
                        </a>
                        <a href="" class="flex items-center font-bold playpensans">
                            <i class="text-black text-3xl mr-3 fa-brands fa-tiktok"></i>duniaadvertising
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="feedback" id="feedback">
            <div class="w-[80vw] mx-auto">
                <h1 class="text-center text-3xl my-8 font-bold text-[#0d70fe] playfull">Testimoni Yang Bicara</h1>
                <p class="md:text-center text-justify playpensans">Kami bangga telah menjadi bagian dari kisah sukses berbagai merek. Berikut adalah beberapa testimoni dari klien yang telah bekerja sama dengan kami.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 w-[80vw] gap-4 justify-center mt-5 p-5 mx-auto">
                <div class="border-2 border-black p-6 w-60 bg-[#143c6f] text-[#e0e2a6] rounded-xl">
                    <img src="<?= base_url('assets/image/feedback.png') ?>" alt="" width="50" class="text-center">
                    <p class="mt-3 playpensans">“ Profesional dan kreatif. Mereka benar-benar mengerti apa
                        yang kami butuhkan dan hasilnya melampaui ekspektasi. ”
                    </p>
                    <p class="mt-4 text-center font-bold playpensans">JohnDoe</p>
                    <p class="text-center font-bold playpensans">johndoe@gmail.com</p>
                </div>
                <div class="border-2 border-black p-6 w-60 bg-[#e0e2a6] text-[#143c6f]  rounded-xl">
                    <img src="<?= base_url('assets/image/feedback.png') ?>" alt="" width="50">
                    <p class="mt-3 playpensans">“ Profesional dan kreatif. Mereka benar-benar mengerti apa
                        yang kami butuhkan dan hasilnya melampaui ekspektasi. ”
                    </p>
                    <p class="mt-4 text-center font-bold playpensans">JohnDoe</p>
                    <p class="text-center font-bold playpensans">johndoe@gmail.com</p>
                </div>
                <div class="border-2 border-black p-6 w-60 bg-[#143c6f] text-[#e0e2a6]  rounded-xl">
                    <img src="<?= base_url('assets/image/feedback.png') ?>" alt="" width="50">
                    <p class="mt-3 playpensans">“ Profesional dan kreatif. Mereka benar-benar mengerti apa
                        yang kami butuhkan dan hasilnya melampaui ekspektasi. ”
                    </p>
                    <p class="mt-4 text-center font-bold playpensans">JohnDoe</p>
                    <p class="text-center font-bold playpensans">johndoe@gmail.com</p>
                </div>
            </div>
            <div class="my-3 w-[80vw] text-center">
                <p class="md:text-center text-justify playpensans">Anda juga bisa membagikan pengalaman Anda bekerja sama dengan kami. <br> Dengan menekan tombol dibawah ini.
                </p>
                <div class="mt-8 mb-12">
                    <label for="my-modal" class="px-8 py-2 bg-[#143c6f] rounded text-[#e0e2a6] font-bold cursor-pointer playpensans">Kirim Pesan</label>
                </div>
            </div>

            <!-- Checkbox Hidden -->
            <input type="checkbox" id="my-modal" class="peer hidden" />

            <!-- Modal -->
            <div class="fixed inset-0 bg-black bg-opacity-50 hidden peer-checked:flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
                    <!-- <h2 class="text-xl font-semibold mb-4">Judul Modal</h2>
                    <p class="text-gray-600">Ini modal tanpa JavaScript, hanya pakai Tailwind + HTML.</p> -->

                    <!-- <h2 class="text-2xl font-bold mb-6 text-gray-800">Form Kirim Pesan</h2> -->

                    <form action="#" method="POST" class="space-y-5 mt-5">
                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1 playpensans">Nama</label>
                            <input type="text" id="nama" name="nama" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                placeholder="Masukkan nama anda">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1 playpensans">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                placeholder="nama@email.com">
                        </div>

                        <!-- Pesan -->
                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1 playpensans">Pesan</label>
                            <textarea type="pesan" id="pesan" name="pesan" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                placeholder="Pesan Anda">
                            </textarea>
                        </div>

                        <!-- Tombol -->
                        <button type="submit"
                            class="w-full py-2.5 px-4 bg-[#143c6f] text-white font-medium rounded-xl shadow hover:bg-[#143c3a] focus:outline-none focus:ring-4 focus:ring-blue-300  playpensans">
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

        <div class="w-full flex justify-center bg-[#f5f5f5]">
            <div class="hubungikami w-[80vw]" id="hubungikami">
                <h1 class="text-center text-3xl mt-8 font-bold text-[#0d70fe] playfull">Hubungi Kami</h1>
                <p class="text-center py-6 playpensans">Siap untuk membawa merek Anda ke level berikutnya? Hubungi kami sekarang untuk
                    berdiskusi <br> tentang bagaimana kami dapat membantu Anda mencapai tujuan bisnis.
                </p>
                <div class="flex md:flex-row flex-col">
                    <div class="md:w-1/2 flex flex-col justify-center">
                        <a href="" class="playpensans">
                            <i class="fa-brands text-2xl fa-whatsapp pe-4 mb-4"></i> +62 851-7688-7162
                        </a>
                        <a href="" class="playpensans">
                            <i class="fa-solid text-2xl  fa-envelope pe-4 mb-4"></i> advertisingdunia1@gmail.com
                        </a>
                        <div class="">
                            <i class="fa-solid text-2xl  fa-location-dot pe-5"></i>
                            <a href="" class="playpensans">Ruko Bumi Satria Kencana, JL. KH. Noer Ali JL. Raya Kalimalang Blok A-4</a>
                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img src="<?= base_url('assets/image/hubungikami.png') ?>" alt="" width="500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="flex md:flex-row flex-col-reverse justify-between items-center h-fit md:h-[10vh] px-8 py-4">
        <div class="p-2 flex items-center">
            <img src="<?= base_url('assets/image/BMN-logo.png') ?>" alt="" width="50">
            <span class="text-1xl text-black ps-4 playpensans">&copy; 2025 - All Right Reserved</span>
        </div>
        <div class="p-2">
            <a href="">
                <i class="text-black text-1xl mr-3 fa-brands fa-instagram"></i>
            </a>
            <a href="">
                <i class="text-black text-1xl mr-3 fa-brands fa-tiktok"></i>
            </a>
            <a href="">
                <i class="text-black text-1xl mr-3 fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </footer>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>

</html>