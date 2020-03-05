<?php
$dir= "https://api.trello.com/1/members/me/boards?key=7ff5e189041bce080b065154e779a324&token=cbbcfa25fe2b21d4d323bd2f0f2fea0457fcaf5b8c37cb4b052a19c1cbd3e62a";

$dir_json= file_get_contents($dir);
$dir_array= json_decode($dir_json,true);
var_dump($dir_array[0]['url']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Trello</title>
</head>
<body>

    <h1>The Eight Wonders</h1>
    <blockquote class="trello-board-compact">
        <a href="<?php echo $dir_array[0]['url']; ?>">Tablero Trello</a>
    </blockquote>

    <h1>Trello Development</h1>
    <blockquote class="trello-board-compact">
        <a href="<?php echo 'https://trello.com/b/nC8QJJoZ/trello-development-roadmap'; ?>">Tablero Trello</a>
    </blockquote>


</body>
<script src="https://p.trellocdn.com/embed.min.js"></script>
</html>