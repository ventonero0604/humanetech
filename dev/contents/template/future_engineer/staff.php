<?php
//画像やCSSのパス
$staticPath = '../../../src/dist/';
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
    <section class="Future">
      <div class="Future__main Future__main--staff">
        <h1 class="Future__mainTitle Future__mainTitle--staff"><img src="/src/asset/future/title-main-staff.png" alt="未来のエンジニア採用" /></h1>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">未来のエンジニア採用</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">社員紹介</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/">募集要項</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../engineer_dispatch/faq.php">よくある質問</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/future_engineer.php">採用エントリー</a></li>
        </ul>
      </div>

      <div class="Future__lead">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <h2 class="Future__leadTitle"><img src="/src/asset/future/title-lead-staff.png" alt="未来のエンジニア採用で入社した社員の紹介" /></h2>
          <p class="Future__leadText Future__leadText--center">
            未来のエンジニア採用では、異業種からのキャリアチェンジの成功を支援します。
          </p>
        </div>
      </div>

      <div class="Future__contents">
        <div class="Staff">
          <div class="RoundWrapper">
            <a class="FlexBox" href="staff_01.php">
              <div class="Staff__textWrapper FlexBox FlexBox--column FlexBox--center">
                <p class="Staff__job">ネットワークエンジニア</p>
                <p class="Staff__name">松ケ谷 昌功</p>
                <p class="Staff__join">2012年入社</p>
                <p class="Staff__separator"><img src="/src/asset/future/img-separator.png" /></p>
                <p class="Staff__text">
                  IT業界のこれからを担い、<br/>
                  次の世代のエンジニアにつないでゆきたい
                </p>
              </div>
              <div>
                <img src="/src/asset/future/img-staff1.png" alt="営業職 家電量販店" />
              </div>
            </a>
          </div>
          <div class="RoundWrapper">
            <a class="FlexBox" href="staff_01.php">
              <div class="Staff__textWrapper FlexBox FlexBox--column FlexBox--center">
                <p class="Staff__job">ネットワークエンジニア</p>
                <p class="Staff__name">松ケ谷 昌功</p>
                <p class="Staff__join">2012年入社</p>
                <p class="Staff__separator"><img src="/src/asset/future/img-separator.png" /></p>
                <p class="Staff__text">
                  IT業界のこれからを担い、<br/>
                  次の世代のエンジニアにつないでゆきたい
                </p>
              </div>
              <div>
                <img src="/src/asset/future/img-staff2.png" alt="営業職 家電量販店" />
              </div>
            </a>
          </div>
          <div class="RoundWrapper">
            <a class="FlexBox" href="staff_01.php">
              <div class="Staff__textWrapper FlexBox FlexBox--column FlexBox--center">
                <p class="Staff__job">ネットワークエンジニア</p>
                <p class="Staff__name">松ケ谷 昌功</p>
                <p class="Staff__join">2012年入社</p>
                <p class="Staff__separator"><img src="/src/asset/future/img-separator.png" /></p>
                <p class="Staff__text">
                  IT業界のこれからを担い、<br/>
                  次の世代のエンジニアにつないでゆきたい
                </p>
              </div>
              <div>
                <img src="/src/asset/future/img-staff3.png" alt="営業職 家電量販店" />
              </div>
            </a>
          </div>
        </div>

      </div>
      <div class="Future__bnrWrapper FlexBox FlexBox--center">
        <a href="../corporate/recruit/"><img src="/src/asset/future/bnr-info.png" alt="未来のエンジニア採用 募集要項" /></a>
        <a href="../corporate/recruit/future_engineer.php"><img src="/src/asset/future/bnr-entry.png" alt="未来のエンジニア採用 エントリー" /></a>
      </div>

    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="#">HOME</a>
        <a class="BreadCrumb__item" href="./">エンジニア専門派遣の強み</a>
        <p class="BreadCrumb__item">社員紹介</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
