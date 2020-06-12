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
      <div class="Corporate__main Corporate__main--philosophy FlexBox FlexBox--middle">
        <h1 class="Corporate__title"><img src="/src/asset/corporate/title-philosophy.png" alt="企業理念" /></h1>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">企業情報</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">企業理念</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./profile.php">会社概要</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./profile.php#access">アクセス</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/">採用情報</a></li>
        </ul>
      </div>
  
      <div class="Corporate__container Corporate__container--text" id="message">
        <div class="Philosophy__leadTitle">
          Life is like a box of chocolates!
        </div>
        <div class="Philosophy__leadWrapper FlexBox FlexBox--center">
          <div class="Philosophy__leadText">
            <p>
              ｢情報化社会に欠かせない価値あるサービスと人材の創造で社会貢献｣を経営理念として2005年末にヒューマネテック株式会社を設立いたしました。<br />
              設立以来、IT技術の進化は加速度を増し、いまやサービスやモノの創造に求められるスキルや経験は数年単位で移り変わっています。<br />
              AI、IoT、AR、MCN、仮想化、クラウド、スマートメディア、、、<br />
              メディアで流れるITキーワードはまるで私が学生時代に観たSF映画のような世界です。
            </p>
            <p>
              私たちヒューマネテックの社会貢献は、分かりやすく目に見えるものではありませんが、少なくともこの10年間、IT技術において一翼を担ってきたと自負しており、10年後の世界をとても待ち遠しく感じております。そしてその未来の世界で、ヒューマネテックのエンジニアがどれだけ活躍できているか今から楽しみでもあります。
            </p>
            <p>
              ヒューマネテックはそんな未来の世界で活躍するエンジニアの育成、養成に注力しています。失敗を恐れずチャレンジし続けることにより、これからも近い将来グローバルレベルで活躍する人材を輩出していきます。<br />
              そしてヒューマネテックはワンストップでITトータルサービスを構築できる企業を目指して、基盤ソリューション、クラウドソリューション、システム開発事業、そしてエンジニア教育事業に情熱を注ぎ、日々邁進していきます。
            </p>
            <p>
              独りでなんてつまらない、<br />
              仲間とともにチョコレートの箱を開ける瞬間を味わいましょう！
            </p>
          </div>
          <div class="Philosophy__imageWrapper">
            <img src="/src/asset/corporate/img-president.png" />
            <p class="Philosophy__name"><span>代表取締役</span>森田 庸一</p>
            <p class="Philosophy__name Philosophy__name--large">Yoichi Morita</p>
          </div>
        </div>
        <div class="FlexBox FlexBox--center">
          <img class="Welfare__leadBottomText" src="/src/asset/corporate/text-humanetech.png" alt="EDUCATION" />
        </div>
      </div>
  
      <div class="Corporate__wrapper">
        <div class="Philosophy__container Philosophy__container--header FlexBox FlexBox--column FlexBox--middle">
          <img src="/src/asset/corporate/text-mission.png" alt="MISSION" />
          <p class="Philosophy__itemTitle">
            経営理念
          </p>
          <p class="Philosophy__itemText">
            求められる価値を追求し続ける、ＩＴ人材の創造を通した社会貢献
          </p>
        </div>
        <div class="Philosophy__container FlexBox FlexBox--column FlexBox--middle">
          <img src="/src/asset/corporate/text-vision.png" alt="VISION" />
          <p class="Philosophy__itemTitle">
            ビジョン
          </p>
          <p class="Philosophy__itemText Philosophy__itemText--center">
            やりがいに繋がる仕事と教育を通し、顧客と社会に貢献できるＩＴ<br />
            プロフェッショナルを育成。関わるすべての人と共に成長する企業を目指します。
          </p>
        </div>
        <div class="Philosophy__container FlexBox FlexBox--column FlexBox--middle">
          <img src="/src/asset/corporate/text-value.png" alt="VALUE" />
          <p class="Philosophy__itemTitle">
            行動指針
          </p>
          <div class="Philosophy__value FlexBox FlexBox--center">
            <div class="Philosophy__valueItem">
              <img src="/src/asset/corporate/img-zin.png" alt="迅" />
              <p class="Philosophy__valueItemText Philosophy__valueItemText--2col">
                素早い行動と決断
              </p>
            </div>
            <div class="Philosophy__valueItem">
              <img src="/src/asset/corporate/img-gi.png" alt="技" />
              <p class="Philosophy__valueItemText">
                教育と現場で培う確かな技術、技能
              </p>
            </div>
            <div class="Philosophy__valueItem">
              <img src="/src/asset/corporate/img-rei.png" alt="零" />
              <p class="Philosophy__valueItemText">
                ゼロからスタートを切る勇気へのエール
              </p>
            </div>
            <div class="Philosophy__valueItem">
              <img src="/src/asset/corporate/img-chi.png" alt="智" />
              <p class="Philosophy__valueItemText">
                正しい判断をするためのたゆまぬ学習
              </p>
            </div>
            <div class="Philosophy__valueItem">
              <img src="/src/asset/corporate/img-shin.png" alt="新" />
              <p class="Philosophy__valueItemText">
                新しいチャレンジを恐れず
              </p>
            </div>
          </div>
          <div class="Philosophy__separator FlexBox FlexBox--center">
            <img src="/src/asset/corporate/img-separator.png" />
          </div>
          <p class="Philosophy__itemText Philosophy__itemText--center">
            これらに基づく正しい関係を、<br />
            社会、お客様、そして社員と築き上げます。
          </p>
        </div>
        <div class="Philosophy__container Philosophy__container--footer FlexBox FlexBox--column FlexBox--middle">
          <p class="Philosophy__itemTitle">
            ヒューマネテックが今、力を入れている事
          </p>
          <p class="RoundWrapper__text">
            企業業務の効率化、低コスト化、アウトソーシング化をクラウドソリューションで実現する仕組み作りの提案、そしてそのコアとなる人材の育成事業です。
          </p>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="#">HOME</a>
        <a class="BreadCrumb__item" href="#">企業情報</a>
        <p class="BreadCrumb__item">企業理念</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
