

<?php

session_start();  

//ログイン済みかを確認

//ログイン機能
$message = '';
$msg = '';
if(isset($_POST['login'])){  
if ($_POST['who'] == 'にんげん' && $_POST['password'] == 'ほいほい'){ 

$_SESSION["USER"] = 'にんげん';
header("Location: top.php");
exit;
}
else{

  $message = '<div class="alert alert-info" role="alert">下のひんと、みた？</div>';
  $msg = '<div class="alert alert-danger" role="alert">とらいあげいん</div>';
}
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">




</head>

<body>

<!--
  <section>
    <div class="container">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="card login">
           <div class="card-body">
             <h1>ろぐいん</h1>
             <form action="">
               <div class="form-group">
                 <label for="email">めあど</label>
                 <input type="text" name="email" id="email" class="form-control">
               </div>
               <div class="form-group">
                 <label for="password">ぱすわーど</label>
                 <input type="text" name="password" id="password" class="form-control">
               </div>
               <button class="btn btn-primary w-100">ろぐいん</button>
               <div class="login__reminder"><a href="/reminder">ぱすわーどをお忘れの方</a></div>
             </form>
           </div>
         </div>         
       </div>
     </div>
    </div>
  </section>
-->
  

  
  <section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top">
          <h1 class="section__title">COCKROACH!<br>Go back,<br>Stay Home,<br>Don't come out!<span>＞＞＞</span></h1>
          <!-- 折り畳み展開ポインタ -->
<!--          <div id="open-toggle" onclick="obj=document.getElementById('open-contents').style; obj.display=(obj.display=='none')?'block':'none';">-->
          <div id="open-toggle">  
            <div class="img-btn">
              <a>
                <img src="images/gokiburi_hoihoi_hoi.png" alt="ボタン画像２" />
                <img src="images/gokiburi_hoihoi.png" alt="ボタン画像１" title="くりっく"  />
              </a>
            </div>
          </div>
          <!--// 折り畳み展開ポインタ -->   
        </div>
        <?php echo $msg ?>
      </div>
    </div>
  </div>

   
    <!-- 折り畳まれ部分 -->
    <div id="open-contents">

      <!--折りたたまれる＆展開される部分-->
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card login">
              <div class="card-body">
                <h1>滅せよG</h1>
                <?php echo $message ?>
                <form action="index.php" method="post">
                  <div class="form-group">
                    <label for="who">だあれ？</label>
                    <input type="text" name="who" id="who" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">あいことばは？</label>
                    <input type="text" name="password" id="password" class="form-control">
                  </div>
                  <input class="btn w-100" type="submit" name="login" value="Gをくちくする">
                  <div class="login__reminder"><a href="reminder/index.html">ひんと</a></div>
                </form>
              </div>
            </div>         
          </div>
        </div>
      </div>
    </div>
    <!--// 折り畳まれ部分 -->  

  </section>



  <footer>
    <small>&copy; 2020 GOKIDOKI ♰ HEVEN</small>
  </footer>

<script>
  //ページ遷移時フェードイン
  $('body').hide();
  $(window).on('load', function () {
    $('body').fadeIn(500); // fadeInにかける時間
  });
  
  
//ログインカード表示切り替え
  $('#open-toggle').on('click',function(){
    if ($('#open-contents').css('display') == 'block') {
      // 表示されている場合の処理
      $("#open-contents").fadeOut(200);
    } else {
      // 非表示の場合の処理
      $("#open-contents").fadeIn(200);
    }
  });
  
  
</script>  
  

</body>

</html>