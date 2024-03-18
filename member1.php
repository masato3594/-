<?php session_start(); ?>
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

<h2 class="hedding-login">会員登録</h2>
<section class="member-registration-content">

<?php  
$name=$address=$login=$password='';
if(isset($_SESSION['customer'])){
    $name=$_SESSION['customer']['name'];
    $address=$_SESSION['customer']['address'];
    $login=$_SESSION['customer']['login'];
    $password=$_SESSION['customer']['password'];
    $post_code1=$_SESSION['customer']['post_code1'];
    $post_code2=$_SESSION['customer']['post_code2'];
    $mail=$_SRSSION['customer']['mail'];
    $mail_confirm = $_SESSION['customer']['mail_confirm'];
}
echo '<form action="member2.php" class="login-form" method="post">';
echo '<label for="name">お名前<span>(必須)</span></label>';
echo '<input type="text" name="name" value="',$name,'"><br>';
echo '<label for="furigana">お名前(フリガナ)<span>(必須)</span></label>';
echo '<input type="text" name="furigana" value="',$login,'">';
echo '<label for="post-code">郵便番号<span>(必須)</span></label>';
echo '<div class="post-input">';
echo '<input type="text" name="post-code1" class="post-code1" value="',$post_code1,'"><p class="post-haifun">-</p><input type="text" name="post-code2" class="post-code2" value="',$post_code2,'">';
echo '</div>';
echo '<label for="address">住所<span>(必須)</span></label>';
echo '<input type="text" name="address" value="',$address,'"><br>';      
echo '<label for="mail">メールアドレス<span>(必須)</span></label>';
echo '<input type="email" name="mail" value="',$mail,'"><br>';
echo '<label for="mail_confirm">メールアドレス確認用<span>(必須)</span></label>';
echo '<input type="email" name="mail_confirm" value="',$mail_confirm,'"><br>';
echo '<label for="password">パスワード<span>(必須)</span></label>';
echo '<p class="cautionary-text"><small>半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</small></p>';
echo '<input type="password" name="password"><br>';
echo '<label for="password_confirm">パスワード確認用<span>(必須)</span></label>';
echo '<input type="password" name="password_confirm"><br>'; 
echo '<input type="submit" value="入力確認する" class="submit">';  
echo '</form>';
echo '</section>'
?>
<?php require 'footer.php'; ?>