<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/output.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php include('connection.php') ?>

    <div class="overflow-hidden max-w-[576px]">
        <div class="relative mb-4">
            <img src="assets/tunangan.JPG" alt="">
            <img src="assets/curve.png" alt="" class="absolute w-full -bottom-1">
        </div>

        <div class="text-center mb-20">
            <h1 data-aos="fade-right" data-aos-delay="100" data-aos-duration="2500" data-aos-anchor-placement="top-bottom">Nur Diantoro</h1>
            <h1>&</h1>
            <h1 data-aos="fade-left" data-aos-delay="100" data-aos-duration="2500" data-aos-anchor-placement="top-bottom">Lidya Rahma</h1>
            <p class="mt-4">Save the date</p>
            <p class="font-bold text-blue-600 mb-4">Sabtu, 10 September 2022</p>
        </div>

        <div class="text-center mb-20 mx-4">
            <p>Bismillahirrahmanirrahimm</p>
            <p class="text-justify">Dengan memohon rahmat dan ridho Allah SWT, kami mengundang Bapak/Ibu/Saudara/i untuk menghadiri pernikahan Putra-Putri kami yang insya Allah akan dilaksanakan pada :</p>
        </div>

        <div class="text-center mb-20">
            <h2>Acara</h2>
            <div class="border rounded mx-4 py-12 mb-4 shadow-md relative overflow-hidden" data-aos="fade-right" data-aos-duration="1200">
                <img src="assets/bunga-03.png" class="h-40 absolute top-1/2 -translate-y-1/2 -left-20">
                <h3 class=" text-red-600">Akad Nikah</h3>
                <p>Sabtu, 10 September 2022</p>
                <p class="text-emerald-600 font-bold">10:00 WIB</p>
                <p>Jl jati petamburan 1 Gg. IV no.23</p>
            </div>
            <div class="border rounded mx-4 py-12 shadow-md relative overflow-hidden" data-aos="fade-left" data-aos-duration="1200">
                <img src="assets/bunga-05.png" class="h-40 absolute top-1/2 -translate-y-1/2 -right-16">
                <h3 class="text-red-600">Resepsi</h3>
                <p>Sabtu, 10 September 2022</p>
                <p class="text-emerald-600 font-bold">12:00 - 15:00 WIB</p>
                <p>Jl jati petamburan 1 Gg. IV</p>
            </div>
        </div>

        <div class="text-center mx-4 mb-20">
            <h2>Lokasi</h2>
            <p class="text-sm">Jl Jati Petamburan I, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta, Indonesia</p>
            <div class="border rounded-lg overflow-hidden shadow-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6369815491014!2d106.80872382922672!3d-6.191191666436952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc699003e2daee4ce!2zNsKwMTEnMjguMyJTIDEwNsKwNDgnMzMuNCJF!5e0!3m2!1sid!2sid!4v1659687760599!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <a href="https://goo.gl/maps/HURRczLgS4FazoNf9" class="w-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded shadow px-4 py-2 text-white block mt-4">Buka di Maps</a>
        </div>

        <div class="mx-4 mb-20">
            <img src="assets/bunga.png" alt="" class="w-full">
        </div>

        <div class="mx-4 mb-20">
            <h2 class="text-center">Amplop Digital</h2>
            <p class="text-center text-sm">Do'a restu anda merupakan karunia yang sangat berarti bagi kami. Jika ada yang ingin memberikan amplop digital untuk pernikahan kami, kami menyediakan pilihan Cashless di bawah ini</p>
            <div class="bg-white rounded shadow-md p-4 mb-2" data-aos="fade-right" data-aos-duration="1200">
                <p class="text-sm mb-2">Nur Diantoro</p>
                <div class="flex">
                    <img src="assets/BCA.svg" width="60px">
                    <input type="text" value="1110159737" id="nur" class="ml-4">
                    <button class="ml-auto" onclick="copyToClipBoard('nur')">Salin</=>
                </div>
            </div>
            <div class="bg-white rounded shadow-md p-4" data-aos="fade-left" data-aos-duration="1200">
                <p class="text-sm mb-2">Lidya Rahma</p>
                <div class="flex">
                    <img src="assets/BCA.svg" width="60px">
                    <input type="text" value="1110153933" id="lidya" class="ml-4">
                    <span class="ml-auto" onclick="copyToClipBoard('lidya')">Salin</span>
                </div>
            </div>
        </div>

        <div class="mb-20 relative">
            <div class="mx-4">
                <h2 class="text-center">Berikan Ucapan</h2>
                <form method="post" action="send-ucapan.php">
                    <div class="w-full relative mb-4">
                        <input type="text" name="nama" id="username" class="px-4 py-2 w-full border-sky-400 focus-visible:outline-none focus:shadow-md border rounded text-input" required>
                        <label for="username" class="absolute left-4 top-1/2 -translate-y-1/2 label duration-200">Nama</label>
                    </div>
                    <div class="w-full relative mb-4">
                        <textarea type="text" name="pesan" id="username" class="px-4 py-2 w-full border-sky-400 focus-visible:outline-none focus:shadow-md border rounded text-input" required rows="3"></textarea>
                        <label for="username" class="absolute left-4 top-4 -translate-y-1/2 label duration-200">Pesan</label>
                    </div>
                    <button type="submit" name="submit" class="px-12 py-2 rounded bg-sky-600 text-white mx-auto block">Kirim</button>
                </form>
            </div>
            <!-- <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-full h-16 absolute bottom-1/2 inline-block z-10"></div> -->
        </div>

        <div class="bg-slate-200 py-10">
            <div class="mb-20 mx-4">
                <h2 class="text-center">Ucapan Mereka</h2>
                <?php while ($ucapan = mysqli_fetch_array($tampil)) { ?>
                    <div class="rounded shadow-md bg-white p-4 relative overflow-hidden mb-4" data-aos="zoom-in" data-aos-anchor-placement="center-bottom">
                        <p class="text-red-600 font-bold"><?= $ucapan['nama']  ?></p>
                        <p class="italic text-sm"><?= $ucapan['pesan'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/main.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>