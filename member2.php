<?php session_start(); ?>
<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
     <li><a href="index.php">TOP</a>>ログイン>会員登録>入力確認</li>
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

<h2 class="hedding-login">入力確認</h2>
<!-- ・正規表現を用いて「○○@○○」という文字列をメールアドレスとして登録できるようにする	 -->
<section class="input-confirmation-contents">
  <form action="member3.php" method="post" class="login-form">
    <div class="product-total">
      <div>お名前　　　　　　　　<p>phpリクエストパラメータ挿入</p></div>
      <div>お名前(フリガナ)　　　<p>phpリクエストパラメータ挿入</p></div>
      <div>郵便番号　　　　　　　<p>phpリクエストパラメータ挿入</p></div>
      <div>メールアドレス　　　　<p>phpリクエストパラメータ挿入</p></div>
      <div>メールアドレス(確認用)<p>phpリクエストパラメータ挿入</p></div>
      <div>パスワード　　　　　　<p>phpリクエストパラメータ挿入</p></div>
      <div>パスワード(確認用)　　<p>phpリクエストパラメータ挿入</p></div>
    </div>

  </div>
      <input type="submit" value="登録する" class="imput">
    </form>
  </section>

<?php require 'footer.php'; ?>