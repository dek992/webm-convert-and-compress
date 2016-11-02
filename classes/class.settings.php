<?php


class settings{
    
    //this will generate unique name for every uploaded video file
    function generateName(){
        $_SESSION['new-name'] = uniqid().".webm";
       
        }

  
    
}