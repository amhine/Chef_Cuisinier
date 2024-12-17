<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
</head>

<body class="bg-gray-100 font-sans">

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-12 px-6">
    <!-- Carte 1 -->
    <div class="bg-white border border-gray-100 transition-transform duration-500 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
      <span class="bg-red-100 text-red-500 text-sm font-semibold px-4 py-1 rounded-full inline-block mb-4">Breakfast</span>
      <img class="w-64 h-64 mx-auto object-cover transform transition duration-300 hover:scale-105" src="./assets/Breakfast/breakfast1.png" alt="Eggs Benedict">
      <div class="flex flex-col items-center mt-3 space-y-2">
        <h1 class="text-gray-900 text-lg font-bold">Eggs Benedict</h1>
        <p class="text-gray-500 text-sm text-center">Savourez un délicieux œuf poché avec une sauce hollandaise maison.</p>
        <h2 class="text-gray-900 text-2xl font-bold">$8.99</h2>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-2 rounded-full transition-transform duration-300 hover:scale-105">
          Order Now
        </button>
      </div>
    </div>

    <!-- Carte 2 -->
    <div class="bg-white border border-gray-100 transition-transform duration-500 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
      <span class="bg-red-100 text-red-500 text-sm font-semibold px-4 py-1 rounded-full inline-block mb-4">Breakfast</span>
      <img class="w-64 h-64 mx-auto object-cover transform transition duration-300 hover:scale-105" src="./assets/Breakfast/breakfast2.png" alt="Breakfast Sandwich">
      <div class="flex flex-col items-center mt-3 space-y-2">
        <h1 class="text-gray-900 text-lg font-bold">Breakfast Sandwich</h1>
        <p class="text-gray-500 text-sm text-center">Un sandwich garni d'ingrédients frais et savoureux.</p>
        <h2 class="text-gray-900 text-2xl font-bold">$9.99</h2>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-2 rounded-full transition-transform duration-300 hover:scale-105">
          Order Now
        </button>
      </div>
    </div>

    <!-- Carte 3 -->
    <div class="bg-white border border-gray-100 transition-transform duration-500 hover:shadow-xl hover:scale-105 p-4 rounded-lg relative">
      <span class="bg-red-100 text-red-500 text-sm font-semibold px-4 py-1 rounded-full inline-block mb-4">Breakfast</span>
      <img class="w-64 h-64 mx-auto object-cover transform transition duration-300 hover:scale-105" src="./assets/Breakfast/breakfast3.png" alt="Baked Chicken">
      <div class="flex flex-col items-center mt-3 space-y-2">
        <h1 class="text-gray-900 text-lg font-bold">Baked Chicken</h1>
        <p class="text-gray-500 text-sm text-center">Poulet tendre cuit au four avec des épices parfaites.</p>
        <h2 class="text-gray-900 text-2xl font-bold">$10.99</h2>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-2 rounded-full transition-transform duration-300 hover:scale-105">
          Order Now
        </button>
      </div>
    </div>

    <!-- Autres cartes... -->
  </div>
</body>

</html>