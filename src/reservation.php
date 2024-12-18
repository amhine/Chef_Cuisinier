<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <nav class="bg-black shadow-lg">
        <div class="container mx-auto flex items-center justify-between py-4 px-6 md:h-28">
            <!-- Logo et nom -->
            <div class="flex items-center">
                <a href="#" class="flex items-center space-x-2">
                    <img src="../img/icons8-chef.png" class="h-16" alt="Logo">
                    <h1 class="text-white text-3xl font-bold">Restaurante</h1>
                </a>
            </div>

            <!-- Liens de navigation pour écrans moyens et larges -->
            <ul class="hidden md:flex space-x-12">
                <li>
                    <a href="index.php" class="text-white text-lg font-bold">Home</a>
                </li>
                <li>
                    <a href="menu.php" class="text-white text-lg font-bold">Menu</a>
                </li>
                <li>
                    <a href="#services" class="text-white text-lg font-bold">Reservation</a>
                </li>
                <li>
                    <a href="contact.php" class="text-white text-lg font-bold">Contact</a>
                </li>
            </ul>

            <!-- Bouton de connexion (visible uniquement sur écrans moyens et larges) -->
            <a href="siginup.php"  class="hidden md:block bg-amber-600 py-2 px-4 text-white text-sm rounded-full border-2 border-amber-600 font-bold">Connexion</a>

            <!-- Menu burger pour mobiles -->
            <div class="relative md:hidden">
                <button id="burger-menu" class="block">
                    <span class="block w-6 h-0.5 bg-gray-700 mb-1"></span>
                    <span class="block w-6 h-0.5 bg-gray-700 mb-1"></span>
                    <span class="block w-6 h-0.5 bg-gray-700"></span>
                </button>

                <!-- Menu déroulant pour mobile -->
                <ul id="mobile-menu" class="hidden absolute right-0 top-full mt-2 w-48 bg-black text-white rounded-lg shadow-lg">
                    <li class="border-b border-gray-700">
                        <a href="index.php" class="block px-4 py-2">Home</a>
                    </li>
                    <li class="border-b border-gray-700">
                        <a href="menu.php" class="block px-4 py-2">Menu</a>
                    </li>
                    <li class="border-b border-gray-700">
                        <a href="#services" class="block px-4 py-2">Reservation</a>
                    </li>
                    <li class="border-b border-gray-700">
                        <a href="contact.php" class="block px-4 py-2">Contact</a>
                    </li>
                    <li>
                        <a href="" class="block px-4 py-2 bg-amber-600 rounded-full text-center">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=" text-gray-800 font-serif">
    
        <h1 class="text-center text-4xl font-bold text-amber-600 mt-8">Vos Réservations</h1>

    
        <div class="reservations-container container mx-auto flex flex-col gap-8 py-8">

            <!-- Exemple de carte pour une réservation -->
            <div class="reservation-card bg-white border border-gray-300 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-2">
                <div class="flex flex-wrap justify-between gap-6">
                    <!-- Carte menu 1 -->
                    <div class="flex items-center w-full md:w-1/3">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-1.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                    
                            </div>
                        </div>
                    </div>

                
                    <div class="flex items-center w-full md:w-1/3">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-2.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                   
                            </div>
                        </div>
                    </div>

            
                    <div class="flex items-center w-full md:w-1/3">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-3.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                        
                            </div>
                        </div>
                    </div>

        
                </div>
       
            </div>
            <h1 class="text-center text-4xl font-bold text-amber-600 mt-8">Informations de la réservation</h1>
            <div class="reservation-card bg-white border border-gray-300 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-2">
    <div class="reservation-header flex flex-col gap-2 mb-4">
        <p class="text-sm text-gray-600">Date : <span class="font-semibold">27 Juin 2024</span></p>
        <p class="text-sm text-gray-600">Heure : <span class="font-semibold">20h00</span></p>
        <p class="text-sm text-gray-600">Nombre de personnes : <span class="font-semibold">2</span></p>
        <p class="text-sm text-gray-600">Menu choisi : <span class="font-semibold">Menu Végétarien</span></p>
    </div>
    
    <div class="action-buttons flex gap-4 justify-start mt-4">
        <button onclick="modifierReservation()" class="bg-amber-600 text-white py-2 px-4 rounded hover:bg-amber-800 transition-colors w-full md:w-auto">
            Changer
        </button>
        <button onclick="supprimerReservation()" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-800 transition-colors w-full md:w-auto">
            Supprimer
        </button>
    </div>
</div>

        </div>
    
    </div>   
    <footer>
        <div class="bg-black text-white pt-5 md:h-[320px] mt-5 animate-fadeIn ">
            <div class="container mx-auto py-5">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div>
                        <h4 class="text-xl text-primary font-semibold mb-4">Company</h4>
                        <a href="#" class="block text-white hover:text-white">About Us</a>
                        <a href="#" class="block text-white hover:text-white">Contact Us</a>
                        <a href="#" class="block text-white hover:text-white">Reservation</a>
                        <a href="#" class="block text-white hover:text-white">Privacy Policy</a>
                        <a href="#" class="block text-white hover:text-white">Terms & Condition</a>
                    </div>
                    <div>
                        <h4 class="text-xl text-primary font-semibold mb-4">Contact</h4>
                        <p class="mb-2"><i class="fas fa-map-marker-alt mr-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fas fa-phone-alt mr-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fas fa-envelope mr-3"></i>info@example.com</p>
                        <div class="flex space-x-4 mt-4">
                            <a href="#" class="text-white hover:text-primary"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white hover:text-primary"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white hover:text-primary"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="text-white hover:text-primary"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl text-primary font-semibold mb-4">Opening</h4>
                        <h5 class="text-lg text-white font-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-lg text-white font-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div>
                        <h4 class="text-xl text-primary font-semibold mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="relative max-w-xs mt-4">
                            <input type="text" placeholder="Your email" class="w-full py-3 px-4 rounded-lg border border-primary bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-primary">
                            <button type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto mt-8 ">
                <div class="border-t border-gray-700 pt-4 text-white">
                    <div class="flex flex-col md:flex-row items-center justify-between ">
                        <div class="text-center md:text-left mb-4 md:mb-0">
                            <p>
                                © <a href="#" class="text-primary border-b border-primary">Your Site Name</a>, All Right Reserved.
                                Designed By <a href="https://htmlcodex.com" class="text-primary border-b border-primary">HTML Codex</a>
                            </p>
                        </div>
                        <div class="text-center md:text-right ">
                            <div class="flex space-x-4 justify-center md:justify-end ">
                                <a href="#" class="text-white hover:text-white">Home</a>
                                <a href="#" class="text-white hover:text-white">Cookies</a>
                                <a href="#" class="text-white hover:text-white">Help</a>
                                <a href="#" class="text-white hover:text-white">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </footer>  
   
    
</body>
</html>
