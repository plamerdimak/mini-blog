<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php require_once "./partials/functions.php"; ?>
    <?php include_once "./partials/menu.php"; ?>
    <h1> le blog !</h1>
    <div class="container"> 
        <?php blog($articles);  ?>

    </div>
</body>
<style>
    {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Général */
body {
    font-family: "Segoe UI", Arial, sans-serif;
    background-color: #f3f4f6;
    color: #333;
}

/* Titre */
h1 {
    text-align: center;
    margin: 40px 0;
    font-size: 2.5rem;
    color: #1e3a8a;
}

/* Container des articles */
.container {
    max-width: 1100px;
    margin: auto;
    padding: 20px;

    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

/* Carte article */
.article {
    background-color: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.article:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.12);
}

/* Titre article */
.article h2 {
    font-size: 1.4rem;
    color: #1e40af;
    margin-bottom: 10px;
}

/* Contenu article */
.article p {
    color: #555;
    line-height: 1.6;
}

/* Lien "Lire plus" */
.article a {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    color: white;
    background-color: #1e40af;
    padding: 8px 14px;
    border-radius: 6px;
    font-size: 0.9rem;
}

.article a:hover {
    background-color: #2563eb;
}

/* Menu (menu.php) */
nav {
    background-color: #0f172a;
    padding: 15px;
    text-align: center;
}

nav a {
    color: white;
    margin: 0 15px;
    text-decoration: none;
    font-weight: 600;
}

nav a:hover {
    color: #38bdf8;
}
</style>
</html>