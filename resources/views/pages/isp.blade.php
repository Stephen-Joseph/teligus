@extends('other.head')
<body>
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
                        <div class="loader-container" id="loader">
        <div class="loader"></div>
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
