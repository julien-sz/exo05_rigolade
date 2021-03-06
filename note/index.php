<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

    <div class="general-content">
    <h1>La note</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Calculez vous même votre note en utilisant le formulaire suivant. Attention, les notes sont dans le fichier note.txt au format JSON, vous devez faire la correspondance entre ces données et les données envoyées par le formulaire.
    </p>

    <!-- Début de votre PHP-->
    <?php
    $url = 'note.txt';
    $json_datanote = file_get_contents($url);
    $dataNote = (json_decode($json_datanote));

    if (isset($_POST["submit"]))  {  // attribut "name" ajouté au boutton submit du formulaire suite à notre discussion

        $MegaNote = $dataNote->{$_POST["helpers"]} + $dataNote->{$_POST["classe"]} + $dataNote->{$_POST["note"]}
            + $dataNote->{$_POST["menu"]} + $dataNote->{$_POST["referencement"]} + $dataNote->{$_POST["vignettes"]}
            + $dataNote->{$_POST["morpion"]} + $dataNote->{$_POST["news"]} + $dataNote->{$_POST["csv"]};
        if (!empty($MegaNote)) {
            echo  '<div class="MegaNote">'.$MegaNote.'/20</div>'; }
        elseif ($MegaNote == 0) {echo '<div class="MegaNote">0/20, vous êtes sérieux ?</div>'; }
    }
    else { echo '<div class="MegaNote">/20</div>';}
    /*  -----------------------------------   CODE POUBELLE sans variables dynamiques
    if(isset($_POST['Submit'])) {
            $valHelp = $_POST["helpers"];
            $valClasse = $_POST["classe"];
            $valNote = $_POST["note"];
            $valMenu = $_POST["menu"];
            $valRef = $_POST["referencement"];
            $valVign = $_POST["vignettes"];
            $valMorp = $_POST["morpion"];
            $valNews = $_POST["news"];
            $valCsv = $_POST["csv"];
            $zero = $dataNote['qsdfV45'];

            if ($valHelp == 'lhGtF62') {
                $noteHelp = $dataNote['lhGtF62']; }
            else  { $noteHelp = $zero; }
            if ($valClasse == "lhGtF62") {
                $noteClasse = $dataNote['lhGtF62']; }
            else { $noteClasse = $zero; }
            if ($valNote == "lhGtF62") {
                $noteNote = $dataNote['lhGtF62']; }
            else { $noteNote = $dataNote['qsdfV45']; }
            if ($valMenu == "GFoP5s") {
                $noteMenu = $dataNote['GFoP5s']; }
            else { $noteMenu = $zero; }
            if ($valRef == "GFoP5s") {
                $noteRef = $dataNote['GFoP5s']; }
            else { $noteRef = $zero; }
            if ($valVign == "GFoP5s") {
                $noteVign = $dataNote['GFoP5s']; }
            else {$noteVign = $zero; }
            if ($valMorp == "MvDF34") {
                $noteMorp = $dataNote['MvDF34']; }
            else { $noteMorp = $zero; }
            if ($valNews == "MvDF34") {
                $noteNews = $dataNote['MvDF34']; }
            else {$noteNews = $zero; }
            if ($valCsv == "YvKJhc23") {
                $noteCsv = $dataNote['YvKJhc23']; }
            else {$noteCsv = $zero; }

            $megaNote = $noteHelp + $noteClasse + $noteNote + $noteMenu + $noteRef + $noteVign + $noteMorp + $noteNews + $noteCsv;

            if (!empty($megaNote)) {
                echo  '<div class="MegaNote">'.$megaNote.'/20</div>'; }
            elseif ($megaNote == 0) {echo '<div class="MegaNote">0/20, vous êtes sérieux ?</div>'; }
    }
    else { echo '<div class="MegaNote">/20</div>';}
    // ----------------------------------------- Fin CODE POUBELLE
    */
    ?>
    <!-- Fin de votre PHP-->

    <h2>Avez-vous réussi les exercices suivants :</h2>
    <form action="/note/" method="post" id="exo">
        <table class="table table-striped">
            <tbody>
            <tr>
                <td class="lead">Exercice "Les helpers"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="helpers" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="helpers" value="lhGtF62">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">Exercice "La classe"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="classe" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="classe" value="lhGtF62">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">Exercice "La note"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="note" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="note" value="lhGtF62">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">Exercice "Le menu"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="menu" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="menu" value="GFoP5s">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">Exercice "Référencement"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="referencement" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="referencement" value="GFoP5s">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">Exercice "Vignettes"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="vignettes" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="vignettes" value="GFoP5s">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">Exercice "Morpion"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="morpion" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="morpion" value="MvDF34">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">News"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="news" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="news" value="MvDF34">OUI
                    </label></td>
            </tr>
            <tr>
                <td class="lead">Exercice "Fichier CSV"</td>
                <td align="right"><label class="radio-inline">
                        <input type="radio" name="csv" checked value="qsdfV45">NON
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="csv" value="YvKJhc23">OUI
                    </label></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" class="btn btn-default btn-lg" name="submit" form="exo" value="Submit">Calculer ma note</button></td>
            </tr>
            </tbody>
        </table>


    </form>

    <script>
        $(document).ready(function() {
            $('.menu-link').menuFullpage();
        } );
    </script>
<?php  include '../footer.php'; ?>