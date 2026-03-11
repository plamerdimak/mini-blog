

   <ul>
    <li>
        <a href ="index.php">Acceuil </a>
    </li>
     <li>
       
        <a href ="blog.php"> blog </a>
    </li>
    <li>
       
        <a href ="#">contact </a>
    </li>
   </ul>
   <style>  
    ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 30px;
    background-color: #0f172a;
    padding: 15px 0;
}

/* LIENS */
ul li a {
    color: #ffffff;
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: 600;
    padding: 8px 14px;
    border-radius: 6px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* HOVER */
ul li a:hover {
    background-color: #1e40af;
    color: #38bdf8;
}

/* PAGE ACTIVE (optionnel) */
ul li a.active {
    background-color: #2563eb;
    color: white;
}

/* RESPONSIVE */
@media (max-width: 600px) {
    ul {
        flex-direction: column;
        gap: 15px;
    }
}
   </style>
