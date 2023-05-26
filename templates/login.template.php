<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="vh-100 vw-100 d-flex flex-column justify-content-center text-white">
    <div class="container col-10 col-sm-8 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
        <h1 class="display-1 align-self-center text-center mb-5"><strong>MangaMind</strong></h1>
        <h3 class="display-5 mb-2 opacity-75">Se connecter</h3>
        <form action="./login.php" class="d-flex flex-column" method="POST">
            <div class="form-floating text-white w-100 mb-3">
                <input
                    type="text"
                    class="form-control bg-dark text-white border-0 bg-opacity-50"
                    id="user_name"
                    placeholder=" "
                    name="user_name"
                />
                <label for="user_name" class="opacity-25"
                    >Nom d'utilisateur</label
                >
            </div>
            <div class="form-floating text-white w-100 mb-3">
                <input
                    type="password"
                    class="form-control bg-dark text-white border-0 bg-opacity-50"
                    id="user_password"
                    placeholder=" "
                    name="user_password"
                />
                <label for="password" class="opacity-25"
                    >Mot de passe</label
                >
            </div>
            <button type="submit" id="submit" name="login" class="btn btn-primary btn-block mb-4" >Se connecter</button>
            <div class="text-center">
                <p>Pas encore membre ? <a href="./register.php">S'inscrire</a></p>
            </div>
        </form>
    </div>
</body>
</html>