
<?php

class upload{

    public function startUpload(){
        $name= new settings();
        $name->generateName();
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $filetype = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {

                $uploadOk = 1;

        }
        $_SESSION['audio-streams'] = $_POST['audio'];
        $_SESSION['compression-level'] = $_POST['level'];
        $_SESSION['old-name'] = $_FILES["fileToUpload"]["name"];


        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($filetype != "webm" && $filetype != "gif" && $filetype != "mp4") {
            echo "Sorry, only mp4 & webm files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {


            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                header('Location: /?action=working');
                } else {
                echo "Sorry, there was an error uploading your file.";
            }
    }
}

                }