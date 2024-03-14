
<?php require "../../ligacao.php";?>
<html>
<head>
<title>HTML Frames Example - Content</title>
<style type="text/css">
body {
    font-family: verdana, arial, sans-serif;
    background-color: #07070700;
}
</style>
</head>
<body>
    <video id="video" width="100%" height="100%" autoplay muted>
  
    <?php
        $sql = "SELECT `id`, `URL`, `tipo`, `filename` FROM `Medias` WHERE `tipo` = 2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    ?>
        <source src="../<?=$row["URL"];?>" type="video/mp4">
    <?php
            }
        } else {
            echo "Não foram encontrados vídeos na base de dados.";
        }
    ?>
  
    </video>

    <script>
        var video = document.getElementById('video');
        var sources = video.getElementsByTagName('source');
        var currentIndex = 0;

        function playNextVideo() {
            currentIndex = (currentIndex + 1) % sources.length;
            video.src = sources[currentIndex].src;
            video.play();
        }

        function checkVideoEnded() {
            if (video.currentTime >= video.duration - 0.5) {
                playNextVideo();
            }
        }

        video.addEventListener('timeupdate', checkVideoEnded);
    </script>

</body>
</html>





