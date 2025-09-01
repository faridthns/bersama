<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Advertising</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/image/BMN-logo.png') ?>">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    

</head>
<body>
    <header>
        <nav class="fixed top-0 w-full bg-white shadow z-50 h-fit flex items-center justify-between px-6 py-2">
            <!-- Logo -->
            <div>
                <img src="<?= base_url('assets/image/BMN-logo.png')?>" alt="" width="50">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <ul class="flex gap-6 text-lg text-black">
                    <li>
                        <a href="#tentangkami" class="hover:text-red-700">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#layanankami" class="hover:text-red-700">Layanan</a>
                    </li>
                    <li>
                        <a href="#mediasosial" class="hover:text-red-700">Media Sosial</a>
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
                class="absolute top-[10vh] left-0 w-full bg-white shadow-md hidden peer-checked:block"
                >
                    <ul class="flex flex-col items-center gap-4 py-6 text-lg text-black">
                        <li>
                            <a href="#tentangkami" class="hover:text-red-700">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#layanankami" class="hover:text-red-700">Layanan</a>
                        </li>
                        <li>
                            <a href="#mediasosial" class="hover:text-red-700">Media Sosial</a>
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

        <!-- Text Top -->
        <div class="hero mt-[10vh] py-[3rem]">
            <div class="text-center lg:w-[45vw] w-[80vw] mx-auto">
                <h1 class="text-3xl font-bold">Solusi Periklanan Berbasis Data</h1>
                <h1 class="text-3xl font-bold">untuk Pertumbuhan yang Terukur</h1>
                <p class="text-1xl mt-5">Kami merancang dan mengeksekusi kampanye yang didukung oleh analisis mendalam, memastikan setiap investasi pemasaran menghasilkan pengembalian yang optimal bagi bisnis Anda.</p>
            </div>
    
            <!-- Advertising img -->
            <div class="mt-10 flex justify-center">
                <img class="border-2 border-black rounded-lg w-[75vw] h-[28vw] object-cover" src="<?= base_url('assets/image/headerimgadvertising.jpg') ?>" alt="">
            </div>
        </div>

        <!-- Tentang Kami -->

        <div class="bg-[#f5f5f5] w-full py-16" id="tentangkami">
            <div class="max-w-[80vw] lg:max-w-[60vw] mx-auto text-center">
            <h1 class="text-3xl font-bold">Tentang Kami</h1>
            <p class="text-1xl mt-5 text-justify">
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
                    <h1 class="text-3xl text-center font-bold">Visi</h1>
                    <p class="text-1xl mt-5 text-justify">
                        Menjadi mitra strategis terdepan bagi merek-merek di Indonesia dalam mewujudkan potensi penuh 
                        mereka melalui komunikasi kreatif dan strategis yang berdampak.
                    </p>
                </div>
                <div class="misi w-[80vw] md:w-1/2 mx-auto">
                    <h1 class="text-3xl text-center font-bold">Misi</h1>
                    <p class="text-1xl mt-5 text-justify">
                        Misi kami adalah menjadi mitra strategis yang mendorong pertumbuhan merek melalui komunikasi kreatif dan strategis. 
                        Kami berkomitmen untuk membangun kemitraan erat dengan klien, menghadirkan solusi inovatif berbasis data, dan menciptakan kampanye yang tidak hanya menarik perhatian audiens, 
                        tetapi juga menghasilkan dampak bisnis yang terukur.
                    </p>
                </div>
            </div>
        </div>
        <!-- End Visi Misi -->
  
        
        <div class="w-[80vw] md:w-[60vw] text-center my-[50px] w-[75vw]">
            <div class="" id="layanankami">
                <h1 class="text-3xl font-bold">Layanan Kami</h1>
                <p class="text-1xl mt-5 md:text-center text-justify">
                    Kami menawarkan berbagai solusi periklanan terintegrasi yang dirancang untuk membantu merek Anda berkembang. 
                    Layanan kami fokus pada strategi, kreativitas, dan hasil yang terukur.
                </p>
            </div>
            <div class="flex lg:flex-row flex-col gap-10 mt-5 p-5">
                <div class="text-left border-2 rounded-md p-5 shadow-xl/30 border-black h-fit mx-auto w-fit md:w-1/3">
                    <img src="edit.svg" alt="">
                    <h4 class="mt-5 text-xl font-semibold">Layanan Produksi</h4>
                    <ol class="mt-5 list-disc list-inside">
                        <li >Billboard </li>
                        <li >Videotron</li>
                        <li >Neon Box</li>
                        <li >Neon Flex</li>
                        <li >Cutting Sticker </li>
                        <li >Letter Sign </li>
                        <li >Interior Design </li>
                        <li >Acrylic Frame </li>
                        <li >Welcome Sign  </li>
                        <li >Signboard   </li>
                        <li >RunningText   </li>
                        <li >Rambu-Rambu  </li>
                    </ol>
                </div>
                <div class="text-left border-2 rounded-md p-5 shadow-xl/30 border-black h-fit mx-auto w-fit md:w-1/3">
                    <img src="trendingup.svg" alt="">
                    <h4 class="mt-5 text-xl font-semibold">Pengembangan Layanan</h4>
                    <ol class="mt-5 list-disc list-inside">
                        <li >Jasa Perawatan dan Perbaikan</li>
                        <li >Jasa Pemasangan Spanduk dan Banner</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="media-sosial w-full bg-[#f5f5f5] py-10 px-20" id="mediasosial">
            <h1 class="text-3xl mb-2 text-center font-bold">Media Sosial</h1>
            <div class="flex md:flex-row flex-col">
                <div class="md:w-1/2">
                    <img src="<?= base_url('assets/image/mediapic.png')?>" alt="" width="500">
                </div>
                <div class="md:w-1/2 flex flex-col justify-center items-center">
                    <p class="text-center">Ikuti perjalanan kami dan dapatkan wawasan terbaru seputar tren periklanan,
                    studi kasus, serta cerita di balik layar.
                    Mari terhubung dan bangun komunitas yang kuat bersama kami!
                    </p>
                    <div class="flex place-content-around mt-7 gap-7">
                        <a href="" class="flex items-center">
                            <i class="text-black text-3xl mr-3 fa-brands fa-instagram"></i>dunia.adv
                        </a>
                        <a href="" class="flex items-center">
                            <i class="text-black text-3xl mr-3 fa-brands fa-tiktok"></i>duniaadvertising
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="feedback" id="feedback">
            <div class="w-[80vw] mx-auto">
                <h1 class="text-center text-3xl my-8 font-bold">Apa Kata Klien Kami</h1>
                <p class="md:text-center text-justify">Kami bangga telah menjadi bagian dari kisah sukses berbagai merek. Berikut adalah beberapa testimoni dari klien yang telah bekerja sama dengan kami.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 w-[80vw] gap-4 justify-center mt-5 p-5 mx-auto">
                <div class="border-2 border-black p-6 w-60">
                    <img src="<?= base_url('assets/image/feedback.png')?>" alt="" width="50" class="text-center">
                    <p class="mt-3">“ Profesional dan kreatif. Mereka benar-benar mengerti apa 
                        yang kami butuhkan dan hasilnya melampaui ekspektasi. ”
                    </p>
                    <p class="mt-4 text-center font-bold">JohnDoe</p>
                    <p class="text-center font-bold">johndoe@gmail.com</p>
                </div>
                <div class="border-2 border-black p-6 w-60">
                    <img src="<?= base_url('assets/image/feedback.png')?>" alt="" width="50">
                    <p class="mt-3">“ Profesional dan kreatif. Mereka benar-benar mengerti apa 
                        yang kami butuhkan dan hasilnya melampaui ekspektasi. ”
                    </p>
                    <p class="mt-4 text-center font-bold">JohnDoe</p>
                    <p class="text-center font-bold">johndoe@gmail.com</p>
                </div>
                <div class="border-2 border-black p-6 w-60">
                    <img src="<?= base_url('assets/image/feedback.png')?>" alt="" width="50">
                    <p class="mt-3">“ Profesional dan kreatif. Mereka benar-benar mengerti apa 
                        yang kami butuhkan dan hasilnya melampaui ekspektasi. ”
                    </p>
                    <p class="mt-4 text-center font-bold">JohnDoe</p>
                    <p class="text-center font-bold">johndoe@gmail.com</p>
                </div>
            </div>
            <div class="my-3 w-[80vw] text-center">
                <p class="md:text-center text-justify">Anda juga bisa membagikan pengalaman Anda bekerja sama dengan kami. Dengan menekan tombol dibawah ini.
                </p>
                <div class="my-4">
                    <label for="my-modal" class="mt-4 px-4 py-2 bg-red-700 text-white rounded  font-bold">Kirim Pesan</label>

                </div>
            </div>

        <!-- Checkbox Hidden -->
        <input type="checkbox" id="my-modal" class="peer hidden" />

        <!-- Modal -->
        <div class="fixed inset-0 bg-black bg-opacity-50 hidden peer-checked:flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-xl font-semibold mb-4">Judul Modal</h2>
            <p class="text-gray-600">Ini modal tanpa JavaScript, hanya pakai Tailwind + HTML.</p>

            <!-- Tombol Tutup -->
            <label for="my-modal" class="absolute top-2 right-2 text-gray-500 hover:text-black cursor-pointer">
            ✖
            </label>
        </div>
        </div>


        </div>

        <div class="w-full flex justify-center bg-[#f5f5f5]">
            <div class="hubungikami w-[80vw]" id="hubungikami">
                <h1 class="text-center text-3xl mt-8 font-bold">Hubungi Kami</h1>
                <p class="text-center py-6">Siap untuk membawa merek Anda ke level berikutnya? Hubungi kami sekarang untuk
                    berdiskusi  <br> tentang bagaimana kami dapat membantu Anda mencapai tujuan bisnis.
                </p>
                <div class="flex md:flex-row flex-col">
                    <div class="md:w-1/2 flex flex-col justify-center">
                        <a href="">
                            <i class="fa-brands text-2xl fa-whatsapp pe-4 mb-4"></i> +62 851-7688-7162
                        </a>
                        <a href="">
                            <i class="fa-solid text-2xl  fa-envelope pe-4 mb-4"></i> advertisingdunia1@gmail.com
                        </a>
                        <div class="">
                            <i class="fa-solid text-2xl  fa-location-dot pe-5"></i> 
                            <a href="">Ruko Bumi Satria Kencana, JL. KH. Noer Ali JL. Raya Kalimalang Blok A-4</a>
                        </div>
                        
                    </div>
                    <div class="md:w-1/2">
                        <img src="<?= base_url('assets/image/hubungikami.png')?>" alt="" width="500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="flex md:flex-row flex-col-reverse justify-between items-center h-fit md:h-[10vh] px-8 py-4">
        <div class="p-2 flex items-center">
            <h1 class="bmn text-black text-3xl">B<span class="text-red-700">M</span>N </h1>
            <span class="text-1xl text-black ps-3">| &copy; Beda Multi Niaga 2025</span>
        </div>
        <div class="p-2">
            <i class="text-black text-1xl mr-3 fa-brands fa-instagram"></i>
            <i class="text-black text-1xl mr-3 fa-brands fa-youtube"></i>
            <i class="text-black text-1xl mr-3 fa-brands fa-linkedin-in"></i>
            <i class="text-black text-1xl mr-3 fa-brands fa-facebook-f"></i>
        </div>
    </footer>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>
</html>