    <!-- Sidebar for Large Screens -->
    <aside id="sidebar-nav" class="hidden lg:block min-w-max h-screen bg-gray-900 text-white sticky top-0 z-[1000] overflow-y-auto p-4">
        <div class="flex justify-start items-center mb-4 gap-2">
            <img src="/logo.png" alt=""> 
            <h2 class="text-xl font-semibold">iamroot.tech</h2>
        </div>
        <ul class="space-y-2">
            <li class="font-bold text-lg text-gray-400">Internet tools</li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">DNS lookup</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">DNS propagation check</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Port scan + probing</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">WHOIS / RDAP lookup</a></li>

            <li class="font-bold text-lg text-gray-400 mt-4">Dev tools</li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Color contrast checker</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Color picker</a></li>

            <li class="font-bold text-lg text-gray-400 mt-4">Misc tools</li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Password generator</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">World map, day/night</a></li>
        </ul>
    </aside>

    <!-- Horizontal Navbar for Small Screens -->
    <nav class="lg:hidden bg-gray-900 text-white p-4 sticky top-0 z-[1000] w-full">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">iamroot.tech</h2>
            <button id="menu-toggle" class="text-white">☰</button>
        </div>
    </nav>

    <!-- Sidebar for Small Screens -->
    <div id="mobile-sidebar" class="fixed top-0 left-0 h-full w-64 bg-gray-900 text-white p-4 shadow-lg transform -translate-x-full transition-transform duration-300 z-[1100]">
        <button id="close-sidebar" class="text-white text-xl mb-4">✖</button>
        <ul class="space-y-2">
            <li class="font-bold text-lg text-gray-400">Internet tools</li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">DNS lookup</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">DNS propagation check</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Port scan + probing</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">WHOIS / RDAP lookup</a></li>

            <li class="font-bold text-lg text-gray-400 mt-4">Dev tools</li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Color contrast checker</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Color picker</a></li>

            <li class="font-bold text-lg text-gray-400 mt-4">Misc tools</li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">Password generator</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700 rounded">World map, day/night</a></li>
        </ul>
    </div>

    <!-- Overlay when sidebar is open -->
    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-[1099]"></div>

    <script>
        const menuToggle = document.getElementById("menu-toggle");
        const mobileSidebar = document.getElementById("mobile-sidebar");
        const closeSidebar = document.getElementById("close-sidebar");
        const overlay = document.getElementById("overlay");

        menuToggle.addEventListener("click", function () {
            mobileSidebar.classList.remove("-translate-x-full");
            overlay.classList.remove("hidden");
        });

        closeSidebar.addEventListener("click", function () {
            mobileSidebar.classList.add("-translate-x-full");
            overlay.classList.add("hidden");
        });

        overlay.addEventListener("click", function () {
            mobileSidebar.classList.add("-translate-x-full");
            overlay.classList.add("hidden");
        });
    </script>

