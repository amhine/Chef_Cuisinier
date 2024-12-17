<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page with Username and Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-800 text-gray-400">

  <div class="w-11/12 max-w-sm mx-auto">
    <form action="https://httpbin.org/post" method="POST" class="bg-gray-900 p-8 rounded-lg shadow-md">

      <!-- Username Field -->
      <div class="mb-4 flex items-center bg-gray-700 rounded">
        <label for="login__username" class="p-4 bg-gray-800 rounded-l">
          <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-3.87 0-7 3.13-7 7h14c0-3.87-3.13-7-7-7z"/>
          </svg>
        </label>
        <input id="login__username" type="text" name="username" class="w-full p-3 bg-gray-700 text-gray-200 focus:outline-none focus:ring focus:ring-pink-500 rounded-r" placeholder="Username" required>
      </div>

      <!-- Password Field -->
      <div class="mb-6 flex items-center bg-gray-700 rounded">
        <label for="login__password" class="p-4 bg-gray-800 rounded-l">
          <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2a5 5 0 00-5 5v3H5a2 2 0 00-2 2v8a2 2 0 002 2h14a2 2 0 002-2v-8a2 2 0 00-2-2h-2V7a5 5 0 00-5-5zm3 8H9V7a3 3 0 016 0v3z"/>
          </svg>
        </label>
        <input id="login__password" type="password" name="password" class="w-full p-3 bg-gray-700 text-gray-200 focus:outline-none focus:ring focus:ring-pink-500 rounded-r" placeholder="Password" required>
      </div>

      <!-- Submit Button -->
      <div>
        <input type="submit" value="Sign In" class="w-full py-3 bg-pink-600 hover:bg-pink-700 text-white font-bold rounded-lg cursor-pointer">
      </div>
    </form>

    <!-- Footer Text -->
    <p class="text-center text-sm mt-6">
      Not a member? 
      <a href="#" class="text-pink-500 hover:underline">Sign up now</a>
    </p>
  </div>
</body>
</html>
