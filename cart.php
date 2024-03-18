<?php require 'header.php'; ?>

<!--                          ↓ Top固定領域 パーツ　↓                               -->
<main>
<nav>
    <ul class="product-breadcrumb">
      <li><a href="index.php">TOP</a>>カート</li>
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

    <section class="cart-product">
        <div class="container-contents">
            <div class="cart-top">
                <p>現在　商品　<span class="total-order">2</span>　点</p>
                <p>ご注文小計：税込み　<span class="total-price">￥5,000</span>　円</p>
                <!-- PHPで機能を実装？ -->
                <a href="buy1.html" class="purchase-confirmation">購入確認へ進む</a>
            </div>

<!--                         ↓PHPでカートに入った商品を足していく↓　いったん仮のデータを置く         -->
            <div class="selected-product">
                <img src="images/pc-CCdonuts.png" class="selected-donuts" alt="選択したドーナッツの画像">
                <div class="selected-introduction">
                    <p class="product-name" id="product_name">CCドーナツ 当店オリジナル（5個入り）</p>
                    <div  class="product-adjustment">
                        <p class="product-price">税込  ￥1,500</p>
                        <div class="calculate-again">
                             <!-- spで数量キーボードが起動するようにする -->
                            <p>数量<input type="number" class="quantity" id="quantity" name="quantity" min="1" value="1"><span class="indivual">個</span></p>
                            <!-- 実装方法を後で再確認,一旦カートに入れるボタンと同じに -->
                            <p><a href="" method="post" class="calculate-again-btn" id="add_product">再計算</a></p>
                            <!-- 削除ボタン、選択された商品をリストから消す -->
                            <a href="" class="delete-items"><i class="fa-solid fa-trash"></i>カートから削除する</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="selected-product">
                <img src="images/pc-fruitdonutset12.png" class="selected-donuts" alt="選択したドーナッツの画像">
                <div class="selected-introduction">
                    <p class="product-name" id="product_name">フルーツドーナツセット（12個入り）</p>
                    <div  class="product-adjustment">
                        <p class="product-price">税込  ￥3,500</p>
                        <div class="calculate-again">
                             <!-- spで数量キーボードが起動するようにする -->
                            <p>数量<input type="number" class="quantity" id="quantity" name="quantity" min="1" value="1"><span class="indivual">個</span></p>
                            <!-- 実装方法を後で再確認,一旦カートに入れるボタンと同じに -->
                            <p><a href="" method="post" class="calculate-again-btn" id="add_product">再計算</a></p>
                            <!-- 削除ボタン、選択された商品をリストから消す -->
                            <a href="" class="delete-items"><i class="fa-solid fa-trash"></i>カートから削除する</a>
                        </div>
                    </div>
                </div>
            </div>
<!--                         ↑PHPでカートに入った商品を足していく↑　いったん仮のデータを置く         -->

            <div class="cart-top">
                <p>現在　商品　<span class="total-order">2</span>　点</p>
                <p>ご注文小計：税込み　<span class="total-price">￥5,000</span>　円</p>
                <!-- PHPで機能を実装？ -->
                <a href="buy1.html" class="purchase-confirmation">購入確認へ進む</a>
            </div>
        </div>

    </section>
</main>

<?php require 'footer.php'; ?>