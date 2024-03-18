<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
        <li><a href="index.php">TOP</a>>商品一覧>CCドーナツ 当店オリジナル（5個入り））<!-- 後でPHPで選択した商品名を差し替える --></li>
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

    <section class="product-contents">
        <img src="images/product-dounts.png" class="dounts-choice" id="doiunts-images" alt="選んだ商品の画像">
        <div class="product-textarea">
            <p class="product-name" id="product_name">CCドーナツ 当店オリジナル（5個入り）</p>
            <p class="product-description" id="Product_description">
                当店のオリジナル商品、CCドーナツは、
                サクサクの食感が特徴のプレーンタイプのドーナツです。
                素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。
                一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。
            </p>
            <p class="product-price">税込  ￥1,500</p>
            <div class="quantity-favorite">
                <!-- spで数量キーボードが起動するようにする -->
                <input type="number" class="quantity" id="quantity" name="quantity" min="1" value="1"><p class="indivual">個</p>
                 <p class="add-product"><input type="submit" value="カートに入れる"></p>
                 <!-- お気に入りアイコンはjsでイベントリスナーで画像を入れ替える予定 -->
                <button class="favorite" id="favorite"><i class="fa-regular fa-heart"></i></button>
            </div>
        
        </div>
    </section>




</main>

<?php require 'footer.php'; ?>