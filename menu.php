<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
        <li><a href="index.php">TOP</a>>商品一覧</li>
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

    <div class="pc-heroimg sp-heroimg"></div>

    <section class="ranking-content">
        <h2>商品一覧</h2>
    </section>

    <section class="product-menu">
        <h3 class="hedding-text">メインメニュー</h3>
        <!-- ↓PHPで書き変える↓ -->
        <div class="grid-container">
            <div class="grid-items">
                <img src="images/pc-CCdonuts.png" class="dounts-img" alt="CCドーナツの画像">
                <div class="text-span">
                    <p class="product-name">CCドーナツ 当店オリジナル<br>（5個入り）</p>
                    <p class="product-price">税込  ￥1,500</p>
                </div>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-chocolatedelight.png" class="dounts-img" alt="チョコレートデライトの画像">
                <div class="text-span">
                    <p class="product-name">チョコレートデライト<br>（5個入り）</p>
                    <p class="product-price">税込  ￥1,600</p>
                </div>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-caramelcream.png" class="dounts-img" alt="キャラメルクリームの画像">
                <div class="text-span">
                    <p class="product-name">キャラメルクリーム<br>（5個入り）</p>
                    <p class="product-price">税込  ￥1,600</p>
                </div>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-plainclassic.png" class="dounts-img" alt="プレーンクラシックの画像">
                <div class="text-span">
                    <p class="product-name">プレーンクラシック<br>（5個入り）</p>
                    <p class="product-price">税込  ￥1,500</p>
                </div>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-summercitrus.png" class="product-summercitrus dounts-img" alt="サマーシトラスの画像">
                <div class="text-span">
                    <p class="product-name"><span class="new-text">【new】</span>サマーシトラス<br>（5個入り）</p>
                    <p class="product-price">税込  ￥1,600</p>
                </div>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-strawberry crush5.png" class="dounts-img" alt="ストロベリークラッシュの画像">
                <div class="text-span">
                    <p class="product-name">ストロベリークラッシュ<br>（5個入り）</p>
                    <p class="product-price">税込  ￥1,800</p>
                </div>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>

        </div>

    </section>

    <section class="product-variety">
        <h3 class="hedding-text">バラエティセット</h3>
        <div class="grid-container">
            <div class="grid-items">
                <img src="images/pc-fruitdonutset12.png" class="dounts-img" alt="フルーツドーナツセット12個の画像">
                <p class="product-name">フルーツドーナツセット<br>（12個入り）</p>
                <p class="product-price">税込  ￥3,500</p>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-fruitdonutset14.png" class="dounts-img" alt="フルーツドーナツセット14個の画像">
                <p class="product-name">フルーツドーナツセット<br>（14個入り）</p>
                <p class="product-price">税込  ￥4,000</p>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-bestselectionbox4.png" class="dounts-img" alt="ベストセレクションボックス4個の画像">
                <p class="product-name">ベストセレクションボックス<br>（4個入り）</p>
                <p class="product-price">税込  ￥1,200</p>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-chocolatecrushbox7.png" class="dounts-img" alt="クラッシュボックス7個の画像">
                <p class="product-name">クラッシュボックス<br>（7個入り）</p>
                <p class="product-price">税込  ￥2,400</p>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-creambox4.png" class="dounts-img" alt="クリームボックス4個の画像">
                <p class="product-name">クリームボックス<br>（4個入り）</p>
                <p class="product-price">税込  ￥1,400</p>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>
            <div class="grid-items">
                <img src="images/pc-creambox9.png" class="dounts-img" alt="クリームボックス（9個入り）の画像">
                <p class="product-name">クリームボックス<br>（9個入り）</p>
                <p class="product-price">税込  ￥2,800</p>
                <p class="add-product"><input type="submit" value="カートに入れる"></p>
            </div>

        </div>

    </section>



</main>

<?php require 'footer.php'; ?>