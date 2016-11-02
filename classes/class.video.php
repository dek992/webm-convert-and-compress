<?php
class video{
    
    public function loadVideo(){
if(isset($_SESSION['new-name'])){
?>
<center>
    <div class="vid">
        <video width="640" height="480" controls >
  <source src="<?php echo "uploads/".$_SESSION['new-name']; ?>" type="video/webm">
  
Your browser does not support the video tag.
    </video><br>
    <a href="<?php echo "uploads/".$_SESSION['new-name'];?>" download>Download Compressed Video</a>
    </div>
</center>
<style>
    body{
        background-color: black;
    }
    a{
        font-weight: bold;
        color: white;
        text-decoration: none;
    }
    a:hover{
        color: lightblue;
    }
    .vid{
        margin-top: 10px;    }
    </style>
    
    <?php
} else { header("Location :/");}
}}