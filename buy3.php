<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
    <li><a href="index.php">TOP</a>>カート>購入確認>購入完了</li>
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
<!-- php実装 -->
<section class="membership-registration">
    <div class="margin-container">
    <p>ご購入いただきありがとうございます。<br>
       今後ともご愛顧の程、宜しくお願いいたします。
    </p>
    </div>
    
    <a href="index.php" class="member-text">クレジットカード登録へすすむ</a>

</section>
</main>
<?php require 'footer.php'; ?>