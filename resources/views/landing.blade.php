<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title bar -->
    <title>Landing Page | SerbaSegar</title>

    <!-- link cdn tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- link cdn custom animated-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- css line -->
    <style>
      #hamburger-menu-button span{
        transition: .2s;
    }
    .active span:nth-child(1){
        transform: rotate(45deg);
        width: 1.75rem;
        transform-origin: 1px 0;
    }
    .active span:nth-child(2){
        opacity: 0;
    }
    .active span:nth-child(3){
        transform: rotate(-45deg);
        width: 1.75rem;
        transform-origin: 3px 90%;
    }
    .ambilSendiri,
    .datangKeRumah,
    .tawarHarga{
      background-image: url(ambilSendiri.jpg);
    }
    .datangKeRumah{
      background-image: url(datangKeRumah.jpg);
    }
    .tawarHarga{
      background-image: url(tawarHarga.jpg);
    }
    .gbrSayur{
      background-image:url(gbrSayur.jfif);
      width: 100%;
      height: 44rem;
      background-repeat: no-repeat;
      background-size: cover;
      border-radius: 10px;
    }

    .spinnerImg{
      background-image: url(logo.svg);
      width: 60px;
      height: 80px;
      background-repeat: no-repeat;
      background-size: cover;
    }

    @media only screen and (max-width: 1020px) {
      #mobile-menu{
        box-shadow: 0 2px 10px rgba(0,0,0,.3)
      }
    }

    #mobile-menu a{
      position: relative;
    }
    #mobile-menu a:before{
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 3px;
      background-color: #7EAC08;
      transition: 0.3s;
    }
    #mobile-menu a:hover:before{
      width: 100%;
    }
    .spinnerContainer{
      position: relative;
    }
    .spinnerContainer:before{
      content: "";
      border-radius: 50%;
      border: 2px solid transparent;
      border-top: 3px solid green;
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      animation: spin 1s linear infinite;
    }
    @keyframes spin{
      0%{
        transform: rotate(0)
      }
      100%{
        transform: rotate(360deg)
      }
    }
    </style>

    <!-- customize -->
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                navy: '#475A73',
                green: '#7EAC08',
              }
            },
            fontFamily: {
              'sans': 'montserrat',
              'serif': 'playfair display',
            }
          }
        }
      </script>

    <!-- logo -->
    <link rel="icon" href="/logo.svg" type="image/png">
</head>
<body>
    <div class="spinner justify-center items-center flex z-[999999] fixed top-0 bottom-0 right-0 left-0 bg-white">
      <div class="spinnerContainer w-32 h-32 bg-white shadow-xl rounded-full flex justify-center items-center">
        <div class="spinnerImg"></div>
      </div>
    </div>
    <header class="shadow-lg fixed w-full top-0 z-[999] bg-white">

      <!-- menu bar -->
      <div class="flex justify-between">
        <nav id="navbar" class="w-full relative text-navy py-4 lg:py-6 lg:gap-40 lg:pr-8 lg:flex lg:justify-between">
          <a class="flex justify-start px-8 py-4 lg:px-32 lg:py-2" href="#Beranda"><img class="md:w-[480] lg:w-[500]" id="logo" src="/Frame 2.svg"></a>
          <div id="mobile-menu" class="lg:flex lg:bg-transparent text-left rounded-md hidden lg:right-0 lg:top-0 right-10 top-[100%] absolute flex flex-col z-[150] bg-white md:justify-end pt-2 sm:pl-32 sm:pl-52 text-2xl text-right font-sans lg:flex-row lg:pr-10 lg:gap-x-7 xl:gap-x-20">
            <a class="lg:text-[18px] xl:text-[24px] m-8 lg:my-4 lg:mx-1 py-3 px-4 lg:px-0 focus:border-b focus:border-b-4 focus:border-green focus:text-green" href="#Beranda">Beranda</a>
            <a class="lg:text-[18px] xl:text-[24px] m-8 lg:my-4 lg:mx-1 py-3 px-6 lg:px-0 focus:border-b focus:border-b-4 focus:border-green focus:text-green" href="#Tentang kami">Tentang kami</a>
            <a class="lg:text-[18px] xl:text-[24px] m-8 lg:my-4 lg:mx-1 py-3 px-6 lg:px-0 focus:border-b focus:border-b-4 focus:border-green focus:text-green" href="#Fitur unggulan">Fitur unggulan</a>
            <a class="lg:text-[18px] xl:text-[24px] m-8 lg:my-4 lg:mx-1 py-3 px-4 lg:px-0 focus:border-b focus:border-b-4 focus:border-green focus:text-green" href="#Kontakkami">Kontak kami</a>
          </div>
        </nav>
      </div>
      <!-- hamburger menu button -->
      <div class="lg:hidden flex justify-end m-6 md:mt-6 absolute top-0 right-0 left-50">
        <button id="hamburger-menu-button" class="flex flex-col items-end p-5">
          <span class="block w-5 h-1 bg-black mb-1 rounded-sm"></span>
          <span class="block w-7 h-1 bg-black mb-1 rounded-sm"></span>
          <span class="block w-4 h-1 bg-black mb-1 rounded-sm"></span>
        </button>
      </div>
    </header>
    <main>

      <!-- dekor -->
      <img class="absolute top-0 z-[-999] right-0" src="Group 2.svg">
      <img class="absolute top-0 z-[-999] left-0" src="Group 1.svg">

      <!-- Segarkan dapur anda -->
      <div id="Beranda" class="flex flex-col mt-18 xl:flex-row xl:flex xl:justify-between lg:mt-40 lg:mb-20 xl:justify-end mx-10 xl:mx-20">
        <div class="mt-32 lg:mt-10 xl:mt-28 z-0 xl:px-18 xl:w-1/2 max-w-screen-2xl">
          <h1 style="font-family: 'Playfair Display', serif;" class="text-navy font-sans text-5xl lg:text-6xl xl:text-7xl font-semibold leading-normal lg:leading-[5rem]">Segarkan <span class="text-green">Dapur </span> anda dengan satu <span class="text-green">klik !</span></h1>
          <p class="text-navy text-xl lg:text-2xl xl:text-3xl lg:mb-20 font-regular mt-8 lg:font-normal lg:leading-normal xl:leading-relaxed">Tukang sayur terbaik, kini di ujung jari Anda! Belanja sayuran dan bahan masakan segar langsung dari rumah. Hemat waktu dan nikmati kesegaran tanpa repot, semua lewat aplikasi kami. Belanja mudah dan menyenangkan setiap hari !</p>
          <a href="https://www.figma.com/proto/NSja7GG9TNAxqVqWj8bAeg/Relyst-Cluster-Design?type=design&node-id=184-219&t=44anlpjD6OWSRNSV-1&scaling=scale-down&page-id=176%3A114&starting-point-node-id=247%3A477&show-proto-sidebar=1&mode=design"><button class="transition duration-300 flex w-full xl:w-1/2 flex justify-center items-center font-sans border border-2 border-green mt-8 px-[26] lg:p-4 py-2 text-3xl text-green rounded-lg cursor-pointer hover:text-white hover:bg-green gap-x-2 lg:gap-x-4 group">Cari sayur <div class="transition duration-300 ml-3 mt-1 w-3 h-3 border-t-2 border-r-2 rotate-45 border-green group-hover:border-white"></div></button></a>
        </div>
        <div class="flex justify-center xl:justify-end items-center w-full mt-8 max-w-screen-2xl">
          <img class="w-full lg:w-2/3 xl:w-3/4" src="SectionTop.png" alt="section 1">
        </div>
      </div>

      <!-- Tentang inovasi kami -->
      <div id="Tentang kami" class="flex flex-col pt-32 mx-10 lg:mx-20 ">
        <div class="w-full flex flex-col lg:flex-row lg:flex lg:items-center lg:w-full ">
          <div class="justify-center lg:w-1/2">
            <h1 style="font-family: 'Playfair Display', serif;" class="text-5xl text-navy font-semibold leading-normal lg:w-full">Tentang <span class="text-green">inovasi</span> yang kami lakukan</h1>
            <p class="text-navy text-left text-2xl font-regular mt-4">@Relyst Cluster</p>
          </div>
          <div class="lg:my-16 lg:w-1/2 flex justify-end">
            <p class="mb-10 lg:mb-0 text-navy text-lg font-regular mt-8 lg:font-normal lg:text-2xl lg:w-[95%]">Kami berkomitmen untuk menciptakan aksesibilitas yang mudah terhadap bahan pangan, menjadikan setiap rumah sebagai tempat yang mudah diakses untuk mendapatkan sayuran segar dan sehat. Melalui platform kami, kami ingin mendukung usaha mikro, kecil, dan menengah (UMKM) dengan memberikan saluran distribusi yang lebih luas dan stabil.</p>
          </div>
        </div>
        <div class="gbrSayur"></div>
      </div>

      <!-- Fitur Unggulan -->
      <div id="Fitur unggulan" class="flex flex-col pt-32 mx-10 lg:mx-20">
        <div class="justify-center mb-24 text-navy font-semibold text-5xl mx-10 text-center">
          <h1 style="font-family: 'Playfair Display', serif;">Fitur <span class="text-green">unggulan</span> serba <span class="text-green">segar</span></h1>
        </div>
        <div class="flex flex-wrap gap-5 lg:gap-10 justify-center lg:m-auto w-full" data-aos="fade-up"  data-aos-duration="800">

          <!-- card 1 -->
          <div class="border border-2 lg:flex-1 xl:flex-1 rounded-2xl sm:mb-12 shadow-lg overflow-hidden">
            <div class="ambilSendiri h-[450px] lg:h-[300px] md:h-[250px] w-full bg-cover bg-no-repeat"></div>
            <div class="container font-sans">
              <h1 class="m-8 text-green text-4xl font-semibold mx-8 sm:mt-10 md:mt-10">Ambil sendiri</h1>
              <p class="text-justify text-navy text-xl font-regular m-8">Konsumen pilih waktu ambil yang nyaman, pengalaman belanja efisien. "Ambil Sendiri" dukung penjual, kurangi biaya kirim, dan tingkatkan keterlibatan konsumen.</p>
            </div>
          </div>

          <!-- card-2 -->
          <div class="border border-2 lg:flex-1 xl:flex-1 rounded-2xl sm:mb-12 shadow-lg overflow-hidden">
            <div class="datangKeRumah h-[450px] lg:h-[300px] md:h-[250px] w-full bg-cover bg-no-repeat"></div>
            <div class="container font-sans">
              <h1 class="text-green text-4xl font-semibold m-8">Datang ke rumah</h1>
              <p class="text-justify text-navy text-xl font-regular m-8">Dengan akses langsung ke pelanggan di pintu rumah, fitur ini memanjakan konsumen dan memberdayakan penjual sayur, menciptakan ekosistem berkelanjutan bagi semua.</p>
            </div>
          </div>

          <!-- card-2 -->
          <div class="border border-2 lg:flex-2 xl:flex-1 rounded-2xl sm:mb-12 shadow-lg overflow-hidden">
            <div class="tawarHarga h-[450px] lg:h-[300px] md:h-[250px] w-full bg-cover bg-no-repeat"></div>
            <div class="container font-sans">
              <h1 class="text-green text-4xl font-semibold m-8">Tawar harga</h1>
              <p class="text-justify text-navy text-xl font-regular m-8">Konsumen dapat menyesuaikan harga sesuai anggaran dan preferensi pribadi, menciptakan pengalaman berbelanja yang lebih positif.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- hubungi kami -->
      <div id="Kontakkami" class="flex flex-col justify-center items-center pt-32 px-8 mb-20"d>
        <div class="text-navy text-center text-6xl font-semibold mb-24 lg:mx-20 max-w-screen-2xl">
          <h1 style="font-family : 'Display Playfair', serif;">Hubungi <span class="text-green">kami</span></h1>
        </div>
        <div class="w-full border border-2 border-green rounded-2xl shadow-md m-8 mx-10 lg:flex lg:flex-row lg:mb-40 lg:mx-20" data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom" data-aos-duration="800" data-aos-offset="-500">
          <img class="w-full max-w-screen-2xl" src="hubungi kami.png">
          <div class="flex flex-col font-sans p-10 lg:gap-y-4 w-full">
            <label class="ml-4 mt-8 lg:mt-0 lg:pt-8 font-semibold text-2xl" for="nama">Nama</label>
            <input type="text" id="name" name="nama" class="w-full border border-2 border-navy rounded-lg my-4 lg:py-4 h-12 px-4">
            <label class="ml-4 font-semibold text-2xl mt-6" for="email">Email</label>
            <input type="text" id="email" name="email" class="w-full border border-2 border-navy rounded-lg my-4 lg:py-4 h-12 px-4">
            <label class="ml-4 font-semibold text-2xl mt-6" for="pesan">Pesan</label>
            <textarea name="pesan" id="pesan" cols="35" rows="5" class="w-full border border-2 border-navy rounded-lg my-4 p-4 lg:mb-4"></textarea>
            <button class="border border-2 border-green text-2xl bg-green font-sans hover:bg-white hover:text-green text-white rounded-lg cursor-pointer py-6 my-6 sm:px-24 sm:py-4 md:py-6 lg:px-6 lg:py-4 lg:mt-14 lg:my-0 transition duration-300 lg:mr-80">Kirim</button>
          </div>
        </div>
      </div class="mb-12">
    </main>
    <footer>

      <!-- bg element -->
      <div class="bg-green flex flex-col lg:flex lg:flex-row w-full px-12">
        <div class="my-6 lg:gap-y-8 justify-center items-center lg:mb-12 lg:mt-24">
          <div class="my-6 sm:flex sm:justify-center lg:justify-start">
            <img class="w-[40rem] lg:w-[20rem]" src="logo footer.svg">
          </div>
          <div class="flex flex-col justify-center lg:flex lg:flex-row lg:gap-4 lg:items-start">
            <input class="text-white placeholder-white font-sans text-2xl p-4 lg:px-4 lg:p-2 border border-2 border-white bg-green rounded-lg my-4 text-center lg:placeholder:text-xl" placeholder="Masukkan emailmu" type="text">
            <button class="text-2xl border border-2 border-white shadow-lg rounded-lg px-24 py-4 bg-white hover:bg-green hover:text-white md:py-6 md:text-3xl lg:text-xl lg:p-2 lg:my-4 xl:px-10 transition duration-300">Kirim</button>
          </div>
          <div class="flex flex-col mt-10 mb-10 text-xl text-white font-normalmt-12 lg:text-2xl lg:pt-6" style="font-family : 'inter', sans;">
            <p class="sm:flex sm:justify-center lg:justify-start">Copyright 2023 Relyst</p>
            <p class="sm:flex sm:justify-center lg:justify-start">Relyst Cluster</p>
          </div>
        </div>

        <!-- navbar footer -->
        <div class="md:m-auto flex items-center lg:mt-24 lg:justify-end" style="font-family : 'inter', sans;">
          <div class="lg:flex lg:flex-col lg:justify-center lg:gap-y-10">
            <div class="flex flex-col text-white lg:px-24 lg:flex lg:flex-row lg:gap-16 md:flex md:flex-row md:flex-wrap md:justify-between">
              <div class="flex flex-col text-2xl lg:text-xl font-normal gap-y-2 lg:gap-y-4 mb-4 mt-2">
                <h1 class="font-semibold mb-4 text-2xl">Informasi detail</h1>
                <a href="#">Utama</a>
                <a href="#">Tentang kami</a>
                <a href="#">Unggulan</a>
              </div>
              <div class="flex flex-col text-2xl lg:text-xl font-normal gap-y-2 lg:gap-y-4 mb-4 mt-2 md:flex">
                <h1 class="font-semibold mb-4 text-2xl">Sumber daya</h1>
                <a href="#">Blog</a>
                <a href="#">Customer service</a>
                <a href="#">Panduan</a>
              </div>
              <div class="flex flex-col text-2xl lg:text-xl font-normal gap-y-2 lg:gap-y-2 mb-4 mt-2 lg:mx-0 md:my-4 lg:my-0 lg:mt-2">
                <h1 class="font-semibold mb-4 text-2xl">Website kami</h1>
                <a href="#Beranda">Beranda</a>
                <a href="#Tentang kami">Tentang kami</a>
                <a href="#Fitur unggulan">Fitur unggulan</a>
                <a href="#Kontakkami">Kontak kami</a>
              </div>
            </div>
            <div class="my-8 text-white text-xl font-normal leading-normal md:text-center lg:text-left lg:w-2/3 lg:text-2xl lg:px-24 lg:my-8">
              <p class="lg:font-regular">XXXX-XXXX-XXXX | RelystCluster1212@gmail.com
                Projek Pitching Skomda 2023</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      const hamburger = document.querySelector('#hamburger-menu-button');
      const navMenu = document.querySelector('#mobile-menu')
      const spinner = document.querySelector('.spinner')
      
      window.addEventListener('load', ()=> {
        setTimeout(()=>{
          spinner.classList.add('hidden')
        }, 2000)
      })
      
      hamburger.addEventListener('click', function(){
          hamburger.classList.toggle('active')
          navMenu.classList.toggle('hidden')
      })
      
      //klik selain hamburger bikin hamburger ke close
      window.addEventListener('click', function(e){
          if(e.target != hamburger && e.target!= navMenu){
              hamburger.classList.remove('active')
              navMenu.classList.add('hidden')
          }
      });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>