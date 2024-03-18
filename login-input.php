<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
     <li><a href="index.php">TOP</a>>ログイン</li>
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

<section class="login-contents">
    <div class="margin-container">
        <form action="login-output.php" class="login-form" method="post">
            <label for="mailadress">メールアドレス</label>
            <input type="email" name="mail"><br>
            <label for="password">パスワード</label>
            <input type="password" name="password"><br>
            <input type="submit" class="login-btn" value="ログインする">  
        </form>
    </div>
        <a href="customer-input.php" class="member-text">会員登録はこちら</a>
</section>

<?php require 'footer.php'; ?>