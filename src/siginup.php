
<?php 
include './conexiondata.php'; 
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $pasword = $_POST['pasword'];

//     if (!empty($pasword)) {
//         $hashedPassword = password_hash($pasword, PASSWORD_BCRYPT);
//         echo "Mot de passe hashé : " . $hashedPassword;
//     } else {
//         echo "Veuillez entrer un mot de passe.";
//     }
// } else {
//     echo "Méthode de requête non autorisée.";
// }

//  $id_user = $_GET["id_user"];

// if (isset($_POST["submit"])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $pasword = $_POST['mots_passe'];

    
//     $name = mysqli_real_escape_string($connect, $name);
//     $email = mysqli_real_escape_string($connect, $email);
//     $pasword  = mysqli_real_escape_string($connect, $pasword );

   
//     $sql = "UPDATE `utilisateur` SET `email`='$email', `name`='$name', `pasword `='$pasword ' WHERE `id_user` = $id_user";

  
//     $resul = mysqli_query($connect, $sql);

//     if ($resul) {
//         header("Location: index.php?msg=Data updated successfully");
//     } else {
//         echo "Failed: " . mysqli_error($connect);
//     }
// }
include './conexiondata.php'; // Inclure la connexion à la base de données

if (isset($_POST["submit"])) {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['mots_passe'];

    // Sécuriser les données contre les injections SQL
    $name = mysqli_real_escape_string($connect, $name);
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);

    // Hash du mot de passe pour le stocker en sécurité (utilisation de la fonction password_hash)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Requête SQL pour insérer les données dans la base
    $sql = "INSERT INTO utilisateur (name, email, mots_passe) VALUES ('$name', '$email', '$hashed_password')";

    // Exécuter la requête SQL
    $resul = mysqli_query($connect, $sql);

    if ($resul) {
        // Rediriger ou afficher un message de succès
        echo "Données ajoutées avec succès !";
    } else {
        // Afficher l'erreur en cas d'échec
        echo "Échec : " . mysqli_error($connect);
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
            <h1 class="text-3xl font-semibold text-gray-900">Sign up</h1>
            <p class="mt-2 text-gray-500">Sign up below to create your account</p>
        </div>
        <form onsubmit="return validateForm()" class="mt-6 flex flex-col" method="POST">
            <div class="relative mt-6">
                <input type="text" name="name" id="name" placeholder="Name" class="peer w-full border-b-2 border-gray-300 py-2 placeholder-transparent focus:border-gray-500 focus:outline-none" />
                <label for="name" class="absolute top-0 left-0 transform -translate-y-1/2 text-sm text-gray-800 transition-all duration-200 ease-in-out peer-placeholder-shown:translate-y-2 peer-placeholder-shown:text-gray-500 peer-focus:-translate-y-1/2 peer-focus:text-sm peer-focus:text-gray-800">
                    Name
                </label>
                <span id="nameError" class="text-red-500 text-sm hidden">Name invalid</span>
            </div>
            <div class="relative mt-6">
                <input type="email" name="email" id="email" placeholder="Email Address" class="peer w-full border-b-2 border-gray-300 py-2 placeholder-transparent focus:border-gray-500 focus:outline-none" />
                <label for="email" class="absolute top-0 left-0 transform -translate-y-1/2 text-sm text-gray-800 transition-all duration-200 ease-in-out peer-placeholder-shown:translate-y-2 peer-placeholder-shown:text-gray-500 peer-focus:-translate-y-1/2 peer-focus:text-sm peer-focus:text-gray-800">
                    Email Address
                </label>
                <span id="emailError" class="text-red-500 text-sm hidden">Email address invalid</span>
            </div>
            <div class="relative mt-6">
                <input type="password" name="pasword" id="pasword" placeholder="Password" class="peer w-full border-b-2 border-gray-300 py-2 placeholder-transparent focus:border-gray-500 focus:outline-none"/>
                <label for="password" class="absolute top-0 left-0 transform -translate-y-1/2 text-sm text-gray-800 transition-all duration-200 ease-in-out peer-placeholder-shown:translate-y-2 peer-placeholder-shown:text-gray-500 peer-focus:-translate-y-1/2 peer-focus:text-sm peer-focus:text-gray-800">
                    Password
                </label>
                <span id="passwordError" class="text-red-500 text-sm hidden">Password invalid</span>
            </div>
            <div class="mt-6">
                <button type="submit" class="w-full rounded-md bg-black px-3 py-4 text-white hover:bg-gray-700 focus:outline-none">
                    Sign up
                </button>
            </div>
            <p class="mt-4 text-center text-sm text-gray-500">
                You have an account yet?
                <a href="login.php" class="font-semibold text-gray-600 hover:underline">Sign in</a>.
            </p>
        </form>
    </div>
</body>

<script>
    function validateForm() {
        document.getElementById("nameError").classList.add("hidden");
        document.getElementById("emailError").classList.add("hidden");
        document.getElementById("passwordError").classList.add("hidden");

        let valid = true;

        const name = document.getElementById("name").value;
        const nameRegex = /^[a-zA-Z\s]+$/; 
        if (!nameRegex.test(name)) {
            document.getElementById("nameError").classList.remove("hidden");
            valid = false;
        }
        
        const email = document.getElementById("email").value;
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailRegex.test(email)) {
            document.getElementById("emailError").classList.remove("hidden");
            valid = false;
        }

        const password = document.getElementById("pasword").value;
        const passwordRegex = /^[a-zA-Z0-9\W_]+$/; 
        if (!passwordRegex.test(password)) {
            document.getElementById("passwordError").classList.remove("hidden");
            valid = false;
        }

        return valid; 
    }
</script>
</html>
