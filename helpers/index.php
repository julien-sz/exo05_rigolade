<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

    <div class="general-content">
    <h1>Les helpers</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données liées à ces exercices pour retourner la totalité des apprenants. Faites du PHP pour mélanger ce résultat et obtenir 4 apprenants au hasard.
    </p>
    <h2>Résultat</h2>


    <!-- Début du code à remplacer par votre PHP -->
    <?php
    $queryUsers = $dbconnexion->query("SELECT nom,prenom FROM users");           // je sélectionne les données
    $queryUsersResult = $queryUsers->fetchAll();                                 // je choppe les données (un array de génère automatiquement)
    shuffle ($queryUsersResult);                                                 // je mélange les données
    $quatreUsers = array_slice($queryUsersResult,0,4);                          // je sélectionne les 4 premiers éléments du tableau
    //var_dump($quatreUsers);
    foreach($quatreUsers as $value)                                              // pour chaque élément du tableau
    {
        echo
            '<div class="choix-aleatoire">' . $value[0] . ' ' . $value[1] .'</div>';   // j'affiche les deux valeurs (nom et prénom) avec un espace au milieu
    }
    ?>
    <!-- Fin du code à remplacer par votre PHP -->

    <script>
        $(document).ready(function() {
            $('.menu-link').menuFullpage();
        } );
    </script>
<?php  include '../footer.php'; ?>