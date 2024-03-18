<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
     <li><a href="index.php">TOP</a>>購入確認>カード情報</li>
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

<div class="caution-container">
    <p>「当サイトは模擬サイトですので、
        実際のクレジットカード情報は登録しないでください」
    </p>
</div>

<h2 class="hedding-login">カード情報登録</h2>

<section class="credit-registration">
    <form action="credit2.php" method="post" class="login-form">
        <label for="name">お名前<span>(必須)</span></label>
        <input type="text" id="name" name="name" placeholder="ドーナッツ太郎">

        <label for="card-number">カード番号<span>(必須)</span></label>
        <input type="text" id="card-number" name="card-number"placeholder="123456789123">

        <label for="card-company">カード会社<span>(必須)</span></label>
        <div class="card-companies">
            <label class="card-company-label">JCA 
                <input type="radio" name="card-company" value="JCC" checked>
            </label>
            <label class="card-company-label">Piza
                <input type="radio" name="card-company" value="Piza">
            </label>
            <label class="card-company-label">Mastergard
                <input type="radio" name="card-company" value="Mastergard">
            </label>
        </div>

        <label for="expiry-month">有効期限<span>(必須)</span></label>
        <div class="card-years">
            <input type="text" class="expiry-month" name="expiry-month" placeholder="4" required><p>月</p>
        </div>
        <div class="card-years">
            <input type="text" class="expiry-year" name="expiry-year" placeholder="25" required><p>年</p>
        </div>

        <label for="security-code">セキュリティコード<span>(必須)</span></label>
        <input type="text" id="security-code" name="security-code" placeholder="123456789123"><br>

        <input type="submit" value="入力確認する" class="submit">
    </form>
</section>

<div class="caution-container">
    <p>「当サイトは模擬サイトですので、<br>
        実際のクレジットカード情報は登録しないでください」
    </p>
</div>

<?php require 'footer.php'; ?>