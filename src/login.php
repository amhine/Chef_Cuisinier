<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="output.css">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
    <div class="text-center">
      <h1 class="text-3xl font-semibold text-gray-900">Sign in</h1>
      <p class="mt-2 text-gray-500">Sign in below to access your account</p>
    </div>
    <form action="" class="mt-6 flex flex-col">
      <div class="relative mt-6">
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Email Address"
          class="peer w-full border-b-2 border-gray-300 py-2 placeholder-transparent focus:border-gray-500 focus:outline-none"
        />
        <label
          for="email"
          class="absolute top-0 left-0 transform -translate-y-1/2 text-sm text-gray-800 transition-all duration-200 ease-in-out peer-placeholder-shown:translate-y-2 peer-placeholder-shown:text-gray-500 peer-focus:-translate-y-1/2 peer-focus:text-sm peer-focus:text-gray-800"
        >
          Email Address
        </label>
      </div>
      <div class="relative mt-6">
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Password"
          class="peer w-full border-b-2 border-gray-300 py-2 placeholder-transparent focus:border-gray-500 focus:outline-none"
        />
        <label
          for="password"
          class="absolute top-0 left-0 transform -translate-y-1/2 text-sm text-gray-800 transition-all duration-200 ease-in-out peer-placeholder-shown:translate-y-2 peer-placeholder-shown:text-gray-500 peer-focus:-translate-y-1/2 peer-focus:text-sm peer-focus:text-gray-800"
        >
          Password
        </label>
      </div>
      <div class="mt-6">
        <button type="submit" class="w-full rounded-md bg-black px-3 py-4 text-white hover:bg-gray-700 focus:outline-none">
          Sign in
        </button>
      </div>
      <p class="mt-4 text-center text-sm text-gray-500">
        Don't have an account yet?
        <a href="siginup.php" class="font-semibold text-gray-600 hover:underline">Sign up</a>.
      </p>
    </form>
  </div>
</body>

</html>