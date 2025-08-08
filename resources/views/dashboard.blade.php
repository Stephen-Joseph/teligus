<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #3d3d3dff;
        }
        
        .dashboard-card {
            transition: all 0.3s ease;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .chart-container {
            height: 240px;
            position: relative;
        }
        
        @media (max-width: 768px) {
            .chart-container {
                height: 200px;
            }
        }
        
        .sidebar {
            transition: all 0.3s ease;
        }
        
        .sidebar-item {
            transition: all 0.2s ease;
        }
        
        .sidebar-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-item.active {
            background-color: rgba(255, 255, 255, 0.2);
            border-left: 4px solid #ffffff;
        }
        .sidebar-item i {
            transition: transform 0.2s ease;
        }
        /* Your loader with some enhancements */
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        
        .loader {
            position: relative;
            width: 100px;
            height: 130px;
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .loader:before {
            content: '';
            position: absolute;
            width: 54px;
            height: 25px;
            left: 50%;
            top: 0;
            background-image:
                radial-gradient(ellipse at center, #0000 24%,#de3500 25%,#de3500 64%,#0000 65%),
                linear-gradient(to bottom, #0000 34%,#de3500 35%);
            background-size: 12px 12px, 100% auto;
            background-repeat: no-repeat;
            background-position: center top;
            transform: translate(-50%, -65%);
            box-shadow: 0 -3px rgba(0, 0, 0, 0.25) inset;
        }
        
        .loader:after {
            content: '';
            position: absolute;
            left: 50%;
            top: 20%;
            transform: translateX(-50%);
            width: 66%;
            height: 60%;
            background: linear-gradient(to bottom, #f79577 30%, #0000 31%);
            background-size: 100% 16px;
            animation: writeDown 2s ease-out infinite;
        }
        
        @keyframes writeDown {
            0% { height: 0%; opacity: 0;}
            20% { height: 0%; opacity: 1;}
            80% { height: 65%; opacity: 1;}
            100% { height: 65%; opacity: 0;}
        }
    </style>
</body>
</html>
</head>
<body>
    <div class="loader-container" id="loader">
        <span class="loader"></span>
    </div>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar for desktop -->
         @include('layouts.sidebar-pc')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            @include('layouts.topnav')
            
            <!-- Mobile Sidebar (hidden by default) -->
            @include('layouts.sidebar-mobile')

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-4">
                <!-- Dashboard Overview -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="dashboard-card bg-white rounded-lg shadow p-5">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Revenue</p>
                                <h3 class="text-2xl font-bold text-gray-800">$24,780</h3>
                                <p class="text-green-500 text-sm mt-1">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>12.5% from last month</span>
                                </p>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-card bg-white rounded-lg shadow p-5">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">New Users</p>
                                <h3 class="text-2xl font-bold text-gray-800">1,482</h3>
                                <p class="text-green-500 text-sm mt-1">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>8.2% from last month</span>
                                </p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-card bg-white rounded-lg shadow p-5">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Orders</p>
                                <h3 class="text-2xl font-bold text-gray-800">352</h3>
                                <p class="text-red-500 text-sm mt-1">
                                    <i class="fas fa-arrow-down mr-1"></i>
                                    <span>3.1% from last month</span>
                                </p>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dashboard-card bg-white rounded-lg shadow p-5">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Conversion Rate</p>
                                <h3 class="text-2xl font-bold text-gray-800">3.42%</h3>
                                <p class="text-green-500 text-sm mt-1">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>1.2% from last month</span>
                                </p>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Quick Actions and Recent Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-1 bg-white rounded-lg shadow p-5">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
                        <div class="space-y-3">
                            <button class="w-full flex items-center justify-between p-3 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100">
                                <span class="flex items-center">
                                    <i class="fas fa-plus-circle mr-3"></i>
                                    Add New Product
                                </span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <button class="w-full flex items-center justify-between p-3 bg-green-50 text-green-700 rounded-md hover:bg-green-100">
                                <span class="flex items-center">
                                    <i class="fas fa-user-plus mr-3"></i>
                                    Create User Account
                                </span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <button class="w-full flex items-center justify-between p-3 bg-purple-50 text-purple-700 rounded-md hover:bg-purple-100">
                                <span class="flex items-center">
                                    <i class="fas fa-file-invoice mr-3"></i>
                                    Generate Report
                                </span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <button class="w-full flex items-center justify-between p-3 bg-yellow-50 text-yellow-700 rounded-md hover:bg-yellow-100">
                                <span class="flex items-center">
                                    <i class="fas fa-cog mr-3"></i>
                                    System Settings
                                </span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-2 bg-white rounded-lg shadow p-5">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center text-white">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">New user registered</p>
                                    <p class="text-sm text-gray-500">Jane Cooper has created an account</p>
                                    <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center text-white">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">New order placed</p>
                                    <p class="text-sm text-gray-500">Order #ORD-7245 has been placed</p>
                                    <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center text-white">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">Low stock alert</p>
                                    <p class="text-sm text-gray-500">Product "Wireless Headphones" is running low</p>
                                    <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center text-white">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900">New comment</p>
                                    <p class="text-sm text-gray-500">Robert Johnson commented on order #ORD-7243</p>
                                    <p class="text-xs text-gray-400 mt-1">6 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.remove('hidden');
        });
        
        document.getElementById('close-sidebar-button').addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.add('hidden');
        });
        
        // User dropdown toggle
        document.getElementById('user-menu-button').addEventListener('click', function() {
            document.getElementById('user-dropdown').classList.toggle('hidden');
        });
        
        // Close dropdown when clicking outside
        window.addEventListener('click', function(event) {
            if (!event.target.closest('#user-menu-button') && !event.target.closest('#user-dropdown')) {
                document.getElementById('user-dropdown').classList.add('hidden');
            }
        });
        
        // Revenue Chart
        const revenueCtx = document.getElementById('revenue-chart').getContext('2d');
        const revenueChart = new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [18500, 19200, 18300, 21500, 22800, 24780],
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        grid: {
                            display: true,
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
        
        // Users Chart
        const usersCtx = document.getElementById('users-chart').getContext('2d');
        const usersChart = new Chart(usersCtx, {
            type: 'bar',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'New Users',
                    data: [320, 450, 280, 432],
                    backgroundColor: 'rgba(16, 185, 129, 0.8)',
                    borderRadius: 5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
        
        // Responsive adjustments
        function handleResize() {
            if (window.innerWidth < 768) {
                // Mobile adjustments if needed
            } else {
                // Desktop adjustments if needed
            }
        }
        
        window.addEventListener('resize', handleResize);
        handleResize();
    </script>
        <script>
        // Hide loader when page is loaded
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
        });
        
        // Optional: Show loader during AJAX requests
        /*
        document.addEventListener('ajaxStart', function() {
            document.getElementById('loader').style.display = 'flex';
        });
        
        document.addEventListener('ajaxComplete', function() {
            document.getElementById('loader').style.display = 'none';
        });
        */
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'965a4bb840bd50c3',t:'MTc1MzYwMDAwNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
