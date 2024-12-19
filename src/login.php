<?php
include './conexiondata.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Échapper les entrées pour éviter les injections SQL
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);

    // Requête SQL pour vérifier l'utilisateur
    $query = "SELECT * FROM utilisateur WHERE email = '$email'";
    $result = mysqli_query($connect, $query);

    // Vérifier si l'utilisateur existe et le mot de passe est correct
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Comparer le mot de passe
        if (password_verify($password, $user['pasword']) && $user['role'] === 'chef') {
            // Rediriger vers le tableau de bord
            header("Location: dashbord.php");
            exit();
        } else {
            $error = "Email ou mot de passe incorrect.";
        }
    } else {
        $error = "Utilisateur non trouvé.";
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
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
    <div class="text-center">
      <h1 class="text-3xl font-semibold text-gray-900">Sign in</h1>
      <p class="mt-2 text-gray-500">Sign in below to access your account</p>
    </div>
    <form action="" method="POST" onsubmit="return validateForm()" class="mt-6 flex flex-col">
      <div class="relative mt-6">
        <input type="email" name="email" id="email" placeholder="Email Address" class="peer w-full border-b-2 border-gray-300 py-2 placeholder-transparent focus:border-gray-500 focus:outline-none" />
        <label for="email" class="absolute top-0 left-0 transform -translate-y-1/2 text-sm text-gray-800 transition-all duration-200 ease-in-out peer-placeholder-shown:translate-y-2 peer-placeholder-shown:text-gray-500 peer-focus:-translate-y-1/2 peer-focus:text-sm peer-focus:text-gray-800">
          Email Address
        </label>
        <span id="emailError" class="text-red-500 text-sm hidden">Email address invalid</span>
      </div>
      <div class="relative mt-6">
        <input type="password" name="password" id="password" placeholder="Password" class="peer w-full border-b-2 border-gray-300 py-2 placeholder-transparent focus:border-gray-500 focus:outline-none"/>
        <label for="password" class="absolute top-0 left-0 transform -translate-y-1/2 text-sm text-gray-800 transition-all duration-200 ease-in-out peer-placeholder-shown:translate-y-2 peer-placeholder-shown:text-gray-500 peer-focus:-translate-y-1/2 peer-focus:text-sm peer-focus:text-gray-800">
          Password
        </label>
        <span id="passwordError" class="text-red-500 text-sm hidden">Password invalid</span>
      </div>
      <?php if (isset($error)): ?>
        <div class="text-red-500 text-sm mt-2"><?php echo $error; ?></div>
      <?php endif; ?>
      <div class="mt-6">
        <button type="submit" class="w-full rounded-md bg-black px-3 py-4 text-white hover:bg-gray-700 focus:outline-none">
          Sign in
        </button>
      </div>
      <p class="mt-4 text-center text-sm text-gray-500">
        Don't have an account yet?
        <a href="signup.php" class="font-semibold text-gray-600 hover:underline">Sign up</a>.
      </p>
    </form>
  </div>
</body>

<script>
    function validateForm() {
        document.getElementById("emailError").classList.add("hidden");
        document.getElementById("passwordError").classList.add("hidden");

        let valid = true;

        const email = document.getElementById("email").value;
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zAZ]{2,6}$/;
        if (!emailRegex.test(email)) {
            document.getElementById("emailError").classList.remove("hidden");
            valid = false;
        }

        const password = document.getElementById("password").value;
        const passwordRegex =  /^[a-zA-Z0-9\W_]+$/;
        if (!passwordRegex.test(password)) {
            document.getElementById("passwordError").classList.remove("hidden");
            valid = false;
        }

        return valid;
    }
</script>
</html>
