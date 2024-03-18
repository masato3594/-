<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Eric_reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>C.C.Donuts</title>
    <script src="https://kit.fontawesome.com/75e99f6ee4.js" crossorigin="anonymous" defer></script>
    <script src="scripts/script.js" defer></script>
</head>
<!-- 命名規則 class:,id:,変数名:,定数名: -->
<body>
    <!-- <div id="mask"> -->
        <!-- id="mask"開始タグ -->
        <header>
            <div class="header-top">
                    <img src="images/pc-dorwer.png" class="drawer-btn" id="drawer_open" alt="ドロワーメニューのボタン">
                <div class="container">
                    <img src="images/pc-header.png" class="main-logo" alt="メインロゴ画像" >
                </div>
                <!-- ログイン時と未ログイン時の表示を変える機能実装予定 -->
                    <img src="images/pc-login.png" class="login-brn" id="login_btn" alt="ログインボタン">
                    <!-- <i class="fa-solid fa-arrow-right-from-bracket"></i> -->
                    <img src="images/pc-cart.png" class="cart-btn" id="cart_btn" alt="カート機能">
            </div>

            <div class="header-bottom">
                <div class="container">
                    <img src="images/pc-seach.png" class="search-icon" alt="検索アイコン画像">
                    <input type="text" name="seach" class="search-window">
                </div>
            </div>
            
        </header>

        <!-- 　　　　　　　　ドロワー機能　　　　　　　　　　　 -->
        <nav class="nav-menu" id="nav">
            <div class="drawer-images">
                <img src="images/pc-header.png" class="drawer-rogo" alt="CCdountsのロゴ画像">
                <img src="images/pc-close.png" class="drawer-buttom" id="drawer_close" alt="ドロワー閉じるボタン">
            </div>
            <div class="nav-container">
                <ul>
                    <li><a href="index.php">TOP</a></li>
                    <li><a href="menu.php">商品一覧</a></li>
                    <li><a href="">よくある質問</a></li>
                    <li><a href="">問い合わせ</a></li>
                    <li><a href="">当サイトのポリシー</a></li>
                </ul>

            </div>

        </nav>

        <main>