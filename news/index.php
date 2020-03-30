<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>
<div class="general-content">
    <h1>Les news du monde</h1>
    <h2>Explications sur l'exercice</h2>
    <p>A partir de l'url suivante <a href="https://www.lemonde.fr/sitemap_news.xml" target="_blank">https://www.lemonde.fr/sitemap_news.xml</a>, allez chercher toutes les dernières news du monde, présenter le titre, la date et évidemment un lien sur le titre pour lire l'article !
    </p>
<h2>Résultat</h2>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Titre</th>
                <th>Date</th>
            </tr>
        </tfoot>
    <tbody>
        <!-- -------------------------------------------  Début PHP news ----------------------------------------- -->
        <?php
        $xml = 'https://www.lemonde.fr/sitemap_news.xml';
        $xmldataNews = simplexml_load_file($xml);           // Charger le fichier XML en mémoire
        $nameSpace = $xmldataNews->getNamespaces(true);    // Déclarer les URI namespace
        $nombreNews = $xmldataNews->count();              // Compter les éléments du fichiers XML
        for ($i = 0; $i < $nombreNews; $i++) {           // Conditions d'incrément avec résultat du comptage d'éléments XMl comme limite
            foreach ($xmldataNews->url[$i]->children($nameSpace['news']) as $element) { // loop dans <url>/<news:news>/ , l'incrément est sur <url> qui contient toutes les datas à chopper pour une news
                $datefr = new DateTime($element->publication_date);                    // Représentation de la date (le formatage de cette dernière se fait dans le echo avec date_format)
                echo '<tr><td><a href="'.$xmldataNews->url[$i]->loc.'" target="_blank">'.$element->title.'</td><td>'.date_format($datefr, "d/m/Y H:i").'</td></tr>';  // Affichage
            }
        }
        ?>
      <!--  // ******** Note pour plus tard: Voir fichier xml dans rèp. /fichiers de travail pour la structure ************  -->
         <!-- ----------------------------------------------- Fin PHP news ---------------------------------------- -->
    </tbody>
    </table>
    </div>
<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
    $('#example').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/French.json"
            }
        } );
} );
</script>
<?php  include '../footer.php'; ?>