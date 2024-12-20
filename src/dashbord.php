<?php 
include './conexiondata.php'; 

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pasword'];

    
    $name = mysqli_real_escape_string($connect, $name);
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);

   
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   
    $verefication = "SELECT * FROM utilisateur WHERE email = '$email'";
    $vrf_resultat = mysqli_query($connect, $verefication);

    if (mysqli_num_rows($vrf_resultat) > 0) {
       
        // echo "<p class='text-red-500'>Cet email est déjà utilisé. Veuillez essayer un autre.</p>";
    } else {
        
        $sql = "INSERT INTO utilisateur (name, email, pasword) VALUES ('$name', '$email', '$hashed_password')";

        if (mysqli_query($connect, $sql)) {
            header("Location: index.php");
            exit(); 
        } else {
            echo "<p class='text-red-500'>Erreur : " . mysqli_error($connect) . "</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">

</head>
<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
   

    
    <header class="fixed w-full bg-white text-indigo-800 z-50 shadow-lg animate-slide-down">
        <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between h-16">
            <button class="mobile-menu-button p-2 lg:hidden">
                    <span class="block w-6 h-0.5 bg-gray-700 mb-1"></span>
                    <span class="block w-6 h-0.5 bg-gray-700 mb-1"></span>
                    <span class="block w-6 h-0.5 bg-gray-700"></span>
                
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
    <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>
    <form id="formulair" class="fixed top-0 left-0 w-full h-full bg-white bg-opacity-90 z-50 hidden flex items-center justify-center animate-slide-in">
  <div class="max-w-[800px] w-full max-h-[500px]  bg-white rounded-lg shadow-lg overflow-y-scroll ">
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

    <div class="mb-6">
    <label for="food" class="block text-gray-700 font-semibold mb-2">Food:</label>
    <select id="food" name="food" class="w-full p-2 mb-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="1">Plats principaux</option>
        <option value="2">Salad</option>
        <option value="3">Dessert</option>
    </select>
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


    <div class="pt-16 max-w-7xl mx-auto flex">
        <aside class="sidebar fixed lg:static w-[240px] bg-indigo-50 h-[calc(100vh-4rem)] lg:h-auto transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-45 overflow-y-auto p-4">
            <div class="bg-white rounded-xl shadow-lg mb-6 p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <a href="#"  class="flex items-center text-gray-600 hover:text-amber-600 py-4 transition-all duration-300 hover:translate-x-1">
                    
                    <img src="../img/renomer.png" alt="renomer Icon" class="w-6 h-6 mr-2">
                    Home
                   
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-amber-600 py-4 transition-all duration-300 hover:translate-x-1">
                    
                    <img src="../img/menu.png" alt="menu Icon" class="w-6 h-6 mr-2">
                    Some menu item
                   
                </a>
                <a href="#"   class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1 men">
                   
                    <img src="../img/fichier.png" alt="Settings Icon" class="w-6 h-6 mr-2">
                    Another menu 
                   
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
                    <h2 class="text-sm md:text-xl text-white font-bold">
                        Welcome Dash
                    </h2>
                    <span class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-amber-600 bg-white">
                        01:51
                    </span>
                </div>

                <div class="flex-1 bg-amber-600 border border-blue-200 rounded-xl p-6 animate-fade-in">
                    <h2 class="text-sm md:text-xl text-white font-bold">
                        Clients inscrits <br><strong>23</strong>
                    </h2>
                    <a href="#" class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-amber-600 bg-white hover:bg-amber-500 transition-transform duration-300 hover:scale-105">
                        See 
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Première carte -->
    <div class="bg-white rounded-xl shadow-lg p-6 h-container transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.1s">
        <h3 class="text-xl font-bold text-amber-600">Demandes en attente</h3>
        <div class="flex items-center pt-4">
            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/image9.jpeg" alt="Image du plat">
            <div class="flex-1 flex flex-col text-start pl-4">
                <div class="flex justify-between items-center border-b pb-2">
                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                    <span class="text-primary font-semibold">$115</span>
                </div>
                <div class="flex justify-between items-center pt-2">
                    <small class="italic text-gray-600 flex-1">Ipsum ipsum clita erat amet dolor justo diam</small>
                </div>
            </div>
        </div>
        <div class="flex justify-evenly items-center pt-4">
            <button class="text-white bg-blue-600 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Accepter Chicken Burger">
                Accepter
            </button>
            <button class="text-white bg-red-700 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Refuser Chicken Burger">
                Refuser
            </button>
        </div>
        <div class="flex items-center pt-4">
            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/image9.jpeg" alt="Image du plat">
            <div class="flex-1 flex flex-col text-start pl-4">
                <div class="flex justify-between items-center border-b pb-2">
                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                    <span class="text-primary font-semibold">$115</span>
                </div>
                <div class="flex justify-between items-center pt-2">
                    <small class="italic text-gray-600 flex-1">Ipsum ipsum clita erat amet dolor justo diam</small>
                </div>
            </div>
        </div>
        <div class="flex justify-evenly items-center pt-4">
            <button class="text-white bg-blue-600 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Accepter Chicken Burger">
                Accepter
            </button>
            <button class="text-white bg-red-700 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Refuser Chicken Burger">
                Refuser
            </button>
        </div>
        <div class="flex items-center pt-4">
            <img class="flex-shrink-0 rounded w-20 h-16" src="../img/image9.jpeg" alt="Image du plat">
            <div class="flex-1 flex flex-col text-start pl-4">
                <div class="flex justify-between items-center border-b pb-2">
                    <h5 class="font-medium text-lg">Chicken Burger</h5>
                    <span class="text-primary font-semibold">$115</span>
                </div>
                <div class="flex justify-between items-center pt-2">
                    <small class="italic text-gray-600 flex-1">Ipsum ipsum clita erat amet dolor justo diam</small>
                </div>
            </div>
        </div>
        <div class="flex justify-evenly items-center pt-4">
            <button class="text-white bg-blue-600 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Accepter Chicken Burger">
                Accepter
            </button>
            <button class="text-white bg-red-700 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Refuser Chicken Burger">
                Refuser
            </button>
        </div>
    </div>

    <!-- Deuxième carte -->
    <div class="bg-white rounded-xl shadow-lg p-6 h-container transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.2s">
        <h3 class="text-xl font-bold text-amber-600">Demandes de journée</h3>
    </div>

    <!-- Troisième carte -->
    <div class="bg-white rounded-xl shadow-lg p-6 h-container transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.3s">
        <h3 class="text-xl font-bold text-amber-600">Autre demandes </h3>
    </div>
</div>

<div class="reservations-container container mx-auto flex flex-col gap-8 py-8">
    <div class="reservation-card bg-white border border-gray-300 rounded-lg shadow-lg p-6 hover:shadow-xl transition-transform transform hover:-translate-y-2">
        <h1 class="text-center text-4xl font-bold text-amber-600 mt-4 mb-8">Nouvelle Menu</h1>
        <div class="relative  w-full h-24">
   
</div>
        
        <div class="flex flex-wrap justify-between gap-6">
            <!-- Carte menu 1 -->
            <div class="flex items-center w-full">
                <img class="flex-shrink-0 rounded w-20 h-16" src="URL" alt="Image du plat">
                <div class="flex-1 flex flex-col text-start pl-4">
                    <div class="flex justify-between items-center border-b pb-2">
                        <h5 class="font-medium text-lg">NOM</h5>
                        <span class="text-primary font-semibold">PRIX</span>
                    </div>
                    <div class="flex justify-between items-center pt-2">
                        <small class="italic text-gray-600 flex-1">Description</small>
                        <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Order Chicken Burger">
                            Order
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full">
                <img class="flex-shrink-0 rounded w-20 h-16" src="URL" alt="Image du plat">
                <div class="flex-1 flex flex-col text-start pl-4">
                    <div class="flex justify-between items-center border-b pb-2">
                        <h5 class="font-medium text-lg">NOM</h5>
                        <span class="text-primary font-semibold">PRIX</span>
                    </div>
                    <div class="flex justify-between items-center pt-2">
                        <small class="italic text-gray-600 flex-1">Description</small>
                        <button class="text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-300 px-4 py-2 w-24 rounded-3xl text-sm" role="button" aria-label="Order Chicken Burger">
                            Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script>
 
    
    const menuLinks = document.querySelectorAll('.flex.items-center.text-gray-600.hover\\:text-indigo-800.py-4.transition-all.duration-300.hover\\:translate-x-1');
    menuLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            document.getElementById('formulair').classList.remove('hidden');
        });
    });

    
    document.getElementById('hideForm').addEventListener('click', function () {
        document.getElementById('formulair').classList.add('hidden');
        document.getElementById('formulair').reset();
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
        const descriptionRegex = /^[a-zA-Z]*$/; 
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
    document.getElementById('submit').addEventListener('click', function (e) {
  e.preventDefault(); 
  const valid = validation();
  if (valid) {
    
  }
});

    </script>
</body>
</html>