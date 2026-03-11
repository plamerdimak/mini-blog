<?php
$articles = [
    ["id" => "1",
    "title" => "PHP un bon langague ou pas ?",
    "content" => "<p> 
                        PHP est un langage de programmation principalement utilisé pour le développement web côté serveur.
                        Il permet de créer des sites et des applications dynamiques en générant du contenu personnalisé en fonction des actions de l'utilisateur, comme les formulaires ou les connexions à un compte.
                  </p> ",
    "image" => "elephant.jpg",
    ],

    [
      "id" => "2",
    "title" => "Javascript un bon langague ou pas ?",
    "content" => "<p> 
                        JavaScript est un langage de programmation incontournable du web, principalement utilisé pour rendre les pages internet interactives et dynamiques.
                        Il permet par exemple d'afficher des animations, de valider des formulaires, de modifier le contenu de la page sans la recharger ou encore de réagir aux actions de l'utilisateur comme les clics et le clavier.
                  </p> ",
    "image" => "javascript.jpg",  
    ],
];





 function blog($articles){
   foreach ($articles as  $article):  ?>
            <div class ="article">
                <div>
                    <img src="../mini blog/assets/image/<?php echo $article ["image"];?> " alt="">
                </div>
               <h2> <?php echo $article ["title"]; ?></h2> 
               <p> <?php echo substr ($article ["content"],0,500)."..."; ?></p> 
               <p>
                <a href="article.php?id=<?php echo $article["id"]; ?>" >consulter l'article</a>
                </p>
            </div>
        
        <?php endforeach;
         
}

function getArticleById($id,$tab){
   foreach ($tab as  $article) {
     if ($article["id"]===$id){
        return $article;
     }
   }
   return null;
} ?>

<style>
     {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* GLOBAL */
body {
    font-family: "Segoe UI", Arial, sans-serif;
    background-color: #f3f4f6;
    color: #1f2937;
}

/* MENU */
nav {
    background-color: #0f172a;
    padding: 16px;
    text-align: center;
}

nav a {
    color: #ffffff;
    text-decoration: none;
    margin: 0 14px;
    font-weight: 600;
}

nav a:hover {
    color: #38bdf8;
}

/* TITRE */
h1 {
    text-align: center;
    margin: 40px 0;
    font-size: 2.6rem;
    color: #1e3a8a;
}

/* CONTAINER */
.container {
    max-width: 1100px;
    margin: auto;
    padding: 20px;

    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

/* ARTICLE */
.article {
    background-color: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.article:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 35px rgba(0, 0, 0, 0.12);
}

/* IMAGE */
.article img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

/* CONTENU */
.article h2 {
    font-size: 1.4rem;
    color: #1e40af;
    margin: 18px;
}

.article p {
    margin: 0 18px 15px;
    line-height: 1.6;
    color: #4b5563;
}

/* BOUTON */
.article a {
    display: block;
    margin: 0 18px 20px;
    text-align: center;
    background-color: #1e40af;
    color: #ffffff;
    text-decoration: none;
    padding: 10px;
    border-radius: 8px;
    font-weight: 600;
}

.article a:hover {
    background-color: #2563eb;
}

/* RESPONSIVE */
@media (max-width: 600px) {
    h1 {
        font-size: 2rem;
    }
}
</style>