<?php session_start(); ?>
<?php require "header.php";?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
     <li><a href="index.php">TOP</a>>ログイン>ログイン完了</li>
        <li>
            <?php 
            if(isset($_REQUEST['user'])){
                echo '<p class="user-name">welcome!! <span class="login-name">', htmlspecialchars($_REQUEST['user']), '</span>様</p>';
            } else {
                echo '<p class="user-name">welcome!! <span class="login-name">ゲスト</span>様</p>';
            }
            ?>
        </li>
    </ul>
</nav>
<!--                          ↑   Top固定領域 パーツ　↑                               -->


<h2 class="hedding-login">ログイン</h2>

<section class="login-completed-contents">
    <div class="margin-container">
<?php 
    unset($_SESSION['customer']);
    $pdo=new PDO('mysql:localhost=localhost;dbname=shop;charset=utf8','staff','password');
    $sql=$pdo->prepare('select * from customer where login=? and password=?');
    $sql->execute([$_REQUEST['login'],$_REQUEST['password']]);
    foreach ($sql as $row) {
        $_SESSION['customer']=['id'=>$row['id'],'name'=>$row['name'],
        'address'=>$row['address'],'login'=>$row['login'],'password'=>$row['password']];
    }

    $_SESSION['customer']['name'] = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}$/',$password);
    $_SESSION['customer']['login'] = mb_convert_kana($_SESSION['customer']['login'], 'n');

    if(isset($_SESSION['customer'])){
        echo '<p class="login-text">ログインが完了しました。<br>引き続きお楽しみください。</p>',
             '</div>',
             '<a href="buy1.php" class="member-text">購入確認ページへすすむ</a>',
             '<a href="index.php" class="member-text">TOPページへもどる</a>';
    } else {
        echo '<p class="login-text">ログイン名またはパスワードが違います。</p>',
             '</div>',
             '<a href="buy1.php" class="member-text">ログイン画面にもどる</a>',
             '<a href="index.php" class="member-text">TOPページへもどる</a>';
    }

?>
</section>
<?php require "footer.php";?>