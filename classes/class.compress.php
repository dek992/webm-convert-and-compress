<?php

class compress{

 public function startCompressing(){   

         /*
        echo $_SESSION['new-name']."<br>";
        echo $_SESSION['audio-streams']."<br>";
        echo $_SESSION['compression-level']."<br>";
        echo $_SESSION['delete-video'];
        echo $_SESSION['old-name'];

        */
          echo "Starting compression...";
         // sleep for 10 seconds
        sleep(3);

          $cmdSoundOn = "avconv -i 'uploads/".$_SESSION['old-name']."' -c:v libvpx -b:v ".$_SESSION['compression-level']."k -c:a libvorbis 'uploads/".$_SESSION['new-name']."'";
          $cmdSoundOff= "avconv -i 'uploads/".$_SESSION['old-name']."' -c:v libvpx -an -b:v ".$_SESSION['compression-level']."k -c:a libvorbis 'uploads/".$_SESSION['new-name']."'";

          if($_SESSION['audio-streams']==="on"){
         shell_exec($cmdSoundOn);
          echo "Compression finished!";
                   header( "Location: /?action=clean" );
          }else {
               shell_exec($cmdSoundOff);
          echo "Compression finished!";
                   header( "Location: /?action=clean" );


          }
}
          
          }