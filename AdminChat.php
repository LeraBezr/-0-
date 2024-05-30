<?php 
session_start();  
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чат</title> 
    <link rel="stylesheet" href="../css/menu.css"> 
    <link rel="stylesheet" href="../css/chat-styles.css">
</head> 
<body> 
<?php 
include("../menu.php"); 
?> 
<div id="chat-container"> 
    <?php 
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
        echo '<div id="user-list">';         
        echo '<h3>Пользователи</h3>';         
        echo '<ul id="all-users">';         
        echo '</ul>';         
        echo '</div>';   
    }
    ?> 
  <div id="chat-messages">
       <?php 
        if (isset($_SESSION['user_id'])) {
            echo '<script>selectedUserId = ' . $_SESSION['user_id'] . ';</script>'; 
            include 'getMessages.php';   
        }         
        ?>    
    </div> 
</div> 
<script src="../js/chat-admin.js"></script> 
</body> 
</html> 




