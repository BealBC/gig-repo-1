<?php $this->load->view($this->config->item('theme') . 'header'); 

    
    if ($first_name != ""){
    echo '<img src="../img/' . $picture . '" width="100" height="100"' . '<h3>' . $email . '</h3><br>'; 
    echo '<h1>Welcome ' . $first_name . " " . $last_name . '!<br><hr><br> You ' . $logged . " at " . date('Y-m-d H:i:s') . '</h1>';
        

    } else {
        echo '<h1>You ' . $logged . ' at ' . date('Y-m-d H:i:s') . '.</h1>';
    }
    
    ?>

<?php
$this->load->view($this->config->item('theme') . 'footer'); ?>