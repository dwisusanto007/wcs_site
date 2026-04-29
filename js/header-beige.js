document.getElementById('header-placeholder').innerHTML = `
  <header class="sticky top-0 bg-white shadow-sm z-50 border-b border-gray-100">
    <div class="container mx-auto flex items-center justify-between py-2 md:py-4">

      <div id="logo">
        <a href="beige/index.html" class="header-logo inline-flex">
          <img src="../images/logo_wcs.png" alt="PT Wahana Ciptasinatria">
          <span class="text-xs md:text-base flex lg:hidden xl:flex ml-2 uppercase">PT Wahana Ciptasinatria</span>
        </a>
      </div>

      <nav class="hidden lg:flex items-center space-x-2 lg:space-x-6 font-semibold text-gray-900 relative">
        <a href="about.html" class="md:px-1">About Us</a>

        <div class="relative group px-1">
          <button class="flex items-center space-x-1 group-hover:text-primary">
            <span>Solution &amp; Services</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="font-medium absolute left-0 mt-2 py-2 min-w-64 bg-white shadow-lg rounded-md z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 overflow-hidden">
            <a href="beige/index.html?tab=infrastructure#solutionServices" class="block px-8 py-2 hover:text-primary">Network and Infrastructure Solutions</a>
            <a href="beige/index.html?tab=application#solutionServices" class="block px-8 py-2 hover:text-primary">Security Solutions</a>
            <a href="beige/index.html?tab=service#solutionServices" class="block px-8 py-2 hover:text-primary">Services Solutions</a>
            <a href="beige/index.html?tab=non-erp#solutionServices" class="block px-8 py-2 hover:text-primary">Advanced Application Solutions</a>
            <a href="beige/index.html?tab=electronic-security#solutionServices" class="block px-8 py-2 hover:text-primary">Electronic Security System</a>
          </div>
        </div>

        <a href="beige/index.html#featured-stories" class="md:px-1">Our Clients</a>
        <a href="beige/index.html#strategicAlliances" class="md:px-1">Our Partners</a>

        <div class="flex items-center space-x-2 text-sm font-medium">
          <span class="flex items-center gap-1 text-primary font-bold" title="English">
            <span class="text-base">&#127468;&#127463;</span>
            <span>EN</span>
          </span>
        </div>

        <div>
          <a href="contact.html" class="btn-primary">Contact Us</a>
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
          <a href="about.html" class="flex items-center gap-2 px-4 py-3">About Us</a>
        </li>
        <li class="border-b">
          <details>
            <summary class="p-4 cursor-pointer flex items-center justify-between">
              <span>Solution &amp; Services</span>
              <svg class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </summary>
            <div class="pl-6">
              <a href="beige/index.html?tab=infrastructure#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Network and Infrastructure Solutions</a>
              <a href="beige/index.html?tab=application#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Security Solutions</a>
              <a href="beige/index.html?tab=service#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Services Solutions</a>
              <a href="beige/index.html?tab=non-erp#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Advanced Application Solutions</a>
              <a href="beige/index.html?tab=electronic-security#solutionServices" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 hover:text-red-600">Electronic Security System</a>
            </div>
          </details>
        </li>
        <li class="border-b">
          <a href="beige/index.html#featured-stories" class="flex items-center gap-2 px-4 py-3">Our Clients</a>
        </li>
        <li class="border-b">
          <a href="beige/index.html#strategicAlliances" class="flex items-center gap-2 px-4 py-3">Our Partners</a>
        </li>
        <li class="p-4 text-center">
          <a href="contact.html" class="btn-primary flex justify-center !py-4">Contact Us</a>
        </li>
      </ul>
    </div>
  </header>
`;
