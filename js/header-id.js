document.getElementById('header-placeholder').innerHTML = `
  <header class="sticky top-0 bg-white shadow-sm z-50 border-b border-gray-100">
    <div class="container mx-auto flex items-center justify-between py-2 md:py-4">

      <div id="logo">
        <a href="../id/index.html" class="header-logo inline-flex">
          <img src="../images/logo_wcs.png" alt="PT Wahana Ciptasinatria">
          <span class="text-xs md:text-base flex lg:hidden xl:flex ml-2 uppercase">PT Wahana Ciptasinatria</span>
        </a>
      </div>

      <nav class="hidden lg:flex items-center space-x-2 lg:space-x-6 font-semibold text-gray-900 relative">
        <a href="../id/about.html" class="md:px-1">Tentang Kami</a>

        <div class="relative group px-1">
          <button class="flex items-center space-x-1 group-hover:text-primary">
            <span>Solusi &amp; Layanan</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="font-medium absolute left-0 mt-2 py-2 min-w-64 bg-white shadow-lg rounded-md z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 overflow-hidden">
            <a href="../id/index.html?tab=infrastructure#solutionServices" class="block px-8 py-2 hover:text-primary">Solusi Jaringan dan Infrastruktur</a>
            <a href="../id/index.html?tab=application#solutionServices" class="block px-8 py-2 hover:text-primary">Solusi Keamanan</a>
            <a href="../id/index.html?tab=service#solutionServices" class="block px-8 py-2 hover:text-primary">Solusi Layanan</a>
            <a href="../id/index.html?tab=non-erp#solutionServices" class="block px-8 py-2 hover:text-primary">Advanced Application Solutions</a>
            <a href="../id/index.html?tab=electronic-security#solutionServices" class="block px-8 py-2 hover:text-primary">Sistem Keamanan Elektronik</a>
          </div>
        </div>

        <a href="../id/index.html#featured-stories" class="md:px-1">Klien Kami</a>
        <a href="../id/index.html#strategicAlliances" class="md:px-1">Mitra Kami</a>

        <div class="flex items-center space-x-2 text-sm font-medium">
          <a href="../index.html" class="flex items-center gap-1 hover:text-primary" title="English">
            <span class="text-base">&#127468;&#127463;</span>
            <span>EN</span>
          </a>
          <span class="text-gray-300">|</span>
          <a href="../id/index.html" class="flex items-center gap-1 text-primary font-bold" title="Bahasa Indonesia">
            <span class="text-base">&#127470;&#127465;</span>
            <span>ID</span>
          </a>
        </div>

        <div>
          <a href="../id/contact.html" class="btn-primary">Hubungi Kami</a>
        </div>
      </nav>

      <div class="lg:hidden">
        <button id="menu-toggle" class="focus:outline-none">
          <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-md border-t flex flex-col" style="height: calc(100vh - 67px)">
      <ul>
        <li class="border-b">
          <a href="../id/about.html" class="flex items-center gap-2 px-4 py-3">Tentang Kami</a>
        </li>
        <li class="border-b">
          <details>
            <summary class="p-4 cursor-pointer flex items-center justify-between">
              <span>Solusi &amp; Layanan</span>
              <svg class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </summary>
            <div class="pl-6">
              <a href="../id/index.html?tab=infrastructure#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Solusi Jaringan dan Infrastruktur</a>
              <a href="../id/index.html?tab=application#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Solusi Keamanan</a>
              <a href="../id/index.html?tab=service#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Solusi Layanan</a>
              <a href="../id/index.html?tab=non-erp#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Advanced Application Solutions</a>
              <a href="../id/index.html?tab=electronic-security#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Sistem Keamanan Elektronik</a>
            </div>
          </details>
        </li>
        <li class="border-b">
          <a href="../id/index.html#featured-stories" class="flex items-center gap-2 px-4 py-3">Klien Kami</a>
        </li>
        <li class="border-b">
          <a href="../id/index.html#strategicAlliances" class="flex items-center gap-2 px-4 py-3">Mitra Kami</a>
        </li>
        <li class="border-b">
          <a href="../id/index.html#strategicAlliances" class="flex items-center gap-2 px-4 py-3">Aliansi Strategis</a>
        </li>
        <li class="border-b px-4 py-3 flex items-center gap-4 text-sm font-medium">
          <a href="../index.html" class="flex items-center gap-1 hover:text-primary" title="English">
            <span class="text-base">&#127468;&#127463;</span>
            <span>EN</span>
          </a>
          <span class="text-gray-300">|</span>
          <a href="../id/index.html" class="flex items-center gap-1 text-primary font-bold" title="Bahasa Indonesia">
            <span class="text-base">&#127470;&#127465;</span>
            <span>ID</span>
          </a>
        </li>
        <li class="p-4 text-center">
          <a href="../id/contact.html" class="btn-primary flex justify-center !py-4">Hubungi Kami</a>
        </li>
      </ul>
    </div>
  </header>
`;
