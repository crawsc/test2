<?php

session_start();

//ログイン済みかを確認
if (!isset($_SESSION['USER'])) {
  header('Location: index.php');
  exit;
}

//ログアウト機能
if(isset($_POST['logout'])){
  $_SESSION = [];
  session_destroy();

  header('Location: index.php');
  exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
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
  </head>

  <body>
   <section>
    <div class="container">
      <div class="row" id="top-header">
        <div class="col-md-12">
          <div class="user-name-box">
            <p>ようこそ、<?php echo $_SESSION['USER'] ?>さん</p>
            <form method="post" action="index.php">
              <input class="btn" type="submit" name="logout" value="ごきぶりばいばい">
            </form>
          </div>
          <div class="top-header">
            <h1>ゴキブリとディスタンスをとる方法</h1>
            <ul class="link-list">
              <li><a href="#hate">ゴキブリの嫌いなもので対策</a></li>
              <li><a href="#clean-up">とにかく掃除！</a></li>
              <li><a href="#hohoinohoi">ロングセラーのあの商品！</a></li>
            </ul>
          </div>     
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="hate">
           <div class="about-hate">
             <h2><span>ゴキブリの嫌いなもので対策</span>ゴキブリの嫌いなものは？</h2>
              <p>
                汚い話、エサがなければ、ゴキブリは自分の排泄物も食べます。<br>
                自分が脱皮したときの殻も食べ、ときには共食いだってしてしまう恐ろしい生き物。<br>
                人間の髪の毛、フケや爪、ホコリだって立派なエサ。<br>
                そんな何でも食べるゴキブリにも、嫌いなものが…あるんです！！
              </p>
            </div>
            
            <ul>
              <li>
                <div>
                 <img src="images/hate/01.jpg" alt="">
                </div>
                <div>
                  <h3>塩</h3>
                  <p>
                    それは、塩。雑食のゴキブリですが、塩は食べません。なぜなら、塩を摂取すると脱水症状のようになってしまうためです。
                  </p>
                </div>  
              </li>
              
              <li>
                <div>
                  <img src="images/hate/02.jpg" alt="">
                </div>
                <div>
                  <h3>ハーブの香り</h3>
                  <p>
                    ハッカやラベンダーなどハーブの香りに癒される方は多いかと思いますが、ゴキブリは大嫌い。人間にとっては“清涼感”のあるハーブの香りも、ゴキブリにとっては“不快感”でしかないようです。
                  </p>
                </div>  
              </li>
              
              <li>
                <div>
                  <img src="images/hate/03.jpg" alt="">
                </div>
                <div>
                  <h3>広くて明るい場所</h3>
                  <p>
                    狭く暗く、温暖な環境を好むゴキブリたち。逆に言えば、隠れる場所のない広々とした空間は苦手で、明るい場所には滅多に出てきません。寒い場所も苦手ですが、北海道を含め全国的に分布しています…。
                  </p>
                </div>  
              </li>
            </ul>
            <div class="btn-wrapper"><a href="#" class="btn">▲</a></div>
          </div>     
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="clean-up">
            <div class="clean-up">
              <h2>とにかく掃除！掃除！掃除！</h2>
              <p>
                ゴキブリは出ないのが一番！<br>
                日頃のゴキブリ対策が大事です。<br>
                <br>
                ゴキブリは、暗くて暖かくて狭い場所が大好き！<br>
                だから、テレビや電話、パソコンなんかの電気製品の中にいることもあります。<br>
                節電にもなるし、使わない時はなるべく主電源から切りましょう！<br>
              </p>
            </div>

            <ul>
              <li>
                <div>
                  <img src="images/clean-up/01.png" alt="">
                </div>
                <div>
                  <h3>食品や食器を放置しない！</h3>
                  <p>
                    食品や汚れた食器をそのまま夜まで放置しておくと、ゴキブリの格好の餌になります。<br>
                    ゴキブリがウロウロすると、病原菌が付着して食中毒などを起こす場合もあります。
                  </p>
                </div>  
              </li>

              <li>
                <div>
                  <img src="images/clean-up/02.png" alt="">
                </div>
                <div>
                  <h3>不衛生なものはすぐに処分！</h3>
                  <p>
                    不衛生なもの（生ゴミ、排水口の汚れなど）を放置しておくと、ゴキブリが病原体を運んでくる恐れがあります。<br>
                    台所だけでなく、洗面所、トイレなども掃除をしてきれいな環境を保つことが大切です。
                  </p>
                </div>  
              </li>

              <li>
                <div>
                  <img src="images/clean-up/03.png" alt="">
                </div>
                <div>
                  <h3>物陰の掃除をしよう！</h3>
                  <p>
                    冷蔵庫の裏や、コンロの下、ゴキブリが潜んでいそうな場所に、ゴミや調理くずなどがあるとゴキブリの餌になります。
                  </p>
                </div>  
              </li>
            </ul>
            <div class="btn-wrapper"><a href="#" class="btn">▲</a></div>
          </div>     
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div id="hohoinohoi">
            <div class="hohoinohoi">
              <h2><span>ロングセラーのあの商品！</span>ゴキブリほいほい！</h2>
              <p>
                ゴキブリ捕獲器といえば、何といっても「ごきぶりホイホイ」！<br>
                ただかわいいだけじゃない！<br>
                薬剤を使用していないので、薬剤を使用したくない場所でも使用可能。<br>
                こんなに長い間愛されるのは、たくさんの小さな工夫があるからです。<br>
              </p>
            </div>

            <ul>
              <li>
                <div>
                  <img src="images/hoi/01.gif" alt="">
                </div>
                <div>
                  <h3>入り口の角度</h3>
                  <p>
                    ハウスの入り口が斜めなのは、あの角度がなければゴキブリに気付かれてしまうからです。<br>
                    入り口がフラットな場合、触角で粘着面に気付かれますが、斜めだから触角が粘着面に触れずついついそのまま入ってホイホイ捕まるのです。
                  </p>
                </div>  
              </li>

              <li>
                <div>
                  <img src="images/hoi/02.gif" alt="">
                </div>
                <div>
                  <h3>足ふきマット</h3>
                  <p>
                    ゴキブリの足は、油などで大変汚れていることが多く、そのままだと粘着剤の威力が十分発揮できません。<br>
                    そこで、このマットが考え出されました。<br>
                    ゴキブリの足の汚れを取ってから、ハウスへ誘います。<br>
                     必ず、足ふきマットを貼ってお使いください。<br>
                </div>  
              </li>

              <li>
                <div>
                  <img src="images/hoi/03.jpg" alt="">
                </div>
                <div>
                  <h3>デコボコ粘着シート！</h3>
                  <p>
                    ゴキブリの手足や体がめりこむデコボコ粘着シート。<br>
                    もがけばもがくほど身動きできず、捕まえたゴキブリを逃がしません。<br>
                  </p>
                </div>  
              </li>
            </ul>
            <div class="btn-wrapper"><a href="#" class="btn">▲</a></div>
          </div>     
        </div>
      </div>
      
      
    </div>
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
      
      //ページ内リンクスムーススクロール
      $(function () {
        var headerHight = 150; //ヘッダの高さ
        $('a[href^=#]').click(function(){
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
          $("html, body").animate({scrollTop:position}, 500, "swing");
          return false;
        });
      });
      
      
    </script>
  </body>
</html>