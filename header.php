<!-- --------------------------   Début code titre, description et keywords dynamique selon page affichée --------------------------------------- -->

<?php
include_once 'config.php';
$page = $_SERVER['PHP_SELF'];
switch ($page){
    case '/index.php':
        $TitrePage = $site['exoPHPrigolo']['titre'];
        $DescriptionPage = $site['exoPHPrigolo']['description'];
        $KeywordsPage = $site['exoPHPrigolo']['keywords'];
    break;
    case '/helpers/index.php':
        $TitrePage = $menu['Les helpers']['titre'];
        $DescriptionPage = $menu['Les helpers']['description'];
        $KeywordsPage = $menu['Les helpers']['keywords'];
    break;
    case '/classe/index.php':
        $TitrePage = $menu['La classe']['titre'];
        $DescriptionPage = $menu['La classe']['description'];
        $KeywordsPage = $menu['La classe']['keywords'];
        break;
    case '/note/index.php':
        $TitrePage = $menu['La note']['titre'];
        $DescriptionPage = $menu['La note']['description'];
        $KeywordsPage = $menu['La note']['keywords'];
        break;
    case '/menu/index.php':
        $TitrePage = $menu['Le menu']['titre'];
        $DescriptionPage = $menu['Le menu']['description'];
        $KeywordsPage = $menu['Le menu']['keywords'];
        break;
    case '/referencement/index.php':
        $TitrePage = $menu['Le référencement']['titre'];
        $DescriptionPage = $menu['Le référencement']['description'];
        $KeywordsPage = $menu['Le référencement']['keywords'];
        break;
    case '/vignettes/index.php':
        $TitrePage = $menu['Les vignettes']['titre'];
        $DescriptionPage = $menu['Les vignettes']['description'];
        $KeywordsPage = $menu['Les vignettes']['keywords'];
        break;
    case '/morpion/index.php':
        $TitrePage = $menu['Le morpion']['titre'];
        $DescriptionPage = $menu['Le morpion']['description'];
        $KeywordsPage = $menu['Le morpion']['keywords'];
        break;
    case '/news/index.php':
        $TitrePage = $menu['news']['titre'];
        $DescriptionPage = $menu['news']['description'];
        $KeywordsPage = $menu['news']['keywords'];
        break;
    case '/fichier-csv/index.php':
        $TitrePage = $menu['fichierCSV']['titre'];
        $DescriptionPage = $menu['fichierCSV']['description'];
        $KeywordsPage = $menu['fichierCSV']['keywords'];
}
?>
<!-- --------------------------   fin code titre, description et keywords dynamique selon page affichée --------------------------------------- -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $TitrePage ?></title>
    <meta name="description" content="<?php echo $DescriptionPage ?>" />
    <meta name="keywords" content="<?php echo $KeywordsPage ?>">

    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/menufullpage.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.cropit.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
<a href="#menu" class="menu-link">
    <span>toggle menu</span>
</a>
<nav id="menu" class="panel" role="navigation">

    <!-- Début menu à remplacer avec les tableaux de config.php -->
<?php

    switch ($NbreElementLigne)
    {
        case 1:
            echo
                '            
                <ul>
                   <li>
                      <div><a href=' . $menu['Les helpers']['link'] . '>' . $menu['Les helpers']['titre'] . '</a></div>
                   </li><li> 
                      <div><a href=' . $menu['La classe']['link'] . '>' . $menu['La classe']['titre'] . '</a></div>
                   </li><li>
                      <div><a href=' . $menu['La note']['link'] . '>' . $menu['La note']['titre'] . '</a></div>
                   </li><li>
                      <div><a href=' . $menu['Le menu']['link'] . '>' . $menu['Le menu']['titre'] .'</a></div>
                   </li><li>   
                      <div><a href=' . $menu['Le référencement']['link'] . '>' . $menu['Le référencement']['titre'] . '</a></div>
                   </li><li>   
                      <div><a href=' . $menu['Les vignettes']['link'] . '>' . $menu['Les vignettes']['titre'] . '</a></div>
                   </li><li>
                      <div><a href=' . $menu['Le morpion']['link'] . '>'.$menu['Le morpion']['titre']. '</a></div>
                   </li><li>   
                      <div><a href=' . $menu['news']['link'] . '>'.$menu['news']['titre'].'</a></div>
                   </li><li>   
                      <div><a href=' . $menu['fichierCSV']['link'] . '>'.$menu['fichierCSV']['titre'] .'</a></div>                   
                   </li>
                </ul>
             </nav>
             ';
            break;
        case 2:
            echo '
                <ul>
                   <li>
                      <div><a href=' . $menu['Les helpers']['link'] . '>' . $menu['Les helpers']['titre'] . '</a></div>                    
                      <div><a href=' . $menu['La classe']['link'] . '>' . $menu['La classe']['titre'] . '</a></div>
                   </li><li>  
                      <div><a href=' . $menu['La note']['link'] . '>' . $menu['La note']['titre'] . '</a></div>                  
                      <div><a href=' . $menu['Le menu']['link'] . '>' . $menu['Le menu']['titre'] .'</a></div>
                   </li><li>   
                      <div><a href=' . $menu['Le référencement']['link'] . '>' . $menu['Le référencement']['titre'] . '</a></div>   
                      <div><a href=' . $menu['Les vignettes']['link'] . '>' . $menu['Les vignettes']['titre'] . '</a></div>
                   </li><li>
                      <div><a href=' . $menu['Le morpion']['link'] . '>'.$menu['Le morpion']['titre']. '</a></div>   
                      <div><a href=' . $menu['news']['link'] . '>'.$menu['news']['titre'].'</a></div>
                   </li><li>   
                      <div><a href=' . $menu['fichierCSV']['link'] . '>'.$menu['fichierCSV']['titre'] .'</a></div>                   
                   </li>
                </ul>
             </nav>
             ';
            break;
        case 3:
            echo '
                <ul>
                   <li>
                      <div><a href=' . $menu['Les helpers']['link'] . '>' . $menu['Les helpers']['titre'] . '</a></div>                    
                      <div><a href=' . $menu['La classe']['link'] . '>' . $menu['La classe']['titre'] . '</a></div>                    
                      <div><a href=' . $menu['La note']['link'] . '>' . $menu['La note']['titre'] . '</a></div>
                   </li><li>                  
                      <div><a href=' . $menu['Le menu']['link'] . '>' . $menu['Le menu']['titre'] .'</a></div>                    
                      <div><a href=' . $menu['Le référencement']['link'] . '>' . $menu['Le référencement']['titre'] . '</a></div>   
                      <div><a href=' . $menu['Les vignettes']['link'] . '>' . $menu['Les vignettes']['titre'] . '</a></div>
                   </li><li>
                      <div><a href=' . $menu['Le morpion']['link'] . '>'.$menu['Le morpion']['titre']. '</a></div>   
                      <div><a href=' . $menu['news']['link'] . '>'.$menu['news']['titre'].'</a></div>   
                      <div><a href=' . $menu['fichierCSV']['link'] . '>'.$menu['fichierCSV']['titre'] .'</a></div>                   
                   </li>
                </ul>
             </nav>
             ';
            break;
        case 4:
            echo '
                <ul>
                   <li>
                      <div><a href=' . $menu['Les helpers']['link'] . '>' . $menu['Les helpers']['titre'] . '</a></div>                    
                      <div><a href=' . $menu['La classe']['link'] . '>' . $menu['La classe']['titre'] . '</a></div>                    
                      <div><a href=' . $menu['La note']['link'] . '>' . $menu['La note']['titre'] . '</a></div>                                     
                      <div><a href=' . $menu['Le menu']['link'] . '>' . $menu['Le menu']['titre'] .'</a></div> 
                   </li><li>                      
                      <div><a href=' . $menu['Le référencement']['link'] . '>' . $menu['Le référencement']['titre'] . '</a></div>   
                      <div><a href=' . $menu['Les vignettes']['link'] . '>' . $menu['Les vignettes']['titre'] . '</a></div>                   
                      <div><a href=' . $menu['Le morpion']['link'] . '>'.$menu['Le morpion']['titre']. '</a></div>   
                      <div><a href=' . $menu['news']['link'] . '>'.$menu['news']['titre'].'</a></div>  
                   </li><li>    
                      <div><a href=' . $menu['fichierCSV']['link'] . '>'.$menu['fichierCSV']['titre'] .'</a></div>                   
                   </li>
                </ul>
             </nav>
             ';
    }
?>
    <!-- Fin menu à remplacer avec les tableaux de config.php -->
