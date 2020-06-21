<?php
//画像やCSSのパス
$staticPath = '../../src/dist/';
// $staticPath = '../build/';
?><!DOCTYPE html>
<html lang="ja">
<head>
  <title>HumaneTech</title>
  <?php include ('component/meta.html'); ?>
  <link rel="stylesheet" href="<?php echo $staticPath; ?>css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo $staticPath; ?>js/main.js"></script>
</head>
<body>
<div id="wrapper" class="Page_wrapper">
  <?php include ('component/header.html'); ?>

  <main>
    <section class="Confirm">
      <div class="Confirm__main FlexBox FlexBox--center FlexBox--middle">
        <!-- 中途採用エントリー　タイトル ↓ -->
        <h1><img src="/src/asset/title-confirm-career.png" alt="キャリア採用・中途採用 採用エントリー" /></h1>

        <!-- 未来のエンジニア採用エントリー　タイトル ↓ -->
        <!-- <h1><img src="/src/asset/title-confirm-future.png" alt="未来のエンジニア採用 採用エントリー" /></h1> -->

        <!-- エンジニア派遣 エントリー　タイトル ↓ -->
        <!-- <h1><img src="/src/asset/title-confirm-dispatch.png" alt="エンジニア派遣 エントリー" /></h1> -->
      </div>

      <div class="Others__wrapper">
        <div class="RoundWrapper">
          <h2 class="RoundWrapper__title">
            エントリーを受け付けました
          </h2>
          <p class="RoundWrapper__text">
            このたびはご応募いただき、誠にありがとうございます。<br/>
            3営業日以内に、人事担当者よりご連絡いたしますので<br/>
            今しばらくお待ちくださいませ。
          </p>
          <div class="RoundWrapper__contents">
            <a class="Form__submitButton" href="/">トップページに戻る</a>

            <div class="Contact__info Contact__text">
              <p class="Contact__title">お電話でのお問い合わせはこちら<br/>（フリーコール）</p>
              <p class="Contact__image"><img src="/src/asset/img-tel.png" /></p>
              <p class="Contact__xsmall">受付時間　9:30〜18:00<br/>（土・日・祝及び弊社休業日を除く）</p>
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
        <a class="BreadCrumb__item" href="/contents/template/engineer_dispatch/">エンジニア専門派遣の強み</a>
        <p class="BreadCrumb__item">派遣登録エントリー確認画面</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('component/footer.html'); ?>
  </div>
</div>
</body>
</html>
