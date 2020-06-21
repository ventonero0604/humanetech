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
            確認画面
          </h2>
          <p class="RoundWrapper__text">
            エントリー内容をご確認のうえ、送信ボタンをおしてください。
          </p>
          <div class="RoundWrapper__contents">
            <div class="Confirm__list">
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  お仕事No.
                </div>
                <div class="Confirm__listText">
                  123456789
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  お仕事タイトル
                </div>
                <div class="Confirm__listText">
                  信濃大町サーバまわりのお仕事
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  お名前<b>※</b>
                </div>
                <div class="Confirm__listText">
                  山本 太郎
                </div>
                <div class="Confirm__listTitle Confirm__listTitle--kana">
                  ふりがな<b>※</b>
                </div>
                <div class="Confirm__listText">
                  やまもと　たろう
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  性別<b>※</b>
                </div>
                <div class="Confirm__listText">
                  男性
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  生年月日<b>※</b>
                </div>
                <div class="Confirm__listText">
                  1980年10月10日<span>30歳</span>
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  お住まいの<br>最寄駅<b>※</b>
                </div>
                <div class="Confirm__listText">
                  浜松町
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  電話番号<b>※</b>
                </div>
                <div class="Confirm__listText">
                  090-2345-5678
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  メールアドレス<b>※</b>
                </div>
                <div class="Confirm__listText">
                  hogehoge@hohgehoge.com
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  お仕事No.
                </div>
                <div class="Confirm__listText">
                  123456789
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  希望連絡時間帯
                </div>
                <div class="Confirm__listText">
                  いつでも可<span>10:00～お願いしたいです。</span>
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  現在の状況
                </div>
                <div class="Confirm__listText">
                  就業中
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  就業開始可能日
                </div>
                <div class="Confirm__listText">
                  2020年10月10日
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  写真つき履歴書
                </div>
                <div class="Confirm__listText">
                  履歴書.pdf
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  職務経歴書
                </div>
                <div class="Confirm__listText">
                  職務経歴書.pdf
                </div>
              </div>
              <div class="Confirm__listItem FlexBox">
                <div class="Confirm__listTitle">
                  弊社を知った<br />きっかけ
                </div>
                <div class="Confirm__listText">
                  WEB検索により
                </div>
              </div>
            </div>

            <div class="Form__submit Contact__text">
              <p class="Form__submitText">個人情報の取り扱いに同意する。</p>
              <a class="Form__submitButton" href="#">送信する</a>
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
