        <!-- Sidebar for desktop -->
        <div id="sidebar" class="hidden md:flex flex-col w-64 bg-gradient-to-b from-blue-800 to-indigo-900 text-white">
            <div class="p-5 flex items-center space-x-3">
                <div class="bg-white p-1 rounded-lg">
                    <img src="{{ asset('images/logo.gif') }}" alt="Teligus Logo" class="h-8 w-auto">
                </div>
                <span class="text-xl font-bold text-white">Teligus</span>
            </div>
            
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-2 py-4">
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
                
                <div class="p-4 border-t border-blue-700">
                    <div class="flex items-center">
                        <img class="h-10 w-10 rounded-full object-cover" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Ccircle cx='12' cy='7' r='5' fill='%23ffffff'/%3E%3Cpath d='M17 14h.352a3 3 0 0 1 2.976 2.628l.391 3.124A2 2 0 0 1 18.734 22H5.266a2 2 0 0 1-1.985-2.248l.39-3.124A3 3 0 0 1 6.649 14H7' fill='%23ffffff'/%3E%3C/svg%3E" alt="User avatar">
                        <div class="ml-3">
                            <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-blue-200">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>