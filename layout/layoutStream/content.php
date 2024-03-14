<?php require "../../ligacao.php";?>
<html>
<head>
<title>HTML Frames Example - Content</title>
<style type="text/css">
body {
	font-family:verdana,arial,sans-serif;

	background-color:#07070700;
	}
</style>
</head>
<body>
	<div class="container-fluid">
        <div class="row top">

        <?php
            $sql = "SELECT `id`, `link` FROM `livestream` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
          
                 
            ?>


        <iframe width="100%" height="100%" src="<?=$row["link"];?>&controls=0&mute=1&autoplay=1" frameborder="0" allow="autoplay; clipboard-write; encrypted-media" allowfullscreen></iframe>
            
            <?php
              }
            }     
            ?>


        </div>

    </div>
</body>
</html>