@extends('layouts.frontend')

@section('content')

<section class="flex items-center hero">
  <div class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center px-10 flex flex-col justify-center ">
    <h1 class="text-3xl md:text-3xl  text-yellow-500 leading-tight font-semibold">
      Solusi Terbaik untuk Produksi <br> Sepatu Bayi Anda
    </h1>
    <h2 class="px-8 text-base md:text-2xl font-semibold text-white md:text-black md:px-0 my-6 tracking-wide">
      Kami menawarkan solusi terbaik untuk produksi sepatu bayi Anda. Dengan tim profesional kami yang berpengalaman,
      kami memastikan bahwa setiap produk yang kami hasilkan memenuhi standar kualitas tertinggi dan membuat Anda puas.
    </h2>
    <div>
      <a href="#browse-the-room"
        class="bg-yellow-500 text-white font-semibold hover:bg-yellow-600   rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200">KONSULTASI
        GRATIS
      </a>
    </div>
  </div>
  <div class="w-full inset-0 md:relative md:w-1/2">
    <div class="relative hero-image">
      <div class="overlay inset-0 bg-black bg-opacity-60 z-10"></div>
      <div class="overlay right-0 bottom-0 md:inset-0">
        <button class="video hero-cta focus:outline-none z-30 modal-trigger" data-content='<div class="w-screen pb-56 md:w-96 md:pb-56 relative z-50">
              <div class="absolute w-full h-full">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://www.youtube.com/embed/3h0_v1cdUIA"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>
            </div>'>
        </button>
      </div>
      <img src="/frontend/images/content/image-section-1.png" alt="hero 1"
        class="absolute inset-0 md:relative w-full h-full object-cover object-center" />
    </div>
  </div>
</section>


<section class="relative flex flex-col py-5 bg-gray-900 text-white md:mt-4">
  <div class=" px-5 md:px-10 py-5">
    <h2 class="text-2xl p-4 font-bold text-center">Peluang Bisnis Masa Kini</h2>
    <p class="md:text-center font-semibold text-lg mb-2">Halo Calon Pengusaha, Apakah kamu ingin memiliki produk sepatu
      bayi dan
      balita dengan Merk
      sendiri atau Desain sendiri </p>
    <p class="md:text-center font-semibold text-lg mb-2">Kami sudah membantu beberapa toko grosir ataupun toko online
      untuk
      memenuhi pesanannya selama lebih dari 6 tahun
    </p>
    <p class="md:text-center font-semibold text-lg mb-2">Produksi kami telah terbukti memuaskan dengan ketelitian dan
      kualitas.
      Masih mau menunggu ?
    </p>
    <p class="md:text-center font-semibold text-lg mb-2">Tunggu apa lagi ?</p>
    <div class="mt-3 w-full bg-green-600 rounded text-center max-w-md mx-auto ">
      <a href="#" class="flex items-center justify-center gap-4 px-4 py-2 text-white uppercase font-semibold text-lg">
        <img class="h-8 w-8" src="/images/icon-whatsapp.svg" alt="" srcset="" />Konsultasi Gratis</a>
    </div>
  </div>
</section>
<section class="relative flex flex-col">
  <div class="px-5 md:px-10 py-5">
    <p class="text-2xl p-4 font-bold text-center bg-yellow-500">Berikut Beberapa Model Yang Sudah Kami Kerjakan</p>
    <div class="owl-carousel owl-theme py-5" id="carousel1">
      <img src="/images/sepatu/sepatu1.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/sepatu/sepatu2.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/sepatu/sepatu4.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/sepatu/sepatu6.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/sepatu/sepatu7.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/sepatu/sepatu5.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/sepatu/sepatu9.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
    </div>
  </div>
</section>
<section class="relative flex flex-col">
  <div class=" px-5 md:px-10 py-5">
    <div class="mb-10">
      <h3 class="text-2xl p-4 font-bold text-center">Kenapa Kamu Harus Produksi Di Kami ?</h3>
      <ul class="md:flex md:flex-col md:items-center">
        <li class="list-decimal font-semibold text-lg ml-4">Harga Kami Dapat Bersaing</li>
        <li class="list-decimal font-semibold text-lg ml-4">Design Sesuka Hati Dengan Bahan Berkualitas</li>
        <li class="list-decimal font-semibold text-lg ml-4">Dapat Memiliki Identitas Produk Dengan Menggunakan Merk
          Sendiri</li>
        <li class="list-decimal font-semibold text-lg ml-4">Dan Point Paling Penting, Untuk Design Yang Di Inginkan.
          GRATIS !!!</li>
      </ul>
      <p class="text-2xl p-4 font-bold text-center">Mau Sampai Kapan Menunggu ?</p>
      <div class="mt-3 w-full bg-green-600 rounded text-center max-w-md mx-auto ">
        <a href="#" class="flex items-center justify-center gap-4 px-4 py-2 text-white uppercase font-semibold text-lg">
          <img class="h-8 w-8" src="/images/icon-whatsapp.svg" alt="" srcset="" />Konsultasi Gratis</a>
      </div>
      <p class="text-lg md:text-center font-semibold my-5">Dengan jasa produksi kami, Anda tidak perlu khawatir tentang
        pemrosesan dan produksi sepatu bayi Anda. Kami memastikan bahwa produk akan disiapkan tepat waktu dan memenuhi
        standar kualitas yang Anda harapkan. Dan yang
        terbaik, kami memberikan harga yang kompetitif dan bersaing.</p>
    </div>
  </div>
</section>
<section class="relative flex flex-col py-5 bg-gray-900 text-white">
  <div class=" px-5 md:px-10 py-5 text-center">
    <p class="text-2xl mb-4">Hanya Dengan Harga Kisaran</p>
    <div class="text-4xl mb-4 mx-auto w-full max-w-md bg-white text-red-600 font-bold border-red-600 rounded-md py-2">
      <span class="animate-pulse  text-center">Rp. 200.000
        / KODI</span>
    </div>
    <p class="text-2xl mb-4">Kamu dapat memiliki produk dengan design dan merk sendiri</p>
    <div class="mt-3 w-full bg-green-600 rounded text-center max-w-md mx-auto">
      <a href="#" class="flex items-center justify-center gap-4 px-4 py-2 text-white uppercase font-semibold text-lg">
        <img class="h-8 w-8" src="/images/icon-whatsapp.svg" alt="" srcset="" />Konsultasi Gratis</a>
    </div>
  </div>
</section>
<section class="relative flex flex-col mt-10">
  <div class=" px-5 md:px-10 py-5">
    <p class="text-2xl p-4 font-bold text-center bg-yellow-500">Testimoni Pembeli</p>
    <div class="owl-carousel owl-theme py-5">
      <img src="/images/testimoni/testimoni1.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/testimoni/testimoni2.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/testimoni/testimoni4.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/testimoni/testimoni6.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/testimoni/testimoni7.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/testimoni/testimoni5.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
      <img src="/images/testimoni/testimoni3.jpg" alt="" class="object-cover object-center w-full h-full rounded-md">
    </div>
  </div>
</section>

<section class="relative flex flex-col py-5 bg-gray-900">
  <div class=" px-5 md:px-10 py-5">
    <p class="text-white text-center">Hubungi kami sekarang untuk solusi produksi sepatu bayi terbaik. Kami akan
      memastikan bahwa
      produksi sepatu bayi
      Anda berjalan lancar dan memuaskan</p>
    <div class="mt-2 w-full bg-green-600 rounded text-center max-w-md mx-auto ">
      <a href="#" class="flex items-center justify-center gap-4 px-4 py-2 text-white uppercase font-semibold text-lg">
        <img class="h-8 w-8" src="/images/icon-whatsapp.svg" alt="" srcset="" />Konsultasi Gratis</a>
    </div>
  </div>
</section>
@endsection