<html>

<head>

<title>Perv!</title>

</head>



<?php

// Capture the values posted to this php program from the text fields

// which were named 'YourName' and 'FavoriteWord' respectively



$YourName = $_REQUEST['YourName'] ;

$FavoriteWord = $_REQUEST['FavoriteWord'] ;

?>



<body bgcolor="#FFFFFF" text="#000000">

<p>



Hi <?php print $YourName; ?>



<p>



You like the word <b> <?php print $FavoriteWord; ?>!?!</b>



<p>You oughta be ashamed of yourself!



</body>



</html>