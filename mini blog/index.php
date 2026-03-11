<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php include_once "./partials/menu.php"   ?>
   <h1> bienvenu sur mon site</h1>
   <p> Ici un blog spécialisé en informatique</p>

   <?php require "./partials/footer.php" ;  ?>
</body>
<style> 
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Corps de la page */
body {
    font-family: "Segoe UI", Arial, sans-serif;
    background-color: #f2f4f8;
    color: #333;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Menu (menu.php) */
nav {
    background-color: #0f172a;
    padding: 15px;
    text-align: center;
}

nav a {
    color: #ffffff;
    text-decoration: none;
    margin: 0 15px;
    font-weight: 600;
}

nav a:hover {
    color: #38bdf8;
}

/* Contenu principal */
h1 {
    margin-top: 50px;
    text-align: center;
    font-size: 2.5rem;
    color: #1e40af;
}

p {
    margin-top: 15px;
    text-align: center;
    font-size: 1.1rem;
    color: #555;
}

/* Footer (footer.php) */
footer {
    margin-top: auto;
    background-color: #0f172a;
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 0.9rem;
} 


</style>
</html>