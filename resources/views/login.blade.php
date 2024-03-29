<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
        max-width: 500px;
        margin: 0 auto;
    }

    /* Full-width inputs */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Extra style for the cancel button (red) */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    /* Avatar image */
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>
<body>
<form action="action_page.php" method="post">
    <div class="imgcontainer">
        <img src="https://www.jds.fr/medias/image/0-13520900-1610118345-144957-300-0.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Nom d'utilisateur" name="uname" required>

        <label for="psw"><b>Mot de passe</b></label>
        <input type="password" placeholder="Mot de passe" name="psw" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
        </label>
    </div>
<!--
    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Annuler</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    -->
</form>
</body>


</html>

