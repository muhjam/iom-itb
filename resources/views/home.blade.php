@extends('layouts.main')

@section('container')
<div class="swiper-container overflow-hidden">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="relative h-[100vh] bg-cover bg-no-repeat" style="background-image: url('https://kemahasiswaan.itb.ac.id/assets/cms/uploads/berita/670fe196112d27cd548351d85ac7bd02.png');">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="relative h-[100vh] bg-cover bg-no-repeat" style="background-image: url('https://kemahasiswaan.itb.ac.id/assets/cms/uploads/berita/076ebc77fc20055585085c1ac10b21e5.png');">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="relative h-[100vh] bg-cover bg-no-repeat" style="background-image: url('https://kemahasiswaan.itb.ac.id/assets/cms/uploads/berita/076ebc77fc20055585085c1ac10b21e5.png');">
      </div>
    </div>
    <!-- Tambahkan lebih banyak slide di sini -->
  </div>
  <!-- Navigasi -->
  <div class="swiper-button-next absolute top-1/2 transform -translate-y-1/2 right-4 bg-white rounded-full shadow-lg cursor-pointer p-2 opacity-[0.8] hover:opacity-[1]">
    <svg class="w-6 h-6 text-[#003b6f]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
    </svg>
  </div>
  <div class="swiper-button-prev absolute top-1/2 transform -translate-y-1/2 left-4 bg-white rounded-full shadow-lg cursor-pointer p-2 opacity-[0.8] hover:opacity-[1]">
    <svg class="w-6 h-6 text-[#003b6f]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5l-7 7 7 7"></path>
    </svg>
  </div>
</div>

<!-- Ikon Media Sosial -->
<div class="absolute bottom-0 left-0 right-0 bg-[#003b6f] p-[6px] z-20">
  <div class="flex justify-center w-full gap-2 h-[48px] p-[4px]">
    <a href="#" class="flex justify-center items-center text-center bg-[#08477E] cursor-pointer" style="width:14.2%" data-toggle="tooltip" data-original-title="Instagram" arial-discribedby="tooltip"><img class="w-[20px]" src="/images/instagram.svg"></a>
    <a href="#" class="flex justify-center items-center text-center bg-[#08477E] cursor-pointer" style="width:14.2%"><img class="w-[20px]" src="/images/whatsapp.svg"></a>
    <a href="#" class="flex justify-center items-center text-center bg-[#08477E] cursor-pointer" style="width:14.2%"><img class="w-[20px]" src="/images/twitter.svg"></a>
    <a href="#" class="flex justify-center items-center text-center bg-[#08477E] cursor-pointer" style="width:14.2%"><img class="w-[20px]" src="/images/line.svg"></a>
    <a href="#" class="flex justify-center items-center text-center bg-[#08477E] cursor-pointer" style="width:14.2%"><img class="w-[20px]" src="/images/tiktok.svg"></a>
    <a href="#" class="flex justify-center items-center text-center bg-[#08477E] cursor-pointer" style="width:14.2%"><img class="w-[20px]" src="/images/youtube.svg"></a>
    <a href="#" class="flex justify-center items-center text-center bg-[#08477E] cursor-pointer" style="width:14.2%"><img class="w-[20px]" src="/images/facebook.svg"></a>
  </div>
</div>

<div class="bg-white">
    <div class="flex items-center">
    <img src="/images/logo.png" alt="IOM-ITB" class="w-1/2 object-cover">
    <div class="w-[45%]">
        <h4 class="text-[32px] capitalize text-[#003A6E] font-semibold">Ikatan Orang Tua Mahasiswa</h4>
        <h5 class="text-[24px] capitalize text-[#003A6E]">Institut Teknologi Bandung</h5>
        <br>
        <p>IOM-ITB berfungsi sebagai mitra ITB, khususnya dalam pembinaan kelangsungan pendidikan yang bersifat sosial dan kekeluargaan.</p>
        <br>
        <p>IOM-ITB berfungsi sebagai mitra ITB, khususnya dalam pembinaan kelangsungan pendidikan yang bersifat sosial dan kekeluargaan.
</p>
    </div>
    </div>
</div>

<div class="bg-[#F2F7FC] py-[64px]">
    <nav class="bg-[#F2F7FC] shadow mb-8">
    <div class="mx-auto px-6">
        <div class="flex items-center py-4 gap-6">
            <div class="text-lg font-semibold text-blue-800">BERITA</div>
            <div class="flex space-x-4 text-gray-700">
                <a href="#" class="hover:text-blue-800">SEMUA</a>
                <a href="#" class="hover:text-blue-800">PRESTASI</a>
                <a href="#" class="hover:text-blue-800">BEASISWA</a>
                <a href="#" class="hover:text-blue-800">PENGUMUMAN</a>
            </div>
        </div>
    </div>
</nav>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-[24px]">
    <!-- Card Berita -->
    @foreach ($news as $item)
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <img src="{{ $item->image }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <div class="flex justify-between items-center text-sm text-gray-600 mb-2">
                    <span>{{ $item->date }}</span>
                    <span class="flex items-center"><i class="fas fa-eye mr-1"></i>{{ $item->views }}</span>
                </div>
                <h3 class="text-blue-800 font-semibold">{{ Str::limit($item->title, 40) }}</h3>
                <p class="text-gray-700 mt-2">{{ Str::limit($item->excerpt, 100) }}</p>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-8 text-center">
    <a href="#" class="bg-[#F2F7FC] border border-[#003B6F] text-[#003B6F] px-4 py-2 rounded hover:bg-[#003B6F] hover:text-white cursor-pointer duration-150">Selengkapnya</a>
</div>
</div>

<div class="bg-white py-[104px] px-[42px] text-center">
    <div class="mb-[24px]">
        <h4 class="text-[42px] capitalize text-[#003A6E] font-semibold">VISI </h4>
        <p class="text-[22px] capitalize text-[#003A6E]">Bersama ITB, melahirkan anak bangsa yang cerdas, tangguh dan  berakhlak mulia.</p>
    </div>
    <div class="mb-[24px]">
        <h4 class="text-[42px] capitalize text-[#003A6E] font-semibold"> MISI</h4>
        <p class="text-[22px] capitalize text-[#003A6E]">Memotivasi dan membantu mahasiswa ITB untuk mengatasi kendala dalam studinya serta berperan aktif dalam pembinaan watak, kepedulian sosial dan budaya.
</p>
    </div>
</div>

<div class="bg-[#003B6F] py-[64px]">
    <h2 class="text-[24px] capitalize text-white font-semibold text-center mb-[42px]">VIDEO</h2>
    <div class="flex justify-center gap-8" style="padding: 0px">
    <div class="col-md-3 text-center">
        <hr class="blue">
            <iframe width="100%" height="180px" class="embed-responsive-item" src="https://www.youtube.com/embed/Rp6d9zQJsjk?si" allowfullscreen=""></iframe>
        </div>
                  
                  <div class="text-center">
                   
                    <hr class="blue">
                    
                     <iframe width="100%" height="180px" class="embed-responsive-item" src="https://www.youtube.com/embed/SjcNKHzNb98?si" allowfullscreen=""></iframe>
                  
            
                </div>
                                <div class="col-md-3 text-center">
                   
                    <hr class="blue">
                    
                     <iframe width="100%" height="180px" class="embed-responsive-item" src="https://www.youtube.com/embed/C8yc-4VEkJo" allowfullscreen=""></iframe>
                  
            
                </div>
                                <div class="text-center">
                   
                    <hr class="blue">
                    
                     <iframe width="100%" height="180px" class="embed-responsive-item" src="https://www.youtube.com/embed/AvrMUHcEAgQ?si=Jr0M8Ehnp34DFFMQ?rel=0&amp;autoplay=1&amp;mute=1" allowfullscreen=""></iframe>
                  
            
                </div>
    </div>
</div>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="module">
  var swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
// If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  });
</script>

<!-- Tambahkan FontAwesome untuk ikon -->
@endsection    <!-- <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-white">
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-briefcase"></i>
          <span>Karir</span>
        </a>
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-user-md"></i>
          <span>Konseling</span>
        </a>
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-graduation-cap"></i>
          <span>Beasiswa</span>
        </a>
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-users"></i>
          <span>Organisasi</span>
        </a>
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-handshake-o"></i>
          <span>KKN & Pengmas Mahasiswa</span>
        </a>
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-trophy"></i>
          <span>Prestasi</span>
        </a>
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-calendar"></i>
          <span>Kegiatan</span>
        </a>
        <a href="#" class="flex items-center space-x-2">
          <i class="fa fa-line-chart"></i>
          <span>Tracer Study</span>
        </a>
      </div> -->