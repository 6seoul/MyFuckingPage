<?php 
$pdo = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=glitter_fuck;charset=utf8', 'glitter_fucking', 'fucklolol');
if ($_SERVER['REQUEST_METHOD']=='post') {
    echo 'fuck';
    $stmt = $pdo->prepare('INSERT INTO commentfuck values(?, ?)');
    if ($stmt->execute([$_REQUEST['userfuck'], $_REQUEST['commentfuck']])) {
        header ('Location: ./index.php');
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rape Me Lol</title>
    </head>
    <body>
        <img src="./Fuck.jpeg" style="width:50vw;"></img>
<p style="font-size:70px;"> Unfortunately we are not yet available in your country.
</p>
<img src="./idiot.gif" style="width:100vw;"></img>
<p style="font-size:40px;"> “おまえバカ”
</p>
<form action="" method="post">
Userfuck: <input type="text" name="userfuck"><br>
commentfuck: <input type="text" name="commentfuck">
<input type="submit" value="fuck now">
</form>
<?php
$tlfuck = $pdo->query('SELECT * FROM commentfuck');
foreach ($tlfuck as $row) {
echo $row['userfuck'].'says '.$row['commentfuck'];
}
?><br>
<a href=“http://www.pornhub.com”>fuck</a>
    </body>
</html>
