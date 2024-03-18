<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<?php 
if(isset($_REQUEST['user'])){
    echo'<p class="user-name">welcome!! <span class="login-name">',htmlspecialchars($_REQUEST['user']),'</span>様</p>';
}else{
    echo'<p class="user-name">welcome!! <span class="login-name">','ゲスト','</span>様</p>';
}
?>
    <div class="pc-heroimg sp-heroimg"></div>
<!--                          ↑   Top固定領域 パーツ　↑                               -->

        <section class="notice-contants">
            <div class="notice-dounts">
                <img src="images/pc-summercitrus.png" class="summer-citrus-img" alt="サマーシトラスドーナッツの画像">
                <div class="position">
                    <img src="images/pc-new.png" class="new-icon" alt="新商品">
                    <p class="summer-citrus">サマーシトラス</p>
                </div>
                <img src="images/pc-donutlife.png"  class="dounts-life-img" alt="ドーナッツの画像">
                <div class="position">
                    <p class="dounts-life">ドーナッツのある生活</p>
                </div>
            </div>
            <div class="position">
                <p class="dounts-banner">商品一覧</p>
            </div>
            <img src="images/pc-donuts_banner.png" class="banner-img" alt="ドーナッツのバナー">
        </section>
    
        <section class="introduction-contants">
            <div class="position">
                <img src="images/pc-hero2.png" class="philosophy-img" alt="Philosophy画像">
                <h1 class="hedding-introduction">Philosophy</h1>
                <div class="introduction-text">
                    <p>私たちの信念</p>
                    <p>"Creating Connections"<br>
                        「ドーナツでつながる」</p>
                </div>
            </div>
        </section>

            <section class="ranking-content">
                <div class="header-ranking">
                    <h2>人気ランキング</h2>
                </div>
                <div class="grid-container">
                    <div class="grid-items">
                        <img src="images/pc-rank1.png" class="rank-logo" alt="ランキング1位">
                        <img src="images/pc-CCdonuts.png" class="dounts-img" alt="ランキング1位ドーナッツ画像">
                        <p class="product-name">CCドーナツ 当店オリジナル<br>（5個入り）</p>
                        <p class="product-price">税込  ￥1,500</p>
                        <p class="add-product"><input type="submit" value="カートに入れる"></p>
                    </div>
                    <div class="grid-items">
                        <img src="images/pc-rank2.png" class="rank-logo" alt="ランキング2位">
                        <img src="images/pc-fruitdonutset12.png" class="dounts-img" alt="ランキング２位ドーナッツ画像">
                        <p class="product-name">フルーツドーナツセット<br>（12個入り）</p>
                        <p class="product-price">税込  ￥3,500</p>
                        <p class="add-product"><input type="submit" value="カートに入れる"></p>
                    </div>
                    <div class="grid-items">
                        <img src="images/pc-rank3.png" class="rank-logo" alt="ランキング3位">
                        <img src="images/pc-fruitdonutset14.png" class="dounts-img" alt="ランキング３位ドーナッツ画像">
                        <p class="product-name">フルーツドーナツセット<br>（14個入り）</p>
                        <p class="product-price">税込  ￥4,000</p>
                        <p class="add-product"><input type="submit" value="カートに入れる"></p>
                    </div>
                    <div class="grid-items">
                        <img src="images/pc-rank4.png" class="rank-logo" alt="ランキング4位">
                        <img src="images/pc-chocolatedelight.png" class="dounts-img" alt="ランキング４位ドーナッツ画像">
                        <p class="product-name">チョコレートデライト<br>（5個入り）</p>
                        <p class="product-price">税込  ￥1,600</p>
                        <p class="add-product"><input type="submit" value="カートに入れる"></p>
                    </div>
                    <div class="grid-items">
                        <img src="images/pc-rank5.png" class="rank-logo" alt="ランキング5位">
                        <img src="images/pc-bestselectionbox4.png" class="dounts-img" alt="ランキング５位ドーナッツ画像">
                        <p class="product-name">ベストセレクションボックス<br>（4個入り）</p>
                        <p class="product-price">税込  ￥1,200</p>
                        <p class="add-product"><input type="submit" value="カートに入れる"></p>
                    </div>
                    <div class="grid-items">
                        <img src="images/pc-rank6.png" class="rank-logo" alt="ランキング6位">
                        <img src="images/pc-strawberry crush5.png" class="dounts-img" alt="ランキング６位ドーナッツ画像">
                        <p class="product-name">ストロベリークラッシュ<br>（5個入り）</p>
                        <p class="product-price">税込  ￥1,800</p>
                        <p class="add-product"><input type="submit" value="カートに入れる"></p>
                    </div>
                </div>
            </section>
    </main>
    

<?php require 'footer.php'; ?>