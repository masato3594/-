<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
     <li><a href="index.php">TOP</a>>ログイン>会員登録</li>
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

<h2 class="hedding-login">カード情報登録完了</h2>

<section class="registration-completed">
<div class="margin-container">
    <!-- php,if文出力で修正 -->
    <p>支払い情報登録が完了しました。<br>
       続けて購入確認ページへお進みください。
    </p>
</div>
    
    <a href="buy1.php.php" class="member-text">購入確認ページへすすむ</a>
    

</section>



<?php require 'footer.php'; ?>