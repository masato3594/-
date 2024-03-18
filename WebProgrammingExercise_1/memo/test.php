<?php session_start(); ?>
<?php require "header.php"; ?>

<!-- headerの四つの要素をメインロゴを中央に寄せる場合 -->

<div class="box-container">
    <p class="box1">box1</p>
    <p class="logo-test">box2</p>
    <p class="box2">box3</p>
    <p class="box3">box4</p>
</div>





<!-- 正規表現、パターンマッチング 例）郵便番号$postcode-->
<?php 
$postcode=$_REQUEST['postcode'];
if(preg_match('/^[0-9]{7}$/',$postcode)){
    echo '郵便番号',$postcode,'を確認しました。';
} else {
    echo $postcode,'は適切な郵便番号ではありません。';
}
?>
<!-- 正規表現、パスワード８文字以上 -->
<?php 
$password=$_REQUEST['password'];
if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}$/',$password)){
    echo 'パスワード「',$password,'」を確認しました。';
} else {
    echo 'パスワード「',$password,'」は適切ではありません。';
}
?>
<!-- フリガナ変換(文字列の半角カタカナを全角に変換)、mb_convert_kana関数 -->
<?php 
echo 'フリガナは「',mb_convert_kana($_REQUEST['furigana']),'」です。';
?>
<!-- 入力フォームにに有力された数値を全角から半角へ変換 -->
<?php 
$count=mb_convert_kana($_REQUEST['count'],'n');
if(preg_match('/^[0-9]+$/',$COUNT)){
    echo $count, '個をこうにゅうします。';
} else {
    echo $couunt, 'はすうちではありません。';
}
?>


<!-- ログイン画面php -->
<?php 
unset($_SESSION['customer']);
$pdo=new PDO('mysql:localhost=localhost;dbname=shop;charset=utf8','staff','password');
$sql=$pdo->prepare('select * from customer where login=? and password=?');
foreach ($sql as $row) {
    $_SESSION['customer']=['id'=>$row['id'],'name'=>$row['name'],
    'address'=>$row['address'],'login'=>$row['login'],'password'=>$row['password']];
}
if(isset($_SESSION['customer'])){
    echo 'いらっしゃいませ',$_SESSION['customer']['name'],'さん。';
} else {
    echo 'ログイン名またはパスワードが違います。';
}
?>


<?php require "footer.php"; ?>