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

<h2 class="hedding-login">入力情報確認</h2>

<!-- リクエストパラメータpost調整 -->
<section class="credit-entry-information">
<form action="credit3.php" method="post" class="login-form">
  <div class="product-total">
    <div>お名前<p>phpリクエストパラメータ挿入</p></div>
    <div>カード番号<p>phpリクエストパラメータ挿入</p></div>
    <div>カード会社<p>phpリクエストパラメータ挿入</p></div>
    <div>有効期限<p>phpリクエストパラメータ挿入月　phpリクエストパラメータ挿入年</p></div>
    <div>セキュリティコード<p>phpリクエストパラメータ挿入</p></div>
  </div>
  <input type="submit" value="登録する">
  
</form>
</section>






<?php require 'footer.php'; ?>