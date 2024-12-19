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
        <div class=" mx-auto flex items-center justify-between py-4 px-8 md:h-28">
                
            <div class="flex items-center">
                <a href="#" class="flex items-center space-x-2">
                    <img src="../img/icons8-chef.png" class="h-16" alt="Logo">
                    <h1 class="text-white text-3xl font-bold">Restaurante</h1>
                </a>
            </div>

                <!-- Liens de navigation pour écrans moyens et larges -->
            <ul class="hidden md:flex space-x-12 ">
                <li>
                    <a href="index.php" class="text-white text-lg font-bold">Home</a>
                </li>
                <li>
                    <a href="menu.php" class="text-white text-lg font-bold">Menu</a>
                </li>
                <li>
                    <a href="reservation.php" class="text-white text-lg font-bold">Reservation</a>
                </li>
                <li>
                    <a href="contact.php" class="text-white text-lg font-bold">Contact</a>
                </li>
            </ul>

                <!-- Bouton de connexion (visible uniquement sur écrans moyens et larges) -->
            <!-- <a href="siginup.php"  class="hidden md:block bg-amber-600 py-2 px-4 text-white text-sm rounded-full border-2 border-amber-600 font-bold">
                Connexion
            </a> -->

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
    <div class="w-full  py-5 bg-black hero-header mb-5">
        <div class="container mx-auto text-center my-5 pt-5 pb-4">
            
            <h1 class="text-5xl md:text-6xl text-amber-600 mb-8 animate__animated animate__fadeInDown font-bold ">Food Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="flex justify-center space-x-4 uppercase text-sm md:text-base ">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white hover:underline">Home</a></li>
                    <li class="breadcrumb-item text-amber-600 font-bold" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>
    <form id="formulair" class="fixed top-0 left-0 w-full h-full bg-white bg-opacity-90 z-50 hidden flex items-center justify-center animate-slide-in">
    <div class="max-w-[800px] w-full max-h-[600px]  bg-white rounded-lg shadow-lg ">
       <div class="px-8 py-4 bg-amber-600 text-white">
      <h1 class="flex justify-center font-bold text-white text-3xl">Menu</h1>
    </div>
    <div class="px-8 py-6">
      <!-- Contenu du formulaire ici -->
      <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2" for="nome" id="name">Nom :</label>
        <input class="appearance-none border border-gray-400 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent" id="text" type="text" placeholder="Nom">
        <span id="nameError" class="text-red-500 text-sm hidden">Name invalid</span>
    </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2" for="description" id="description">Description :</label>
        <input class="appearance-none border border-gray-400 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent" id="description" type="text" placeholder="Description">
        <span id="descriptionError" class="text-red-500 text-sm hidden">Description invalid</span>  
    </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2" for="url" id="photo">URL :</label>
        <input class="appearance-none border border-gray-400 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent" id="url" type="text" placeholder="https://">
        <span id="photoError" class="text-red-500 text-sm hidden">Image invalid</span>  
    </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2" for="prix" id="prix">Prix :</label>
        <input class="appearance-none border border-gray-400 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent" type="number" placeholder="Prix">
        <span id="prixError" class="text-red-500 text-sm hidden">Prix invalid</span>  
    </div>
      <div class="flex justify-between mt-8">
        <a id="hideForm" class="text-white bg-red-600 w-40 rounded-lg py-3 hover:bg-red-800 cursor-pointer flex justify-center">
          Cancel
        </a>
        <button type="submit" class="text-white bg-blue-600 w-40 rounded-lg py-3 hover:bg-blue-800 cursor-pointer" name="submit">
          Add
        </button>
      </div>
    </div>
  </div>
</form>
    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <h1 class="text-3xl font-bold text-center my-6">Plats principaux</h1>
            <div class="reservation-card bg-white border border-gray-300 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-2">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 m-8">
                    <div class="flex items-center">
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
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
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
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
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
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-4.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-5.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-6.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-7.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/menu-8.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="tab-2" class="tab-pane fade show p-0">
            <h1 class="text-3xl font-bold text-center my-6">Salad</h1>
            <div class="reservation-card bg-white border border-gray-300 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-2">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 m-8">
                    
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/image9.jpeg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/img10.jpeg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/img11.jpeg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/img12.jpeg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/img13.jpeg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/img14.jpg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/img15.jpeg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img class="flex-shrink-0 rounded w-20 h-16" src="../img/img17.jpeg" alt="">
                        <div class="flex-1 flex flex-col text-start pl-4">
                        <div class="flex justify-between items-center border-b pb-2">
                                <h5 class="font-medium text-lg">Chicken Burger</h5>
                                <span class="text-primary font-semibold">$115</span>
                            </div>

                
                            <div class="flex justify-between items-center pt-2">
                                <small class="italic text-gray-600 flex-1">
                                    Ipsum ipsum clita erat amet dolor justo diam
                                </small>
                                <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                    Order 
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="tab-3" class="tab-pane fade show p-0">
            <h1 class="text-3xl font-bold text-center my-6">Dessert</h1>
            <div class="reservation-card bg-white border border-gray-300 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-2">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 m-8">
                    <div class="flex items-center">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des1.jpeg" alt="">
                            <div class="flex-1 flex flex-col text-start pl-4">
                                <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des2.jpeg" alt="">
                            <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des3.jpeg" alt="">
                            <div class="flex-1 flex flex-col text-start pl-4">
                                <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des4.jpeg" alt="">
                            <div class="flex-1 flex flex-col text-start pl-4">
                                <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des5.jpg" alt="">
                            <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des6.jpeg" alt="">
                            <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des9.jpeg" alt="">
                            <div class="flex-1 flex flex-col text-start pl-4">
                            <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/des11.jpeg" alt="Image of Chicken Burger">
                
                
                            <div class="flex-1 flex flex-col text-start pl-4">
                    
                                <div class="flex justify-between items-center border-b pb-2">
                                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                                    <span class="text-primary font-semibold">$115</span>
                                </div>

                    
                                <div class="flex justify-between items-center pt-2">
                                    <small class="italic text-gray-600 flex-1">
                                        Ipsum ipsum clita erat amet dolor justo diam
                                    </small>
                                    <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300  px-4 py-2 w-24 rounded-3xl text-sm "role="button"aria-label="Order Chicken Burger">
                                        Order 
                                    </button>
                                </div>
                            </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="bg-black text-white pt-5 mt-5 animate-fadeIn h-[320px] ">
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
    <script>
    
    const orderButtons = document.querySelectorAll('.text-white.bg-amber-600.hover\\:bg-amber-700.transition-colors.duration-300.px-4.py-2.w-24.rounded-3xl.text-sm');

    
    orderButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            
            document.getElementById('formulair').classList.remove('hidden');
        });
    });

    
    document.getElementById('hideForm').addEventListener('click', function () {
        document.getElementById('formulair').classList.add('hidden');
    });

   
    function validateForm() {
        
        document.getElementById("nameError").classList.add("hidden");
        document.getElementById("photoError").classList.add("hidden");
        document.getElementById("descriptionError").classList.add("hidden");
        document.getElementById("prixError").classList.add("hidden");

        let valid = true;

        
        const name = document.getElementById("name").value;
        const nameRegex = /^[a-zA-Z]*$/;
        if (!nameRegex.test(name)) {
            document.getElementById("nameError").classList.remove("hidden");
            valid = false;
        }

        const photo = document.getElementById("photo").value;
        const photoRegex = /^https:\/\//;
        if (!photoRegex.test(photo)) {
            document.getElementById("photoError").classList.remove("hidden");
            valid = false;
        }

        const description = document.getElementById("description").value;
        const descriptionRegex = /^[a-zA-Z ]*$/;
        if (!descriptionRegex.test(description)) {
            document.getElementById("descriptionError").classList.remove("hidden");
            valid = false;
        }

        const prix = document.getElementById("prix").value;
        const prixRegex = /^\d{1,3}$/;
        if (!prixRegex.test(prix)) {
            document.getElementById("prixError").classList.remove("hidden");
            valid = false;
        }

        return valid;
    }

   
    document.querySelector('button[name="submit"]').addEventListener('click', function (e) {
        e.preventDefault(); 

        if (validateForm()) {
            alert("Formulaire valide. Vous pouvez soumettre.");
           
        }
    });
</script>

 
 
</body>

</html>