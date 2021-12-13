<h2>Home</h2>
<?php  
        if(!empty($success_arr)){ 
            echo '<p class="status-msg success">'.$success_arr.'</p>'; 
        }elseif(!empty($error_arr)){ 
            echo '<p class="status-msg error">'.$error_arr.'</p>'; 
        } 
    ?>