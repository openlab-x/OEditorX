
<?php
$example_name = "Text Colors";


include($_SERVER['DOCUMENT_ROOT'].'/oeditorx/templates/header.php');
// include($_SERVER['DOCUMENT_ROOT'].'/editor/t.code');

//$url = "https://raw.githubusercontent.com/codeskit/Web-Development/main/text_colors.html"; //write your raw.github.com URL
include($_SERVER['DOCUMENT_ROOT'].'/oeditorx/templates/examples.php');
$gethtml = file_get_contents($example_url);
echo $gethtml;

include($_SERVER['DOCUMENT_ROOT'].'/oeditorx/templates/footer.php');
//include 'lis.php';

?>
