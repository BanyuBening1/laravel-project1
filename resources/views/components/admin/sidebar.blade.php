<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-gray-800 md:translate-x-0"
    aria-label="Sidenav"
    id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-gray-800">
        
        {{-- Main Navigation --}}
        <ul class="space-y-1">
            <li>
                <a href="#" class="flex items-center p-3 text-base font-medium text-white rounded-lg hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Overview</span>
                </a>
            </li>

            {{-- Pages Dropdown --}}
            <li>
                <button type="button"
                    class="flex items-center p-3 w-full text-base font-medium text-white rounded-lg hover:bg-gray-700 group"
                    aria-controls="dropdown-pages"
                    data-collapse-toggle="dropdown-pages">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-1">
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Kanban</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Calendar</a>
                    </li>
                </ul>
            </li>

            {{-- Sales Dropdown --}}
            <li>
                <button type="button"
                    class="flex items-center p-3 w-full text-base font-medium text-white rounded-lg hover:bg-gray-700 group"
                    aria-controls="dropdown-sales"
                    data-collapse-toggle="dropdown-sales">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Sales</span>
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-sales" class="hidden py-2 space-y-1">
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Products</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Billing</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Invoice</a>
                    </li>
                </ul>
            </li>

            {{-- Messages --}}
            <li>
                <a href="#" class="flex items-center p-3 text-base font-medium text-white rounded-lg hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                        <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                    </svg>
                    <span class="flex-1 ml-3">Messages</span>
                    <span class="inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-gray-600 rounded">4</span>
                </a>
            </li>

            {{-- Authentication Dropdown --}}
            <li>
                <button type="button"
                    class="flex items-center p-3 w-full text-base font-medium text-white rounded-lg hover:bg-gray-700 group"
                    aria-controls="dropdown-authentication"
                    data-collapse-toggle="dropdown-authentication">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-authentication" class="hidden py-2 space-y-1">
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Sign In</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Sign Up</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-300 rounded-lg hover:bg-gray-700">Forgot Password</a>
                    </li>
                </ul>
            </li>
        </ul>

        {{-- Bottom Navigation --}}
        <ul class="pt-5 mt-5 space-y-1 border-t border-gray-700">
            <li>
                <a href="#" class="flex items-center p-3 text-base font-medium text-white rounded-lg hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Docs</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 text-base font-medium text-white rounded-lg hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                    </svg>
                    <span class="ml-3">Components</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 text-base font-medium text-white rounded-lg hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3">Help</span>
                </a>
            </li>
        </ul>
    </div>

    {{-- Bottom Actions --}}
    <div class="absolute bottom-0 left-0 flex justify-center items-center p-4 space-x-4 w-full bg-gray-800 border-t border-gray-700">
        <a href="#" class="inline-flex justify-center items-center p-2 text-gray-400 rounded-lg hover:text-white hover:bg-gray-700">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
            </svg>
        </a>
        <a href="#" class="inline-flex justify-center items-center p-2 text-gray-400 rounded-lg hover:text-white hover:bg-gray-700">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="#" class="inline-flex justify-center items-center p-2 text-gray-400 rounded-lg hover:text-white hover:bg-gray-700">
            <svg class="w-6 h-6 rounded-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <g fill-rule="evenodd">
                    <g stroke-width="1pt">
                        <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(2.0677)"/>
                        <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(2.0677)"/>
                    </g>
                    <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(2.0677)"/>
                    <circle cx="25" cy="25" r="20" fill="#fff"/>
                </g>
            </svg>
        </a>
    </div>
</aside>

{{-- Script untuk toggle dropdown --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggles = document.querySelectorAll('[data-collapse-toggle]');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const targetId = this.getAttribute('aria-controls');
            const target = document.getElementById(targetId);
            
            if (target) {
                target.classList.toggle('hidden');
                
                // Rotate chevron icon
                const chevron = this.querySelector('svg:last-child');
                if (chevron) {
                    chevron.classList.toggle('rotate-180');
                }
            }
        });
    });
});
</script>