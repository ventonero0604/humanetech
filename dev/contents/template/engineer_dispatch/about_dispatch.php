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
    <section class="Dispatch">
      <div class="Dispatch__main Dispatch__main--about">
        <h1 class="Dispatch__mainTitle Dispatch__mainTitle--about FlexBox FlexBox--middle">
          <img class="is-pc" src="/src/asset/engineer_dispatch/title-about.png" alt="当社の派遣について" />
          <img class="is-sp" src="/src/asset/engineer_dispatch/title-about-sp.png" alt="当社の派遣について" />
        </h1>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list LocalNavi__list--dispatch">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">エンジニア専門派遣の強み</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./consulting.php">キャリアコンサルティング</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">当社の派遣について</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./faq.php">よくある質問</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a></li>
        </ul>
      </div>
  
      <div class="Dispatch__contents">
        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            エントリーから就業までの流れ
          </div>
          <div class="Dispatch__leadFlowWrapper">
            <img class="Dispatch__leadFlow" src="/src/asset/engineer_dispatch/img-flow.png" />
          </div>
          <p class="Dispatch__leadFlowSmall">
            ※横へスクロールしてください。
          </p>
          <div class="Dispatch__flowItemText Dispatch__flowItemText--adjust FlexBox FlexBox--middle RoundWrapper__contents">
            <p>
              お仕事を探す方法は２つ。自分にあったアプローチでエントリーできます。気になる仕事がみつかったら各詳細ページの「エントリー」から、またお仕事探しに迷ったりキャリア相談や非公開案件をご紹介希望の方は「登録エントリー」からエントリーしてください。一人ひとり、時間をかけてキャリア相談を行っています。経歴書の書き方から面接のテクニックまで、基本的な事項から、将来どのようなキャリアパスを目指すか？マイルストンの設定まで、フォローをさせて頂きます。
            </p>
            <img src="/src/asset/engineer_dispatch/img-main-badge.png" alt="来社不要" />
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            マージン率・職種給与について
          </div>
          <div class="RoundWrapper__contents">
            <p class="About__text">
              令和1年度（平成30年12月から令和1年11月末まで）の結果
            </p>
            <div class="About__table">
              <div class="About__tableColumn">
                <div class="FlexBox FlexBox--middle">
                  <div class="About__tableTitle">
                    マージン率<i>※</i>
                  </div>
                  <div class="About__tableText">
                    <b>43.16</b>%
                  </div>
                </div>
              </div>
              <div class="About__tableColumn">
                <div class="FlexBox FlexBox--middle">
                  <div class="About__tableTitle">
                    派遣労働者数
                  </div>
                  <div class="About__tableText">
                    <b>60</b>名
                  </div>
                </div>
              </div>
              <div class="About__tableColumn">
                <div class="FlexBox FlexBox--middle">
                  <div class="About__tableTitle">
                    派遣先数
                  </div>
                  <div class="About__tableText">
                    <b>21</b>社
                  </div>
                </div>
              </div>
              <div class="About__tableColumn">
                <div class="FlexBox FlexBox--middle">
                  <div class="About__tableTitle">
                    労働者派遣に関する料金額の平均日額<br />
                    （8時間換算）
                  </div>
                  <div class="About__tableText">
                    <b>40,571</b>円
                  </div>
                </div>
              </div>
              <div class="About__tableColumn">
                <div class="FlexBox FlexBox--middle">
                  <div class="About__tableTitle">
                    派遣労働者の賃金の平均日額<br />
                    （8時間換算）
                  </div>
                  <div class="About__tableText">
                    <b>23,060</b>円
                  </div>
                </div>
              </div>
            </div>
            <p class="About__text About__text--red">
              ※通勤費、会社負担保険料はマージン率に含みます。
            </p>

            <p class="About__text is-sp">
              他　通勤費＝2.39％　（弊社負担）<br/>
              　　保険料負担＝8.82％　（弊社負担）<br/>
              　　（内訳　弊社募集費用、教育費用、<br/>
              　　福利厚生費用等を含む事業運営費）
            </p>

            <p class="About__text is-sp">
              ※マージン率は厚生労働省指定の計算式です。<br/>
              通勤費、会社負担保険はマージン率に含みます。
            </p>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            派遣（労働者派遣事業）とは
          </div>
          <div class="RoundWrapper__contents">
            <div class="About__itemWrapper FlexBox FlexBox--middle">
              <div class="About__infoText">
                <p class="About__infoTextBlock">派遣会社（ヒューマネテック株式会社）が、自社の社員（契約社員・正社員）を派遣先企業で、その企業の社員から直接「指揮命令」を受けて、その企業のために仕事をする業態です。請負とは、注文主と労働者の間に「指揮命令」の関係が生じない場合を言います。</p>
                <p>・派遣元（ヒューマネテック株式会社）と派遣労働者との関には雇用関係があります。</p>
                <p>・派遣元と派遣先は「労働者派遣契約」を締結し、この契約に基づき、派遣元が派遣先に労働者を派遣する事が出来ます。</p>
                <p>・派遣先は派遣元から委託された指揮命令の権限に基づき、派遣労働者を指揮命令することが出来ます。但し派遣先は派遣労働者を雇用しません。</p>
              </div>
              <div><img src="/src/asset/engineer_dispatch/img-scheme.png" width="441" /></div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            弊社の派遣事業領域
          </div>
          <div class="RoundWrapper__contents">
            <p>
              弊社（ヒューマネテック株式会社）は、
            </p>
            <div class="About__fieldText">
              <p>・派遣免許を取得しており、派遣法に定められた禁止業務以外に対して派遣を行う事が可能です。</p>
              <p>・職業紹介免許を取得しており、派遣法に定められた紹介予定派遣を行う事が可能です。</p>
              <p>・職業紹介免許により、人材紹介事業を行う事が可能です。</p>
            </div>
            <p>
              以上、弊社は派遣法、職業安定法に従いまして2005年の創業以来、派遣事業、職業紹介事業を適切に運営してきています。
            </p>
          </div>
        </div>

        <div class="Dispatch__bnrWrapper FlexBox FlexBox--center">
          <a href="./consulting.php"><img src="/src/asset/engineer_dispatch/bnr-counseller.png" alt="キャリアコンサルティング" /></a>
          <a href="./faq.php"><img src="/src/asset/engineer_dispatch/bnr-faq.png" alt="よくある質問" /></a>
          <a href="../corporate/recruit/entry_engineer_dispatch.php"><img src="/src/asset/engineer_dispatch/bnr-entry.png" alt="エンジニア派遣エントリー" /></a>
        </div>

      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <a class="BreadCrumb__item" href="./">エンジニア専門派遣の強み</a>
        <p class="BreadCrumb__item">当社の派遣について</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
