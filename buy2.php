<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
    <li><a href="index.php">TOP</a>>カート>購入確認>購入確認(最終確認)</li>
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

<h2 class="hedding-login">ご購入確認(最終確認)</h2>

<section class="purchase-affirmation">
    <!-- カートの中身をphpのリクエストパラメータを受け取る -->
    <h3 class="addressee-hedding">ご購入商品</h3>
    <div class="product-total">
        <div>商品名<p>phpリクエストパラメータ挿入</p></div>
        <div>数量　<p>phpリクエストパラメータ挿入</p></div>
        <div>金額　<p>phpリクエストパラメータ挿入</p></div>
    </div>

    <div class="product-total">
        <div>商品名<p>phpリクエストパラメータ挿入</p></div>
        <div>数量　<p>phpリクエストパラメータ挿入</p></div>
        <div>金額　<p>phpリクエストパラメータ挿入</p></div>
    </div>

    <div class="product-total">
        <div>合計数量<p>phpリクエストパラメータ挿入</p></div>
        <div>合計金額<p>phpリクエストパラメータ挿入</p></div>
    </div>
    <!-- カートの中身をphpのリクエストパラメータを受け取る -->
    <!-- ログイン情報のphpのリクエストパラメータを受け取る -->
        <h3 class="addressee-hedding">お届け先</h3>
        
    <div class="product-total">   
        <div>お名前　<p>phpリクエストパラメータ挿入</p></div>
        <div>郵便番号<p>phpリクエストパラメータ挿入</p></div>
        <div>住所　　<p>phpリクエストパラメータ挿入</p></div>
    </div>
    <!-- ログイン情報のphpのリクエストパラメータを受け取る -->
        <h3 class="addressee-hedding">お支払方法</h3>
        
    <div class="product-total"> 
        <div>お支払い<p>phpリクエストパラメータ挿入</p></div>
        <div>ブランド<p>phpリクエストパラメータ挿入</p></div>
    </div>
    
    <form action="credit1.php" method="post" class="login-form">
        <input type="submit" value="購入を確定させる" class="submit">
    </form>
</section>

</main>
<?php require 'footer.php'; ?>