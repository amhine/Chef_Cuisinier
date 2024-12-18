<!DOCTYPE html>
<html lang="en">
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

    <div class="bg-black py-1 mb-5">
        <div class="container mx-auto my-10 py-10">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
            <!-- Texte -->
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold text-white leading-tight animate-slideInLeft">
                Enjoy Our<br>Delicious Meal
                </h1>
                <p class="mt-4 mb-6 text-white leading-relaxed animate-slideInLeft">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                </p>
                <a href="#" class="inline-block bg-gray-800  text-white font-semibold py-3 px-5 rounded-md hover:bg-blue-700 animate-slideInLeft">
                Book A Table
                </a>
            </div>
            <!-- Image -->
            <div class="text-center lg:text-right overflow-hidden">
                <img src="../img/hero.png" alt="Delicious Meal" class="w-full max-w-lg mx-auto lg:mx-0">
            </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto py-10">
        <div class="px-4">
            <div class="flex flex-wrap md:flex-nowrap gap-5 items-center">
                <!-- Images Section -->
                <div class="w-full lg:w-1/2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-start">
                            <img class="w-full rounded-lg animate-zoomIn" src="../img/about-1.jpg" alt="About Image 1">
                        </div>
                        <div class="text-start">
                            <img class="w-3/4 rounded-lg animate-zoomIn mt-6" src="../img/about-2.jpg" alt="About Image 2">
                        </div>
                        <div class="text-end">
                            <img class="w-3/4 rounded-lg animate-zoomIn" src="../img/about-3.jpg" alt="About Image 3">
                        </div>
                        <div class="text-end">
                            <img class="w-full rounded-lg animate-zoomIn" src="../img/about-4.jpg" alt="About Image 4">
                        </div>
                    </div>
                </div>

                <!-- Text Section -->
                <div class="w-full lg:w-1/2">
                    <h5 class="text-lg font-secondary text-start text-primary font-normal">About Us</h5>
                    <h1 class="text-4xl font-bold mb-4">
                        Welcome to <i class="fa fa-utensils text-primary"></i> Restaurante
                    </h1>
                    <p class="mb-4">
                    Découvrez une expérience culinaire unique où tradition et modernité se rencontrent. Situé au cœur de Restaurante, notre restaurant vous propose une cuisine authentique préparée avec des ingrédients frais et locaux.

                        Savourez des plats soigneusement élaborés par nos chefs talentueux, dans une ambiance chaleureuse et conviviale. Que ce soit pour un dîner romantique, une sortie entre amis ou un repas d'affaires, Restaurante est l'endroit idéal pour tous vos moments gourmands.</p>

                    <!-- Stats Section -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center border-l-4 border-primary pl-4">
                            <h1 class="text-5xl text-primary font-bold">15</h1>
                            <div class="pl-4">
                                <p class="text-gray-600 mb-1">Years of</p>
                                <h6 class="text-lg font-medium uppercase">Experience</h6>
                            </div>
                        </div>
                    
                    </div>

                    <!-- Button -->
                    <a class="bg-primary text-white py-3 px-5 rounded-md hover:bg-primary-dark transition" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative isolate bg-white">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
            <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-32">
            <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Contact Us</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Feel free to reach out to us for any inquiries or assistance.
                We're here to help!</p>
                <dl class="mt-10 space-y-4 text-base leading-7 text-gray-600">
                <div class="flex gap-x-4">
                    <dt class="flex-none">
                    <span class="sr-only">Email</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" class="h-7 w-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                        </path>
                    </svg>
                    </dt>
                    <dd><a class="hover:text-gray-900" href="mailto:contact@yourcompany.com">contact@yourcompany.com</a></dd>
                </div>
                <div class="flex gap-x-4">
                    <dt class="flex-none">
                    <span class="sr-only">Address</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" class="h-7 w-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z">
                        </path>
                    </svg>
                    </dt>
                    <dd>123 Main Street, Cityville, Country</dd>
                </div>
                </dl>
            </div>
            </div>
            <form class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-32">
            <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                    <div class="mt-2.5">
                    <input type="text" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="firstName">
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                    <div class="mt-2.5">
                    <input type="text" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="lastName">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                    <input type="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="email">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                    <textarea id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="message"></textarea>
                    </div>
                </div>
                </div>
                <div class="mt-8 flex justify-end">
                <button type="submit" class="w-max  rounded-2xl border-2 border-amber-600 bg-amber-600  px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-blue-400 hover:bg-blue-400 font-bold">Submit</button>
                </div>
            </div>
            </form>
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
<script>
module.exports = {
  theme: {
    extend: {
      keyframes: {
        zoomIn: {
          '0%': { transform: 'scale(0.5)', opacity: '0' },
          '100%': { transform: 'scale(1)', opacity: '1' },
        },
      },
      animation: {
        zoomIn: 'zoomIn 0.5s ease-in-out',
      },
    },
  },
  plugins: [],
};
document.getElementById('burger-menu').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
</html>