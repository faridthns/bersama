<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Bintara Jaya Persada</title>
    <link rel="stylesheet" href="src\output.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body class="body-dashboard-main">
    <header>
        <nav class="navbar-container h-[10vh] flex items-center">
            <div class="">
                <a href="index.html">
                    <h1 class="bmn ps-8 text-black text-3xl">B<span class="text-red-700">M</span>N</h1>
                </a>
            </div>
        </nav>
    </header>

    <section class="flex justify-center flex-col items-center h-[80vh]">
        <div class="pt-8 text-center">
            <h1 class="text-3xl text-[#0096FF]">Lorem ipsum dolor sit amet</h1>
            <h3 class="pt-3 text-[#FFE607]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, doloribus.</h1>
        </div>
        <div class="flex justify-center my-12 gap-2">
            <div class="advertising text-center border-4 border-red-700 rounded-lg py-6 w-[265px]">
                <h4>Dunia Advertising</h4>
                <a href="<?= base_url('advertising')?>">
                    <button class="mt-4 px-4 py-2 bg-red-700 text-white rounded">See Dashboard</button>
                </a>
            </div>
            <div class="contractor text-center border-4 border-red-700 rounded-lg py-6 gap-3 w-[265px]">
                <h4>Bintara Jaya Persada</h4>
                <a href="<?= base_url('contractor')?>">
                    <button class="mt-4 px-4 py-2 bg-red-700 text-white rounded">See Dashboard</button>
                </a>
            </div>
        </div>
    </section>

    <footer class="flex items-center grid grid-cols-2 bg-gray-800 h-[10vh]">
        <div class="p-2 flex items-center">
            <h1 class="bmn ps-8 text-white text-3xl">B<span class="text-red-700">M</span>N </h1>
            <span class="text-1xl text-white ps-3">| &copy; Beda Multi Niaga 2025</span>
        </div>
        <div class="p-2 justify-self-end">
            <i class="text-white text-1xl mr-3 fa-brands fa-instagram"></i>
            <i class="text-white text-1xl mr-3 fa-brands fa-youtube"></i>
            <i class="text-white text-1xl mr-3 fa-brands fa-linkedin-in"></i>
            <i class="text-white text-1xl mr-3 fa-brands fa-facebook-f"></i>
        </div>
    </footer>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>