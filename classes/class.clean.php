<?php
class clean{
 public function startCleaning(){
  
        unlink("uploads/".$_SESSION['old-name']);
        header('Location: /?action=video');
    }
        
 }