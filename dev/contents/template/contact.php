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
    <section class="Others">
      <div class="Others__main FlexBox FlexBox--center FlexBox--middle">
        <h1><img src="/src/asset/title-contact.png" alt="お問い合わせ" /></h1>
      </div>

      <div class="Others__wrapper">
        <div class="RoundWrapper">
          <div class="RoundWrapper__contents">
            <div class="Contact__info Contact__text">
              <p class="Contact__title">お電話でのお問い合わせはこちら（フリーコール）</p>
              <p class="Contact__image"><img src="/src/asset/img-tel.png" /></p>
              <p class="Contact__xsmall">受付時間　9:30〜18:00（土・日・祝及び弊社休業日を除く）</p>
              <p class="Contact__small">
                下記フォームに必要事項（*）をご記入いただきエントリーを行ってください。<br />
                当サイトはグローバルサイン発行のSSL電子証明書を使用しています。
              </p>
            </div>

            <div class="Form">
              <form>
                <div class="Form__items FlexBox">
                  <div class="Form__item FlexBox FlexBox--middle">
                    <label class="Form__label">お名前<b>※</b></label>
                    <input class="Form__input" type="text" name="name" />
                  </div>
                  <div class="Form__item FlexBox FlexBox--middle">
                    <label class="Form__label">ふりがな<b>※</b></label>
                    <input class="Form__input" type="text" name="kana" />
                  </div>
                </div>
                <div class="Form__items FlexBox">
                  <div class="Form__item FlexBox FlexBox--middle">
                    <label class="Form__label">会社名<b>※</b></label>
                    <input class="Form__input" type="text" name="company" />
                  </div>
                  <div class="Form__item FlexBox FlexBox--middle">
                    <label class="Form__label">部署名<b>※</b></label>
                    <input class="Form__input" type="text" name="dept" />
                  </div>
                </div>
                <div class="Form__items FlexBox">
                  <div class="Form__item FlexBox FlexBox--middle">
                    <label class="Form__label">メールアドレス<b>※</b></label>
                    <input class="Form__input Form__input--mail" type="email" name="email" />
                  </div>
                </div>
                <div class="Form__items FlexBox">
                  <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                    <label class="Form__label">電話番号<b>※</b></label>
                    <div class="Form__telWrapper">
                      <input class="Form__input Form__input--tel" type="number" name="tel1" />
                      <span class="separator">ー</span>
                      <input class="Form__input Form__input--tel" type="number" name="tel2" />
                      <span class="separator">ー</span>
                      <input class="Form__input Form__input--tel" type="number" name="tel3" />
                    </div>
                  </div>
                </div>
                <div class="Form__items Form__items--textarea FlexBox">
                  <div class="FlexBox FlexBox--column">
                    <label class="Form__label">お問い合わせ内容<b>※</b></label>
                    <textarea class="Form__textarea" placeholder="お問い合わせの内容をご記入ください。"></textarea>
                  </div>
                </div>
                <div class="Form__items Form__items--check FlexBox">
                  <div class="Form__checkContainer FlexBox">
                    <p class="Form__label Form__label--check">弊社を知った<br/>きっかけ</p>
                    <div class="FlexBox FlexBox--wrap">
                      <div class="Form__checkWrapper">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">Web検索により</label>
                      </div>
                      <div class="Form__checkWrapper">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">営業担当からのご案内</label>
                      </div>
                      <div class="Form__checkWrapper">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">イベント・セミナーに参加して</label>
                      </div>
                      <div class="Form__checkWrapper">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">貴社関連企業・部署からのご紹介</label>
                      </div>
                      <div class="Form__checkWrapper">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">外部からのご紹介</label>
                      </div>
                      <div class="Form__checkWrapper">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">お取り引きあり</label>
                      </div>
                      <div class="Form__checkWrapper">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">広告を見て</label>
                      </div>
                      <div class="Form__checkWrapper Form__checkWrapper--other">
                        <input class="Form__check" type="checkbox" name="opt1" />
                        <label class="Form__checkText">その他</label>
                        <input class="Form__input Form__input--other" type="text" name="other" />
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="Form__submit Contact__text">
              <p class="Form__submitLead"><a href="/contents/template/privacy.php">個人情報の取り扱い</a>の内容をご確認いただき、「同意する」に✔︎して送信してください。</p>
              <div>
                <input class="Form__check" type="checkbox" name="agree" />
                <label class="Form__submitText">個人情報の取り扱いに同意する。</label>
              </div>
              <a class="Form__submitButton" href="#">入力内容を確認する</a>
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
        <p class="BreadCrumb__item">お問い合わせ</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('component/footer.html'); ?>
  </div>
</div>
</body>
</html>
