<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>4eachBlog 掲示板</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
        $stmt = $pdo->query("select * from 4each_keijiban");
        ?>
        
        
        <header> 
            <div class="logo">
                <img src="4eachblog_logo.jpg">
            </div>
            <div class="menu">
                <ul>
                    <li class ="top">トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
        <main>
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <h2>入力フォーム</h2>
                    <div>
                        <lavel>ハンドルネーム</lavel>
                        <br>
                        <input type="text" name="Handlename" size="50">
                        <br>
                    </div>
                    
                    <div>
                        <lavel>タイトル</lavel>
                        <br>
                        <input type="text" name="Title" size="50">
                        <br>
                    </div>
                    
                    <div>
                        <lavel>コメント</lavel>
                        <br>
                        <textarea cols="35" rows="7" name="Comments" size="80"></textarea>
                        <br><br>
                    </div>
                    
                    <div>
                    <input type="submit" class="submit" value="投稿する">
                    </div>
                    
                </form>
                
                <?php
                
                while ($row = $stmt->fetch()) {
                    echo "<div class='box'>";
                    echo "<h3>".$row['Title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['Comments'];
                    echo "<div class='Handlename'>posted by".$row['Handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
            
            <div class="right">
                <div class="area1">
                    <h2>人気の記事</h2>
                    <p>PHPオススメ本</p>
                    <p>PHP　MyAdminの使い方</p>
                    <p>今人気のエディタTop5</p>
                    <p>HTMLの基礎</p>
                </div>
                <div class="area2">
                    <h2>オススメリンク</h2>
                    <p>インターノウス株式会社</p>
                    <p>XAMPPの使い方</p>
                    <p>Eclipseのダウンロード</p>
                    <p>Blaketsのダウンロード</p>
                </div>
                <div class="area3">
                    <h2>カテゴリ</h2>
                    <p>HTML</p>
                    <p>PHP</p>
                    <p>MySQL</p>
                    <p>JavaScript</p>
                </div>
            </div>
            
            </main>
        <footer>
            copyright ©️ internous | 4each blog is the one which provides A to Z about programming
        </footer>
       
    
    </body>
</html>