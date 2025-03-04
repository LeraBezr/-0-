<!DOCTYPE html> 
<html lang="en"> 
<head>     
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Меню игр</title>     
    <link rel="stylesheet" href="../css/menu.css"> 
    <link rel="stylesheet" href="../css/games-list.css">     
    <link rel="stylesheet" href="../css/loader.css"> 
    <script src="../js/loader.js"></script> 
</head> 
<body> 
<header>Меню игр</header>     
<?php     
include("../menu.php");     
include("../application/loader.php");     
?>   
<div class="container">         
    <table class="game-list"> 
    <tr>                 
        <th>Игра</th>                 
    <th>Описание</th>            
 </tr>             
 <tr>
 <td><a href="x-o/x-o.php">Крестики-нолики</a></td>
 <td>Добро пожаловать в классическую игру в крестики-нолики! Это увлекательное соревнование, где два игрока соревнуются в умении выстраивать линии из своих символов - крестиков или ноликов - на игровом поле. Стратегия, тактика и интуиция игрока играют ключевую роль в этой игре. Умение предвидеть ходы противника и одновременно строить собственные комбинации - вот что делает эту игру такой захватывающей.</td> 
 </tr>    
 <tr> 
 <td><a href="x-o(bot)/x-o.php">Крестики-нолики с ботом</a></td> 
 <td>Добро пожаловать в классическую игру в крестики-нолики с простым ботом для тренировки! В этой версии игры вы можете сыграть против компьютерного противника, который представляет собой базового бота. Это отличный способ потренировать свои навыки в игре, испытать свою стратегию и научиться принимать лучшие решения в каждой ситуации. Будьте готовы к вызовам и улучшайте свою игру с каждым ходом!</td>   
 </tr> 
 <tr>                 <td><a href="x-o(bot)/x-o.php">Крестики-нолики с непобедимым ботом</a></td> 
 <td>Готовы ли вы к настоящему вызову? Добро пожаловать в игру в крестики-нолики против непобедимого бота! Этот бот использовал самые передовые алгоритмы, чтобы стать практически непобедимым противником. Проявите свои лучшие навыки, придумайте стратегию и попытайтесь одержать победу в этой захватывающей схватке против искусственного интеллекта!</td>
 </tr> 
 <tr> 
 <td><a href="snake/snake.php">Змейка</a></td> 
 <td>Змейка - классическая видеоигра, в которой игрок управляет растущей линией или змеей на ограниченной плоскости. Цель состоит в том, чтобы есть предметы (например, еду или яблоки), чтобы расти дальше, избегая при этом столкновений со стенами или собственным хвостом змеи. По мере того, как змея растет, ориентироваться на все более переполненном игровом поле становится все сложнее.</td> 
 </tr> 
 <tr> 
 <td><a href="breakout/breakout.php">Breakout</a></td>                 <td>Breakout — это классическая аркадная игра, в которой игрок управляет ракеткой в нижней части экрана, чтобы отбивать мяч и разбивать кирпичи вверху. Цель состоит в том, чтобы очистить поле от кирпичей, ударив по ним мячом, не позволяя мячу упасть ниже ракетки.</td> 
 </tr> 
</table>     
</div> 
</body> 
</html> 
 
 















