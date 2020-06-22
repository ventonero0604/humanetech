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
    <section class="Solution">
      <div class="Solution__main FlexBox FlexBox--center">
        <div class="Solution__mainWrapper FlexBox FlexBox--column FlexBox--center">
          <div><img src="/src/asset/solution/ico-human.png" alt="HUMAN SOLUTION" /></div>
          <h1 class="Solution__mainTitle">
            人材ソリューション
          </h1>
          <h2 class="Solution__titleText">
            ヒューマネテックは正社員または<br/>
            正社員登用を前提とした有期雇用の技術者集団。<br/>
            技術部門の「人的リソースBPOサービス」<br/>
            としてお手伝いします。
          </h2>
        </div>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list LocalNavi__list--solution">
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">人材ソリューション</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./base.php">基盤ソリューション</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./system.php">システムソリューション</a></li>
        </ul>
      </div>

      <div class="Solution__lead">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <h2 class="Solution__leadTitle">
            <img class="is-pc" src="/src/asset/solution/lead-human.png" alt="Humanetechだからスペシャリストとして活躍できる場所がある。エンジニアとして更なる高みを目指す環境がある。" />
            <img class="is-sp" src="/src/asset/solution/lead-human-sp.png" alt="Humanetechだからスペシャリストとして活躍できる場所がある。エンジニアとして更なる高みを目指す環境がある。" />
          </h2>
          <p class="Solution__leadText">
            ヒューマネテックは正社員または正社員登用を前提とした有期雇用の技術者集団。請負型、常駐型業務委託（SES）契約から派遣契約（一般派遣免許 （派）13-301980）まで、プロジェクトに応じて対応し、技術部門の人的リソースBPOサービスとしてお手伝いします。また各専門分野のプロフェッショナルを派遣する登録型派遣（一般派遣）にも対応していますので、高品質なエンジニアの迅速なご提案が可能です。
          </p>
          <div class="Solution__leadImage">
            <img class="is-pc" src="/src/asset/solution/text-human.png" alt="ENGINEER PRIDE" />
            <img class="is-sp" src="/src/asset/solution/text-human-sp.png" alt="ENGINEER PRIDE" />
          </div>
        </div>
      </div>

      <div class="Solution__contents">
        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            2500名を超える登録スペシャリストが案件に対応！
          </div>
          <div class="RoundWrapper__text">
            登録エンジニア数は2500名を越えています（平成31年11月現在ヒューマネテック株式会社への派遣登録）。平成17年からの活動以来、15年間で延べ2000件以上の案件へ技術者を派遣しています。
          </div>
          <div class="RoundWrapper__contents">
            <div class="Solution__iconWrapper FlexBox FlexBox--wrap">
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human1.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  ITコンサルタント
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human2.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  銀行、証券、物流、<br />
                  各業務に特化した<br />
                  PM、PL
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human3.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  UNIX, Linux,<br />
                  Windows基盤<br />
                  （ネットワーク/サーバ）<br />
                  設計構築運用保守管理
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human4.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  Java, VB, .Net, DB設計<br />
                  (Oracle, SQLserver)<br />
                  開発エンジニア
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human5.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  データサイエンティスト/<br />
                  データアナリスト
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human6.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  バイリンガルSE
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human7.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  医療系、金融系<br />
                  ヘルプデスク/<br />
                  コールセンター
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human8.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  ソリューション営業
                </p>
              </div>
              <div class="Solution__iconItem FlexBox FlexBox--middle">
                <img src="/src/asset/solution/ico-human9.png" alt="CONSULTANT" />
                <p class="Solution__iconWrapperText">
                  データセンター<br />
                  オペレーション
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="Solution__item FlexBox FlexBox--middle">
            <div><img class="is-pc" src="/src/asset/solution/img-human1.png" /></div>
            <div class="Solution__itemTextWrapper">
              <div class="RoundWrapper__title RoundWrapper__title--row">
                登録エンジニアの構成
              </div>
              <img class="is-sp" src="/src/asset/solution/img-human1.png" />
              <div class="RoundWrapper__text RoundWrapper__text--row">
                上流工程から下流工程まで様々な経験を持ったエンジニアが在籍しています。<br/>
                業務内容やご希望のスキルセットに応じて、お仕事にみあった人材のご提案が可能です。<br/>
                まずは、弊社までご相談ください。
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="Solution__item FlexBox FlexBox--middle">
            <div><img class="is-pc" src="/src/asset/solution/img-human2.png" /></div>
            <div class="Solution__itemTextWrapper">
              <div class="RoundWrapper__title RoundWrapper__title--row">
                エンジニアが担当する業務分布
              </div>
              <img class="is-sp" src="/src/asset/solution/img-human2.png" />
              <div class="RoundWrapper__text RoundWrapper__text--row">
                弊社に登録しているエンジニアは、上流工程経験者が半数います。また経験の少ないエンジニアには、徹底した社内教育、研修を行い、派遣先を選定します。貴社の要望にマッチした人材を弊社コンサルタントがアサインします。
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            平均年齢と派遣継続期間
          </div>
          <div class="FlexBox FlexBox--center">
            <div><img class="is-pc" src="/src/asset/solution/img-human3.png" /></div>
            <div><img class="is-sp" src="/src/asset/solution/img-human3-sp.png" /></div>
          </div>
          <div class="RoundWrapper__text RoundWrapper__text--mt">
            弊社に登録しているエンジニアは、上流工程経験者が半数います。また経験の少ないエンジニアには、徹底した社内教育、研修を行い、派遣先を選定します。貴社の要望にマッチした人材を弊社コンサルタントがアサインします。
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            エンジニア育成の取り組み 
          </div>
          <div class="RoundWrapper__text">
            長年ITエンジニアとして第一線で活躍してきた方や、異業種からエンジニアへ転身をしたばかりの方も含め、ヒューマンテックでは一貫してエンジニアの育成に注力しています。ハイスキルエンジニアは、よりスキルを磨くため、経験の浅いエンジニアはスキルアップの上ハイスキルエンジニアになるための支援をおしみません。入社時に個別の経験と技術志向に合わせて行う教育プログラム（カリキュラム）を作成し、確実に技術をスキルアップさせる資格取得支援制度で、スペシャリストとしての独り立ちを応援します。
          </div>
          <div class="Solution__bnrContainer FlexBox">
            <div class="Solution__bnrWrapper">
              <a href="../engineer_dispatch/"><img src="/src/asset/solution/bnr-pride.png" alt="ENGINEER PRIDE" /></a>
              <div class="Solution__bnrTextWrapper">
                <p class="Solution__bnrTitle">
                  企業様が安心して一緒に働くための<br/>
                  派遣エンジニアのサポート
                </p>
                <p class="Solution__bnrText">
                  ヒューマネテックは、実践的な技術や知識の指導と共に、他業種のコンサルタントによるコミュニケーション力やメンタルへルスを高める人材教育、福利厚生面の充実化などに取り組んでいます。技術面だけでなく、トータルで活躍できる派遣エンジニアを育成しています。
                </p>
              </div>
            </div>
            <div class="Solution__bnrWrapper">
              <a href="../future_engineer/"><img src="/src/asset/solution/bnr-future.png" alt="FUTURE ENGINEER" /></a>
              <div class="Solution__bnrTextWrapper">
                <p class="Solution__bnrTitle">
                  未来のエンジニア育成の取り組み
                </p>
                <p class="Solution__bnrText">
                  居酒屋のアルバイトや営業職、一般事務職…いまは異業種に従事されている方でもエンジニアとして成功することは十分可能です。5年後、10年後も、企業様に変わらずスキルの高い人材を派遣できるよう、未経験者の採用・育成にも力を入れています。
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="Solution__contactWrapper">
          <p>お問い合わせはこちら</p>
          <p class="Solution__contactTitle">アウトソーシング事業部</p>
          <p class="Solution__contactText">一般派遣免許 （派）13-301980</p>
          <p class="Solution__contactImage"><img src="/src/asset/solution/img-tel.png" alt="03-3254-1330" /></p>
          <p class="Solution__contactText">受付時間　9:30〜18:00（土・日・祝及び弊社休業日を除く）</p>
        </div>
      </div>

      <div class="Solution__bottomBnr FlexBox FlexBox--center">
        <a class="" href="./base.php">
          <img class="is-pc" src="/src/asset/solution/bnr-img-base.png" class="Solution__bottomBnrTitle" alt="基盤ソリューション" />
          <img class="is-sp" src="/src/asset/solution/bnr-img-base-sp.png" class="Solution__bottomBnrTitle" alt="基盤ソリューション" />
        </a>
        <a class="" href="./system.php">
          <img class="is-pc" src="/src/asset/solution/bnr-img-system.png" class="Solution__bottomBnrTitle" alt="システムソリューション" />
          <img class="is-sp" src="/src/asset/solution/bnr-img-system-sp.png" class="Solution__bottomBnrTitle" alt="システムソリューション" />
        </a>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <p class="BreadCrumb__item">人材ソリューション</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
