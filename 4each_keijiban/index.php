<!DOCTYPE html>
<html lang ="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblog掲示板</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from 4each_keijiban");

?>

    <header>
        <div class="logo"><img src="4eachblog_logo.jpg"></div>
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
    </header>

    <main>
        <div class="left">

            <h1>プログラミングに役立つ掲示板</h1>

            <form method="post" action="insert.php">

                <h2 class="nyuryoku">入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" name="handlename" size="35" class="text">
                </div>
                
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" name="title" size="35" class="text">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea name="comments" row="20" cols="50"></textarea>
                </div>
                <input type="submit" name="submit" value="送信する" class="submit">
            </form>

            <?php

            while($row = $stmt->fetch()){
            echo "<div class ='keiji'>";
                echo "<h2>".$row['title']."</h2>";
                echo "<div class ='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
            echo"</div>";
            }

            ?>

            <div class="keiji">
                <h2>タイトル</h2>
                <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身。<br>
                記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身。<br>
                記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身。
                </p>
            </div>
        </div>

        <div class="right">
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h2>オススメリンク</h2>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracetsのダウンロード</li>
            </ul>
            <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>

        </div>
    </main>

    <footer>
        <p class="copy">copyright © internous | 4each blog the which provides A to Z about programming.</p> 
    </footer>
    
</body>
</html>