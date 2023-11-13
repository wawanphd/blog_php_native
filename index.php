<?php 
include "header.php";
    
    if(isset($_GET['menu'])){
        if($_GET['menu']==1){
            include "artikel.php";
        }else if($_GET['menu']==2){
            include "form.php";
        }else if($_GET['menu']==3){
            include "manage.php";
        }else{
            echo "Pilih Menu";
        }
    }else{
        include "home.php";
    }
    


include "footer.php";

?>


    
