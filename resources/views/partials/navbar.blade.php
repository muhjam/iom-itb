<nav class="fixed top-0 left-0 right-0 bg-[#003b6f] text-[#ffffff99] py-2 z-50">
  <div class="container mx-auto flex items-center justify-between">
    <div class="flex items-center space-x-4">
      <a href="#" class="text-sm hover:text-white">EN</a>
      <a href="#" class="text-sm hover:text-white">ID</a>
    </div>
    <div class="flex items-center space-x-4">
      <a href="#" class="text-sm hover:text-white">My ITB</a>
      <a href="#" class="text-sm hover:text-white"><i class="fa fa-envelope"></i> Email</a>
      <a href="#" class="text-sm hover:text-white"><i class="fa fa-search"></i> Search</a>
    </div>
  </div>
</nav>

<nav class="fixed top-[36px] left-0 right-0 bg-white shadow-lg px-4 py-3 z-50">
  <div class="container mx-auto flex items-center justify-between">
    <a class="text-[#003b6f] font-bold flex items-center" href="/">
      <img src="/images/logo.png" alt="IOM ITB Logo" class="w-16 h-auto mr-3">
      <div>
        <p class="text-lg font-bold leading-tight">Ikatan Orang Tua Mahasiswa</p>
        <p class="text-sm leading-tight">Institut Teknologi Bandung</p>
      </div>
    </a>
    <button class="text-[#003b6f] lg:hidden" id="navbarToggle" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="navbarNav">
      <ul class="flex flex-col lg:flex-row lg:space-x-4">
        <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="/">BERANDA</a>
        </li>
        <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="#">PROFIL</a>
        </li>
        <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="#">KEGIATAN</a>
        </li>
        <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="#">PENGAJUAN</a>
        </li>
        <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="#">DONASI</a>
        </li>
        <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="#">LAPORAN</a>
        </li>
        <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="#">ARSIP</a>
        </li>
        <!-- <li class="nav-item">
          <a class="text-[#003b6f] hover:opacity-80 px-3 py-2" aria-current="page" href="#">LOGIN</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<script>
  // Toggle Navbar
  document.getElementById('navbarToggle').addEventListener('click', function() {
    var navbarNav = document.getElementById('navbarNav');
    if (navbarNav.classList.contains('hidden')) {
      navbarNav.classList.remove('hidden');
    } else {
      navbarNav.classList.add('hidden');
    }
  });
</script>
