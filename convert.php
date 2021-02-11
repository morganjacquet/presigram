<?php
    header('Content-type: image/png');

    if (empty($_FILES['file']['tmp_name']) || empty($_POST['verbe']) || empty($_POST['adverbe'])) {
        return false;
    }

    $filename = $_FILES['file']['tmp_name'];

    // Nouvelles dimensions
    $new_width = 1080;
    $new_height = 1080;
-
    // Redimensionnement
    $image_p = imagecreatetruecolor($new_width, $new_height);

    if ($_FILES['file']['type'] == 'image/png') {
        $image_ori = imagecreatefrompng($filename);
    } else if ($_FILES['file']['type'] == 'image/jpg') {
        $image_ori = imagecreatefromjpg($filename);
    } else if ($_FILES['file']['type'] == 'image/jpeg') {
        $image_ori = imagecreatefromjpeg($filename);
    }
    

    imagecopyresampled($image_p, $image_ori, 0, 0, 0, 0, $new_width, $new_height, imagesx($image_ori), imagesy($image_ori));

    // Couleur du text
    $textColor = imagecolorallocate($image_ori, 255, 255, 255);

    $image = $image_p;
    
    // Text verbe
    $fontPath_verbe = './assets/fonts/LexendMega.ttf';
    $text_verbe = $_POST['verbe'];
    $text_verbe = strtoupper($text_verbe);

    // Placement text verbe
    $box_verbe = imageftbbox( 40, 0, $fontPath_verbe, $text_verbe ); 
    $x_verbe = (imagesx($image) - ($box_verbe[2] - $box_verbe[0])) / 2; 
    $y_verbe = (imagesy($image) - ($box_verbe[1] - $box_verbe[7])) / 2; 
    $y_verbe -= $box_verbe[7] + 430;

    // Ecriture text verbe
    imagettftext($image, 40, 0, $x_verbe, $y_verbe, $textColor, $fontPath_verbe, $text_verbe);

    // Text adverbe
    $fontPath_adverbe = './assets/fonts/BambiFont.ttf';
    $text_adverbe = $_POST['adverbe'];

    // Placement text adverbe
    $box_adverbe = imageftbbox( 100, 0, $fontPath_adverbe, $text_adverbe ); 
    $adx_verbe = (imagesx($image) - ($box_adverbe[2] - $box_adverbe[0])) / 2; 
    $y_adverbe = (imagesy($image) - ($box_adverbe[1] - $box_adverbe[7])) / 2; 
    $y_adverbe -= $box_adverbe[7] + 330;

    // Ecriture text verbe
    imagettftext($image, 100, 0, $adx_verbe, $y_adverbe, $textColor, $fontPath_adverbe, $text_adverbe);

    // Génération d'une image png
    imagepng($image, './tmp/'.$_FILES['file']['name']);
    imagedestroy($image);

    echo $_FILES['file']['name'];
?>