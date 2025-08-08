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
