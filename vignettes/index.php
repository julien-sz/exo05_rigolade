<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

    <!-- début traitement image upload-->
<?php
    if (isset($_FILES['NomVignette'])) {
        $targetImg = $_FILES['NomVignette']['name'];
        $targetImgTmp = $_FILES['NomVignette']['tmp_name'];
        $conv_img_name = pathinfo($targetImg, PATHINFO_FILENAME);
        $max_width = 248;
        $max_height = 248;
        list($width, $height, $type, $attr) = getimagesize( $targetImgTmp );
        if ( $width > $max_width || $height > $max_height ) {
            $fn = $targetImgTmp;
            $size = getimagesize( $fn );
            if( $width > 248 || $height > 248 ) {
                $width = $max_width;
                $height = $max_height;
            }
            $source = imagecreatefromstring(file_get_contents($fn));
            $destination = imagecreatetruecolor( $width, $height );
            imagecopyresampled($destination, $source, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );
            imagejpeg($destination,'vignettes/'.$conv_img_name.'.jpg');
        }
    }
?><!-- fin traitement image upload-->



<div class="general-content">
<h1>Les vignettes</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Vous devez faire le script pour que les vignettes soient enregistrées dans le répertoires "vignettes", les vignettes dans ce répertoire doivent être visibles sur cette page. La vignette doit avoir le même nom que le fichier original. Pour info, le format pour l'image envoyée par le formulaire est un .png, il vous faudra donc convertir d'une manière ou d'une autre l'image téléchargée pour que l'image finale soit au format .jpg
    </p>
<h2>Faire une vignette</h2>
<div>
<div class="image-uploader">
    <form action="/vignettes/"  method="post" enctype="multipart/form-data">
      <div class="image-editor">
        <input type="file" class="cropit-image-input btn btn-default btn-lg" name="NomVignette">
        <div class="cropit-preview"></div>
        <div class="image-size-label">
          Redimensionner l'image
        </div>
        <input type="range" class="cropit-image-zoom-input">
        <input type="hidden" name="image-data" class="hidden-image-data" />
        <button type="submit" name="submit" class="btn btn-default btn-lg">Téléversement de la vignette</button>
      </div>
    </form>
 </div>
 </div>
    <h2>Vignettes disponibles</h2>
    <!-- début gallerie image -->
<?php
    $dossierImg = "vignettes/";
    $vignettes = glob($dossierImg . "*.jpg");

    foreach($vignettes as $vignette) {
        echo '<img src="' . $vignette . '" class="vignettes">';
    }

?>
<!-- Fin gallerie image -->
<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
    <script>
      $(function() {
        $('.image-editor').cropit();

        $('form').submit(function() {
          var imageData = $('.image-editor').cropit('export');
          $('.hidden-image-data').val(imageData);

          return true;
        });
      });
    </script>
<?php  include '../footer.php'; ?>