<?php
//画像やCSSのパス
$staticPath = '../../../../src/dist/';
// $staticPath = '../build/';
?><!DOCTYPE html>
<html lang="ja">
<head>
  <title>HumaneTech</title>
  <?php include ('../../component/meta.html'); ?>
  <link rel="stylesheet" href="<?php echo $staticPath; ?>css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo $staticPath; ?>js/main.js"></script>
</head>
<body>
<div id="wrapper" class="Page_wrapper">
  <?php include ('../../component/header.html'); ?>

  <main>
    <section class="Corporate">
      <div class="Corporate__main Corporate__main--recruit FlexBox FlexBox--middle">
        <h1 class="Corporate__title"><img src="/src/asset/corporate/title-require.png" alt="教育制度・福利厚生" /></h1>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../">企業情報</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../philosophy.php">企業理念</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../profile.php">会社概要</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../profile.php#access">アクセス</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">採用情報</p></li>
        </ul>
      </div>

      <div class="Corporate__container Corporate__container--text">
        <div class="FlexBox FlexBox--column FlexBox--middle FlexBox--center">
          <div class="Welfare__leadWrapper">
            <p class="Welfare__leadText">
              ニューマネテックの採用情報を紹介しています。<br/>
              自分の将来を真剣に考え、成長に向かって自分自身を変えようとこの瞬間に思ったのであれば、きっとあなたはヒューマネテックに縁があるはずです。
            </p>
          </div>
          <img class="Welfare__leadBottomText" src="/src/asset/corporate/text-require.png" alt="REQUIREMENTS" />
        </div>
      </div>

      <div class="Corporate__wrapper">
        <div class="FlexBox FlexBox--middle FlexBox--column">
          <a href="./entry_career.php">
            <img class="is-pc" src="/src/asset/corporate/bnr-large-career.png" alt="キャリア採用・中途採用" />
            <img class="is-sp" src="/src/asset/corporate/bnr-large-career-sp.png" alt="キャリア採用・中途採用" />
          </a>
          <a href="./future_engineer.php" style="margin-top: 40px;">
            <img class="is-pc" src="/src/asset/corporate/bnr-large-future.png" alt="未来のエンジニア採用" />
            <img class="is-sp" src="/src/asset/corporate/bnr-large-future-sp.png" alt="未来のエンジニア採用" />
          </a>
          <a href="./entry_engineer_dispatch.php" style="margin-top: 40px;">
            <img class="is-pc" src="/src/asset/corporate/bnr-large-dispatch.png" alt="エンジニア派遣登録" />
            <img class="is-sp" src="/src/asset/corporate/bnr-large-dispatch-sp.png" alt="エンジニア派遣登録" />
          </a>
        </div>
      </div>
      
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="#">HOME</a>
        <a class="BreadCrumb__item" href="#">企業情報</a>
        <p class="BreadCrumb__item">採用情報</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
