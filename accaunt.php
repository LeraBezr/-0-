</section> 
<?php 
session_start(); // Инициализация сессии 
 // Получение ID пользователя из сессии 
 $user_id = $_SESSION['id']; 
 ob_start(); 
 include("upload-posts.php"); 
    $output = ob_get_clean(); 
?> 
<?php 
echo 'Максимальный размер данных: ' . ini_get('post_max_size') . '<br>';   
echo 'Максимальный размер файлов: ' . ini_get('upload_max_filesize') . '<br>';
echo 'Максимальное количество переменных: ' . ini_get('max_input_vars') . '<br>';   
echo 'Максимальное время выполнения скрипта: ' . ini_get('max_execution_time') . '<br>'; 
echo 'Максимальное время обработки данных: ' . ini_get('max_input_time') . '<br>'; 
echo 'Память для скрипта: ' . ini_get('memory_limit') . '<br>';    
?> 




<!DOCTYPE html> 
<html lang="en"> 
<head> 


 <meta charset="UTF-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Профиль пользователя</title> 

    <link rel="stylesheet" href="../css/profile-styles.css">     
    <link rel="stylesheet" href="../css/menu.css"> 
</head> 
<body> 

    <header>         <
    <h1>Профиль пользователя</h1>         
    <!-- HTML-код для кнопки выхода --> 
<form action="logout.php" method="post">
    <button type="submit" name="logoutButton">Выйти</button> 
</form> 

    </header> 
<?php 
include("../menu.php"); 
?>   
 <section id="profile-info">         
    <h2>Информация о пользователе</h2> 
<!-- Контейнер для отображения изображения --> 

<div id="profile-picture-container">         
    <img id="profile-picture" src="avatars/placeholder.png" 
alt="avatars/placeholder.png">     
    </div>
<!-- Вставляем имя пользователя из сессии -->         
<p>ФИО: <span class="info" id="user-name"><?php echo 
isset($_SESSION['login']) ? $_SESSION['login'] : ''; ?></span></p> 

<p>Возраст: <span class="info" id="user-age"><?php echo 
isset($_SESSION['age']) ? $_SESSION['age'] : ''; ?></span></p> 
<p>Дата создания аккаунта: <span class="info" id="account-creationdate"></span></p> 
<p>Email: <span class="info" id="user-email"></span></p>         
<p>О себе: <span class="info" id="user-info"></span></p>         
<input type="file" id="file-input" accept="image/*" style="display: none">
</section>     
<section id="user-posts">         
    <h2>Мои посты</h2>   
    <ul id="posts-list"> 
        <li> 
            <p>Текст поста</p> 
            <p>Комментарии: <span class="comments-count">5</span></p> 
</li>
    </ul> 
</section> 
<script src="../js/profile.js" defer></script> 
<script src="../js/picture.js" defer></script> 
</body> 
</html> 


    <h3>Панель управления</h3> 
    <button onclick="document.location='editer-profile.php'" id="editprofile">Редактировать Профиль</button>
    <button
    onclick="document.location='http://localhost/Bezrodnova/Social/AdminChat/AdminChat.php'" id="admin-chat">Написать администратору</button> 
    <!-- Кнопка обновления картинки -->
    <button id="update-picture">Обновить картинку</button> 
    <button id="delete-picture">Удалить картинку</button> 
    <button id="story_order" onclick="document.location='http://localhost/Bezrodnova/Social/shop/history_order.php'" >История заказов</button>


    <input type="file" id="file-input" accept="image/*" style="display: none">
    </section> 

    <button 
    onclick="document.location='http://localhost/Bezrodnova/Social/AdminChat/AdminChat.php'" id="admin-chat">Написать администратору</button> 
    <button 
    onclick="document.location='http://localhost/Bezrodnova/Social/posts/createpost.php'" id="admin-chat">Создать пост</button>
    <?php 
 if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) { 
    echo '<button 
    onclick="document.location=\'http://localhost/Bezrodnova/Social/AdminTools/allusers.php\'" >Все пользователи</button>'; 
    echo '<button 
    onclick="document.location=\'http://localhost/Bezrodnova/Social/AdminTools/allposts.php\'" >Все посты</button>'; 
    echo '<button 
    onclick="document.location=\'http://localhost/Bezrodnova/Social/AdminTools/allcomments.php \'">Все комментарии</button>'; 
}     
?>     
<!-- Конец кнопок для администратора --> 

</section> 
<?php 
    session_start();  
    // Получение ID пользователя из сессии 
    $user_id = $_SESSION['id']; 
    ob_start(); 
    // Начало буферизации вывода 
    include("upload-posts.php"); 
    $output = ob_get_clean(); 
    ?> 
    <!DOCTYPE html> 
    <html lang="en"> 
        <head> 
        


    <section id="user-posts"> 
<h2>Мои посты</h2>        <?php echo $output; ?> </section> <script>
document.addEventListener("DOMContentLoaded", function() { 
    var posts = document.querySelectorAll('.post-block'); 
    posts.forEach(function(post) {
        post.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#50576b';
        }); 
        post.addEventListener('mouseleave', function() { 
            this.style.backgroundColor = ''; 
        }); 
    }); 
}); 
</script>     
<script src="../js/profile.js" defer></script>     
<script src="../js/picture.js" defer></script> 
</body> 
</html> 







