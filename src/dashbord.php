<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">

    <style>
        /* Only keeping necessary custom styles, using Tailwind classes for colors */
        :root {
            --header-height: 4rem;
            --sidebar-width: 240px;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slide-down {
            animation: slideDown 0.5s ease-out;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
    <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>
    
    <header class="fixed w-full bg-white text-indigo-800 z-50 shadow-lg animate-slide-down">
        <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between h-16">
            <button class="mobile-menu-button p-2 lg:hidden">
                <span class="material-icons-outlined text-2xl">menu</span>
            </button>
            <div class="text-xl font-bold text-amber-600">
                Admin<span class="text-amber-600">Restaurante</span>
            </div>
            <div class="flex items-center space-x-2">
                <img class="w-10 h-10 rounded-full transition-transform duration-300 hover:scale-110 object-cover" 
                     src="https://th.bing.com/th/id/R.b6350e5011a7b61996efada66d100575?rik=7D6Ni11ELDKMoA&pid=ImgRaw&r=0" 
                     alt="Profile">
            </div>
        </div>
    </header>

    <div class="pt-16 max-w-7xl mx-auto flex">
        <aside class="sidebar fixed lg:static w-[240px] bg-indigo-50 h-[calc(100vh-4rem)] lg:h-auto transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-45 overflow-y-auto p-4">
            <div class="bg-white rounded-xl shadow-lg mb-6 p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <a href="#" class="flex items-center text-gray-600 hover:text-amber-600 py-4 transition-all duration-300 hover:translate-x-1">
                    <!-- <span class="material-icons-outlined mr-2">dashboard</span> -->
                    <img src="../img/renomer.png" alt="renomer Icon" class="w-6 h-6 mr-2">
                    Home
                   
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-amber-600 py-4 transition-all duration-300 hover:translate-x-1">
                    <!-- <span class="material-icons-outlined mr-2">tune</span> -->
                    <img src="../img/menu.png" alt="menu Icon" class="w-6 h-6 mr-2">
                    Some menu item
                   
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <!-- <span class="material-icons-outlined mr-2">file_copy</span> -->
                    <img src="../img/fichier.png" alt="Settings Icon" class="w-6 h-6 mr-2">
                    Another menu item
                   
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <img src="../img/profile.png" alt="Profile Icon" class="w-6 h-6 mr-2">
                    Profile
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <img src="../img/settings.png" alt="Settings Icon" class="w-6 h-6 mr-2">
                    Settings
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <img src="../img/log.png" alt="Log Out Icon" class="w-6 h-6 mr-2">
                    Log out
                </a>
            </div>

        </aside>

        <main class="flex-1 p-4">
            <div class="flex flex-col lg:flex-row gap-4 mb-6">
                <div class="flex-1 bg-amber-600 border border-indigo-200 rounded-xl p-6 animate-fade-in">
                    <h2 class="text-4xl md:text-5xl text-white">
                        Welcome <br><strong>Dash</strong>
                    </h2>
                    <span class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-amber-600 bg-white">
                        01:51
                    </span>
                </div>

                <div class="flex-1 bg-amber-600 border border-blue-200 rounded-xl p-6 animate-fade-in">
                    <h2 class="text-4xl md:text-5xl text-white">
                        clients inscrits <br><strong>23</strong>
                    </h2>
                    <a href="#" class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-amber-600 bg-white hover:bg-amber-500 transition-transform duration-300 hover:scale-105">
                        See messages
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.1s">
                    <h3 class="text-xl font-bold text-amber-600">demandes en attente</h3>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.2s">
                    <h3 class="text-xl font-bold text-amber-600">demandes de journée</h3>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.3s">
                    <h3 class="text-xl font-bold text-amber-600">demandes de demaine</h3>
                </div>
            </div>
        </main>
    </div>

    <script>
         document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const sidebar = document.querySelector('.sidebar');
        const overlay = document.querySelector('.overlay');

        const toggleMobileMenu = () => {
        sidebar.classList.toggle('translate-x-0');
        overlay.classList.toggle('hidden');
        overlay.classList.toggle('opacity-0');
        document.body.style.overflow = sidebar.classList.contains('translate-x-0') ? 'hidden' : '';
        };

        mobileMenuButton.addEventListener('click', toggleMobileMenu);
        overlay.addEventListener('click', toggleMobileMenu);

        window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && sidebar.classList.contains('translate-x-0')) {
            toggleMobileMenu();
        }
        });

    
        const notificationIcon = document.querySelector('.material-icons-outlined:nth-child(2)');
        if (notificationIcon) {
        setInterval(() => {
            notificationIcon.classList.add('scale-110');
            setTimeout(() => notificationIcon.classList.remove('scale-110'), 200);
        }, 5000);
        }
        });

    </script>
</body>
</html>