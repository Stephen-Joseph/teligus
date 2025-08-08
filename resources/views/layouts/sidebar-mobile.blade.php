<div id="mobile-sidebar" class="fixed inset-0 z-40 hidden">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>
    <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gradient-to-b from-blue-800 to-indigo-900">
        <div class="absolute top-0 right-0 -mr-12 pt-2">
            <button id="close-sidebar-button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-5 flex items-center space-x-3">
            <div class="bg-white p-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <span class="text-xl font-bold text-white">Teligus</span>
        </div>
        
        <div class="flex-1 h-0 overflow-y-auto">
            <nav class="px-2 py-4">
                <a href="{{ url('/dashboard') }}" class="sidebar-item flex items-center px-4 py-3 text-white rounded-md">
                    <i class="fas fa-home mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ url('/isp') }}" class="sidebar-item flex items-center px-4 py-3 text-white rounded-md">
                    <i class="fas fa-chart-line mr-3"></i>
                    <span>ISP's</span>
                </a>
                <a href="{{ url('/operators') }}" class="sidebar-item flex items-center px-4 py-3 text-white rounded-md">
                    <i class="fas fa-users mr-3"></i>
                    <span>Operator</span>
                </a>
                <a href="{{ url('/plan') }}" class="sidebar-item flex items-center px-4 py-3 text-white rounded-md">
                    <i class="fas fa-box mr-3"></i>
                    <span>Plan</span>
                </a>
                <a href="{{ url('/users') }}" class="sidebar-item flex items-center px-4 py-3 text-white rounded-md">
                    <i class="fas fa-file-invoice-dollar mr-3"></i>
                    <span>User's</span>
                </a>
                <a href="{{ url('/settings') }}" class="sidebar-item flex items-center px-4 py-3 text-white rounded-md">
                    <i class="fas fa-cog mr-3"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </div>
    </div>
</div>