<?php
//画像やCSSのパス
$staticPath = '/src/dist/';
// $staticPath = '../build/';
?><!DOCTYPE html>
<html lang="ja">
<head>
  <title>HumaneTech</title>
  <?php include ('../component/meta.html'); ?>
  <link rel="stylesheet" href="<?php echo $staticPath; ?>css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo $staticPath; ?>js/main.js"></script>
</head>
<body>
<div id="wrapper" class="Page_wrapper">
  <?php include ('../component/header.html'); ?>

  <main>
    <section class="Corporate">
      <div class="Corporate__main Corporate__main--corporate FlexBox FlexBox--middle">
        <h1 class="Corporate__title"><img src="/src/asset/corporate/title-corporate.png" alt="企業情報" /></h1>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">企業情報</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./philosophy.php">企業理念</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./profile.php">会社概要</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./profile.php#access">アクセス</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/">採用情報</a></li>
        </ul>
      </div>
      <div class="Corporate__container Corporate__container--top">
        <div class="Corporate__links FlexBox FlexBox--center">
          <a class="Corporate__link" href="./philosophy.php#message">
            <img class="is-pc" src="/src/asset/corporate/img-message.png" alt="MESSAGE" />
            <img class="is-sp" src="/src/asset/corporate/img-message-sp.png" alt="MESSAGE" />
            <p class="Corporate__linkText">代表メッセージ</p>
          </a>
          <a class="Corporate__link" href="./philosophy.php">
            <img class="is-pc" src="/src/asset/corporate/img-philosophy.png" alt="PHILOSOPHY" />
            <img class="is-sp" src="/src/asset/corporate/img-philosophy-sp.png" alt="PHILOSOPHY" />
            <p class="Corporate__linkText">企業理念</p>
          </a>
          <a class="Corporate__link" href="./profile.php">
            <img class="is-pc" src="/src/asset/corporate/img-profile.png" alt="COMPANY PROFILE" />
            <img class="is-sp" src="/src/asset/corporate/img-profile-sp.png" alt="COMPANY PROFILE" />
            <p class="Corporate__linkText">会社概要</p>
          </a>
        </div>
        <div class="Corporate__links FlexBox FlexBox--center">
          <a class="Corporate__link Corporate__link--small" href="./profile.php#client">
            <img class="is-pc" src="/src/asset/corporate/img-client.png" alt="CLIANTS" />
            <img class="is-sp" src="/src/asset/corporate/img-client-sp.png" alt="CLIANTS" />
            <p class="Corporate__linkText">主要取引先</p>
          </a>
          <a class="Corporate__link Corporate__link--small" href="./profile.php#access">
            <img class="is-pc" src="/src/asset/corporate/img-access.png" alt="ACCESS" />
            <img class="is-sp" src="/src/asset/corporate/img-access-sp.png" alt="ACCESS" />
            <p class="Corporate__linkText">アクセス</p>
          </a>
          <a class="Corporate__link Corporate__link--small" href="./welfare.php">
            <img class="is-pc" src="/src/asset/corporate/img-welfare.png" alt="EDUCATION・WELFARE" />
            <img class="is-sp" src="/src/asset/corporate/img-welfare-sp.png" alt="EDUCATION・WELFARE" />
            <p class="Corporate__linkText">教育制度・福利厚生</p>
          </a>
          <a class="Corporate__link Corporate__link--small" href="../corporate/recruit/">
            <img class="is-pc" src="/src/asset/corporate/img-recruit.png" alt="RECRUIT" />
            <img class="is-sp" src="/src/asset/corporate/img-recruit-sp.png" alt="RECRUIT" />
            <p class="Corporate__linkText">採用情報</p>
          </a>
        </div>
      </div>

      <div class="Corporate__wrapper">
        <div class="Corporate__links FlexBox FlexBox--center">
          <div class="Corporate__link">
            <a href="../solution/index.php">
              <img class="is-pc" src="/src/asset/corporate/img-service.png" alt="SERVICE" />
              <img class="is-sp" src="/src/asset/corporate/img-service-sp.png" alt="SERVICE" />
            </a>
            <div class="Corporate__textWrapper">
              <a class="Corporate__textLink" href="../solution/index.php">人材ソリューション</a>
              <a class="Corporate__textLink" href="../solution/base.php">基盤ソリューション</a>
              <a class="Corporate__textLink" href="../solution/system.php">システムソリューション</a>
            </div>
          </div>
          <div class="Corporate__link">
            <a href="../engineer_dispatch/">
              <img class="is-pc" src="/src/asset/corporate/img-pride.png" alt="ENGINEER PRIDE" />
              <img class="is-sp" src="/src/asset/corporate/img-pride-sp.png" alt="ENGINEER PRIDE" />
            </a>
            <div class="Corporate__textWrapper">
              <a class="Corporate__textLink" href="../engineer_dispatch/">エンジニア専門派遣の極み</a>
              <a class="Corporate__textLink" href="../engineer_dispatch/consulting.php">キャリアコンサルタント</a>
              <a class="Corporate__textLink" href="../engineer_dispatch/about_dispatch.php">当社の派遣について</a>
              <a class="Corporate__textLink" href="../engineer_dispatch/faq.php">よくある質問</a>
              <a class="Corporate__textLink" href="../corporate/recruit/entry_engineer_dispatch.php">登録派遣エントリー</a>
            </div>
          </div>
          <div class="Corporate__link">
            <a href="../future_engineer/">
              <img class="is-pc" src="/src/asset/corporate/img-future.png" alt="FUTURE ENGINEER" />
              <img class="is-sp" src="/src/asset/corporate/img-future-sp.png" alt="FUTURE ENGINEER" />
            </a>
            <div class="Corporate__textWrapper">
              <a class="Corporate__textLink" href="../future_engineer/">未来のエンジニア採用</a>
              <a class="Corporate__textLink" href="../future_engineer/staff.php">社員紹介</a>
              <a class="Corporate__textLink" href="../corporate/recruit/">募集要項</a>
              <a class="Corporate__textLink" href="../corporate/recruit/future_engineer.php">エントリー</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <p class="BreadCrumb__item">企業情報</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
