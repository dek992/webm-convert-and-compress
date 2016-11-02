<html>
    <head><title>Upload & Compress Video</title>
     <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
<?php

session_start();
include_once 'includes/autoload.php';


if(isset($_GET['action'])){
 
    if($_GET['action'] === "upload"){
        $upload = new upload();
        $upload->startUpload();
        }
    else if($_GET['action'] === "compress"){
        $compress = new compress();
        $compress->startCompressing();
    }
    
    else if($_GET['action'] === "clean"){
        $clean = new clean();
        $clean->startCleaning();
    }
      else  if($_GET['action'] === "video"){
        $video = new video();
        $video->loadVideo();
        }
      else if($_GET['action'] === "working"){
        $working = new working();
        $working->starting();
        }
        else {
            header("Location: /");
        }
       }
if(!isset($_GET['action'])){


?>

  
 <center>
    <div class="form-style-6">
<form action="?action=upload" method="POST" enctype="multipart/form-data">

     <select name="level">
        <option value="500">Compression level 1</option>
        <option value="400">Compression level 2</option>
        <option value="300">Compression level 3</option>
        <option value="200">Compression level 4</option>
        <option value="100">Compression level 5</option>
        <option value="50">Compression level 6</option>
        <option value="25">Compression level 7</option>
        <option value="10">Compression level 8</option>
        <option value="5">Compression level 9</option>
        <option value="1">Compression level 10</option>

    </select><br>
    <select name="audio">
        <option value="on">Enabled audio</option>
        <option value="off">Disabled audio</option>
    </select><br>
     <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input type="submit" value="Upload and Compress" name="submit">
</form>
        </div>
        </center>
</body>

</html>

<?php
}
?>