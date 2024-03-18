<?php require 'header.php';?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
     <li><a href="index.php">TOP</a>>ログイン>会員登録>入力確認>会員登録完了</li>
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
<div class="membership-hedding">
    <h2 class="hedding-login">会員登録完了</h2>
</div>
<section class="membership-registration">
    <div class="margin-container">
    <p>会員登録が完了しました。<br>
       ログインページへお進みください。
    </p>
    </div>
    
    <a href="credit.php" class="member-text">クレジットカード登録へすすむ</a>
    <a href="buy1.php" class="member-text">購入確認ページへすすむ</a>

</section>

<?php require 'footer.php'; ?>