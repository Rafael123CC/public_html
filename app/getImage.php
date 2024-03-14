<?php
if (!isset($_REQUEST["tv"]))
    exit(0);

require "../ligacao.php";
$tv = $_REQUEST["tv"];

$stmt = $conn->prepare("SELECT  
                        FROM listaTVs 
                        LEFT JOIN layoutSchema ON listaTVs.layout=layoutSchema.idLayout 
                        WHERE listaTVs.id = ?");
$stmt->bind_param("i", $tv);
$stmt->bind_result($layout, $id, $x, $y, $larg, $alt, $grupoID);
$stmt->execute();
$result = array();
while($row =mysqli_stmt_fetch($stmt)){
        $result[] = array("layout"=>$layout, "id"=>$id, "x"=>$x, "y"=>$y, "larg"=>$larg, "alt"=>$alt, "playlist"=>array($grupoID,array()));
}
$stmt->free_result();
for ($i=0; $i<count($result); ++$i){
   
    $stmt = $conn->prepare("SELECT playlists.id
                            FROM grupoPlaylist 
                            left join playlists on grupoPlaylist.playlistID=playlists.id 
                            where grupoID=? AND hora_inicio <=NOW() 
                            order by hora_inicio DESC 
                            LIMIT 1");
    $stmt->bind_param("i", $result[$i]["playlist"][0]);
    $stmt->execute();
    $stmt->bind_result($playlistID);
    if ($stmt->fetch()){
        $stmt->free_result();
        $stmt = $conn->prepare("SELECT url, tipo FROM `videosPlaylist`
                                    LEFT JOIN Medias ON videosPlaylist.MediaID=Medias.id
                                    WHERE videosPlaylist.PlaylistID=?;");
        $stmt->bind_param("i", $playlistID);
        $stmt->execute();
        $stmt->bind_result($url, $tipo);
        while ($stmt->fetch()){
            //echo "medias", $url, $tipo;
            $result[$i]["playlist"][1][] = array($url, $tipo);
        }
    }

}


    
echo json_encode($result);
/*

while ($stmt->fetch()) { ?>
    <div style="position: absolute; top:<?=$y?>%; left:<?=$x?>%; width: <?=$larg?>%; height: <?=$alt?>%;">
       <?=$PlaylistID?>
</div> 

<?php    
}     
*/