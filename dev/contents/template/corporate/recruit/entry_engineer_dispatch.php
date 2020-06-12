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
      <div class="Corporate__main Corporate__main--dispatch FlexBox FlexBox--middle">
        <h1 class="Corporate__title">
          <img class="is-pc" src="/src/asset/corporate/title-dispatch.png" alt="キャリア採用・中途採用" />
          <img class="is-sp" src="/src/asset/corporate/title-dispatch-sp.png" alt="キャリア採用・中途採用" />
        </h1>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list LocalNavi__list--dispatch">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../">エンジニア専門職の強み</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../philosophy.php">キャリアコンサルティング</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../profile.php">当社の派遣について</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../profile.php#access">よくある質問</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink is-current">エントリー</a></li>
        </ul>
      </div>

      <div class="Corporate__wrapper">
        <div class="RoundWrapper">
          <h2 class="RoundWrapper__title">
            お申し込み者様の情報をご記入ください。
          </h2>
          <p class="RoundWrapper__text RoundWrapper__text--center">
            下記フォームに必要事項（*）をご記入いただきエントリーを行ってください。<br/>
            添付ファイルサイズの上限は5MB、添付可能なファイル形式は、doc,docx,rft,xls,xlsx,ppt,pptx,pdf,odtです。</br>
            当サイトはグローバルサイン発行のSSL電子証明書を使用しています。
          </p>

          <div class="Form RoundWrapper__contents">
            <form>
              <div class="Form__items FlexBox">
                <div class="Form__item FlexBox FlexBox--middle">
                  <label class="Form__label">お仕事No.</label>
                  <input class="Form__input" type="text" name="" />
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <label class="Form__label">お仕事タイトル</label>
                  <input class="Form__input Form__input--full" type="text" name="" />
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item FlexBox FlexBox--middle">
                  <label class="Form__label">お名前<b>※</b></label>
                  <input class="Form__input" type="text" name="" />
                </div>
                <div class="Form__item FlexBox FlexBox--middle">
                  <label class="Form__label">ふりがな<b>※</b></label>
                  <input class="Form__input" type="text" name="" />
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item Form__item--col FlexBox FlexBox--middle">
                  <label class="Form__label">性別<b>※</b></label>
                  <div class="Form__raidioContainer FlexBox">
                    <div class="Form__radioWrapper FlexBox FlexBox--middle">
                      <input class="Form__radio" type="radio" name="" />
                      <label class="Form__label--radio">男性</label>
                    </div>
                    <div class="Form__radioWrapper FlexBox FlexBox--middle">
                      <input class="Form__radio" type="radio" name="" />
                      <label class="Form__label--radio">女性</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <label class="Form__label">生年月日<b>※</b></label>
                  <input class="Form__input Form__input--birth" type="text" placeholder="記入例：1980年10月10日" name="" />
                  <div class="FlexBox FlexBox--middle">
                    <input class="Form__input Form__input--age" type="number" name="" />
                    <span>歳</span>
                  </div>
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <label class="Form__label">お住まいの<br/>最寄り駅<b>※</b></label>
                  <input class="Form__input Form__input--full" type="number" name="" />
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <label class="Form__label">電話番号<b>※</b></label>
                  <div class="Form__telWrapper">
                    <input class="Form__input Form__input--tel" type="number" name="" />
                    <span class="separator">ー</span>
                    <input class="Form__input Form__input--tel" type="number" name="" />
                    <span class="separator">ー</span>
                    <input class="Form__input Form__input--tel" type="number" name="" />
                  </div>
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item FlexBox FlexBox--middle">
                  <label class="Form__label">メールアドレス<b>※</b></label>
                  <input class="Form__input Form__input--mail" type="email" name="" />
                </div>
              </div>
              <div class="Form__items Form__items--check FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <p class="Form__label Form__label--check">希望連絡時間帯<b>※</b></p>
                  <div class="Form__checkWrapper--2col FlexBox">
                    <div class="Form__checkWrapper--1col FlexBox FlexBox--middle">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">いつでも可</label>
                    </div>
                    <div class="Form__checkWrapper--1col FlexBox FlexBox--middle">
                      <input class="Form__input Form__input--mid" placeholder="希望時間帯や連絡先があれば記入" type="text" name="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="Form__items FlexBox">
                <div class="Form__item Form__item--col FlexBox FlexBox--middle">
                  <label class="Form__label">現在の状況<b>※</b></label>
                  <div class="Form__raidioContainer FlexBox">
                    <div class="Form__radioWrapper FlexBox FlexBox--middle">
                      <input class="Form__radio" type="radio" name="" />
                      <label class="Form__label--radio">就業中</label>
                    </div>
                    <div class="Form__radioWrapper FlexBox FlexBox--middle">
                      <input class="Form__radio" type="radio" name="" />
                      <label class="Form__label--radio">離職中</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Form__items Form__items--check FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <p class="Form__label Form__label--check">就業開始可能日<b>※</b></p>
                  <div class="Form__checkWrapper--2col FlexBox">
                    <div class="Form__checkWrapper--1col FlexBox FlexBox--middle">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">即日</label>
                    </div>
                    <div class="Form__checkWrapper--1col FlexBox FlexBox--middle">
                      <input class="Form__input Form__input--mid" placeholder="希望時間帯や連絡先があれば記入" type="text" name="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="Form__items Form__items--check FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <p class="Form__label">写真つき履歴書<b>※</b></p>
                  <div class="FlexBox">
                    <div class="Form__checkWrapper--1col FlexBox FlexBox--middle">
                      <input class="Form__file" type="file" name="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="Form__items Form__items--check FlexBox">
                <div class="Form__item Form__item--full FlexBox FlexBox--middle">
                  <p class="Form__label">職務経歴書<b>※</b></p>
                  <div class="FlexBox">
                    <div class="Form__checkWrapper--1col FlexBox FlexBox--middle">
                      <input class="Form__file" type="file" name="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="Form__items Form__items--check FlexBox">
                <div class="Form__checkContainer FlexBox">
                  <p class="Form__label Form__label--check">弊社を知った<br/>きっかけ</p>
                  <div class="FlexBox FlexBox--wrap">
                    <div class="Form__checkWrapper">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">Web検索により</label>
                    </div>
                    <div class="Form__checkWrapper">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">営業担当からのご案内</label>
                    </div>
                    <div class="Form__checkWrapper">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">イベント・セミナーに参加して</label>
                    </div>
                    <div class="Form__checkWrapper">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">貴社関連企業・部署からのご紹介</label>
                    </div>
                    <div class="Form__checkWrapper">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">外部からのご紹介</label>
                    </div>
                    <div class="Form__checkWrapper">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">お取り引きあり</label>
                    </div>
                    <div class="Form__checkWrapper">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">広告を見て</label>
                    </div>
                    <div class="Form__checkWrapper Form__checkWrapper--other">
                      <input class="Form__check" type="checkbox" name="" />
                      <label class="Form__checkText">その他</label>
                      <input class="Form__input Form__input--other" type="text" name="" />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="Form__submit Contact__text">
            <p class="Form__submitLead"><a href="../../privacy.php">個人情報の取り扱い</a>の内容をご確認いただき、「同意する」に✔︎して送信してください。</p>
            <div>
              <input class="Form__check" type="checkbox" name="agree" />
              <label class="Form__submitText">個人情報の取り扱いに同意する。</label>
            </div>
            <a class="Form__submitButton" href="#">入力内容を確認する</a>
          </div>

          <div class="Contact__info Contact__text Entry__infoWrapper">
            <p class="Contact__title">お電話でのお問い合わせはこちら（フリーコール）</p>
            <p class="Contact__image"><img src="/src/asset/img-tel.png" /></p>
            <p class="Contact__xsmall">受付時間　9:30〜18:00（土・日・祝及び弊社休業日を除く）</p>
          </div>
        </div>

        <div class="Corporate__bnrWrapper FlexBox FlexBox--center">
            <a href="../../engineer_dispatch/consulting.php"><img src="/src/asset/engineer_dispatch/bnr-counseller.png" alt="キャリアコンサルティング" /></a>
            <a href="../../engineer_dispatch/faq.php"><img src="/src/asset/engineer_dispatch/bnr-faq.png" alt="よくある質問" /></a>
            <a href="../../corporate/recruit/entry_engineer_dispatch.php"><img src="/src/asset/engineer_dispatch/bnr-entry.png" alt="エンジニア派遣エントリー" /></a>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <a class="BreadCrumb__item" href="../../engineer_dispatch/">エンジニア専門派遣の強み</a>
        <p class="BreadCrumb__item">派遣登録エントリー</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
