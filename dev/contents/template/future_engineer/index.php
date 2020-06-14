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
      <div class="Future__main">
        <h1 class="Future__mainTitle">
          <img src="/src/asset/future/title-main.png" alt="未来のエンジニア採用" />
        </h1>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list LocalNavi__list--future">
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">未来のエンジニア採用</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./staff.php">社員紹介</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/">募集要項</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../engineer_dispatch/faq.php">よくある質問</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/future_engineer.php">採用エントリー</a></li>
        </ul>
      </div>

      <div class="Future__lead">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <h2 class="Future__leadTitle">
            <img class="is-pc" src="/src/asset/future/title-lead.png" alt="叶えたい夢や理想を現実にしてみませんか？" />
            <img class="is-notPC" src="/src/asset/future/title-lead-sp.png" alt="叶えたい夢や理想を現実にしてみませんか？" />
          </h2>
          <p class="Future__leadText">
            ヒューマネテックは、2005年の設立以来、 IT専門の派遣会社としてエンジニアのスペシャリストを派遣することで地道に実績を積み重ねてまいりました。市場のグローバル化が進む中、スタッフの中には世界進出している企業様のネットワークの提案・設計・構築の全てを任せられ、自ら提案・設計したシステムの導入を構築するため、英国まで赴くような人材も数多く存在します。エンジニアとしてやりがいを感じられる仕事に挑戦してみませんか。
          </p>
          <div class="Future__leadImage">
            <img class="is-pc" src="/src/asset/future/img-lead.png" alt="FUTURE ENGINEER" />
            <img class="is-sp" src="/src/asset/future/img-lead-sp.png" alt="FUTURE ENGINEER" />
          </div>
        </div>
      </div>

      <div class="Future__contents">
        <div class="RoundWrapper RoundWrapper--0padding">
          <div class="RoundWrapper__title">
            HumanetechのeはEducation<br />
            わたしたちは未来のエンジニアのために尽力します
          </div>
          <div class="RoundWrapper__text">
            「仕事が人を育てる｣からこそ多彩な選択肢から自分の進むべき道を選ぶ！その舞台へヒューマネテックは後押しています。ヒューマネテックでは、エンジニア育成10年計画として、高卒から入社10年で４大卒にも負けないエンジニアの輩出を目指します。また他業種からITエンジニアへ転身を図る方のキャリアチェンジを支援します。
          </div>
          <div class="Future__spColumn FlexBox">
            <a href="./staff_01.php"><img src="/src/asset/future/bnr1.png" alt="パチンコ店スタッフ" /></a>
            <a href="./staff_01.php"><img src="/src/asset/future/bnr2.png" alt="営業職" /></a>
            <a href="./staff_01.php"><img src="/src/asset/future/bnr3.png" alt="大工" /></a>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            Humanetechで働く3つの魅力
          </div>
          <div class="RoundWrapper__text RoundWrapper__text--center">
            「教育と福利厚生」「人材育成力」「頼れる仲間たち」
          </div>
          <div class="Future__spColumn FlexBox FlexBox--center">
            <div class="Future__textBox">
              <div class="Future__textBoxTitle">充実と安心の教育制度・福利厚生</div>
              <div class="Future__textBoxText">
                <p>
                  安心してスキルアップできる制度や
                  カリキュラムが充実しています。
                </p>
                <p>
                  ・資格取得支援制度<br/>
                  ・先輩エンジニアによる定期勉強会<br/>
                  ・ e-ラーニングによるIT講座<br/>
                  ・他社にないフォロー体制<br/>
                  ・ TJK東京都情報サービス産業健保加入
                </p>
              </div>
            </div>
            <div class="Future__textBox">
              <div class="Future__textBoxTitle">描けるキャリアパス</div>
              <div class="Future__textBoxText">
                何よりも優秀なエンジニアの育成に注力する会社です。経験者はもとより、異業種から転身の未経験者まで、キャリアコンサルタントの先輩による実践的な指導の下、各自がなりたい未来像を念頭においたコーチングや指導を行っています。
              </div>
            </div>
            <div class="Future__textBox">
              <div class="Future__textBoxTitle">ひとりじゃない</div>
              <div class="Future__textBoxText">
                仲間がいるから頑張れる。仲間と共有できる達成感があるからこそ高いハードルも乗り越えられる。<br/>
                技術力が求められるエンジニア職にあって同じ釜の飯を食う仲間として苦しみや喜びをシェアし、切磋琢磨していける環境を整備しています。
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper" id="scheme">
          <div class="RoundWrapper__title">
            スキルを活かせる幅広いエンジニア職種
          </div>
          <div class="RoundWrapper__text">
            サーバエンジニアとしての軸を持つには得意分野を見つけることが近道です。そのためには貪欲な知的好奇心と謙虚に学ぶ姿勢は欠かせません。
          </div>
          <div class="Future__flow">
            <div class="Future__flowHeader FlexBox FlexBox--center">
              <div><img class="is-pc" src="../../../src/asset/future/img-flow-header.png" alt="研修スタート" /></div>
              <div><img class="is-sp" src="../../../src/asset/future/img-flow-header-sp.png" alt="研修スタート" /></div>
            </div>
            <div class="Future__flowBody">
              <div class="Future__flowItem Future__flowItem--1st FlexBox FlexBox--center">
                <div class="Future__flowImageWrapper">
                  <img src="../../../src/asset/future/img-flow1.png" />
                </div>
                <div class="Future__flowTextWrapper">
                  <div class="Future__flowPeriod">
                    <img src="../../../src/asset/future/text-flow1.png" alt="6ヶ月" />
                  </div>
                  <div class="Future__flowItemTitle">
                    研修アカデミーメンバー
                  </div>
                  <div class="Future__flowItemText">
                    研修期間の3ヶ月目〜6ヶ月目でOJTを中心として、現場研修を行います。不明な点は先輩社員に質問できるので安心して経験を積むことができます。
                  </div>
                  <div class="Future__flowItemInfo FlexBox">
                    <p class="Future__flowItemInfoTitle">研修内容</p>
                    <p class="Future__flowItemInfoText">ビジネススキル研修、テクニカルスキル研修など</p>
                  </div>
                </div>
              </div>
              <div class="Future__flowItem Future__flowItem--2nd FlexBox FlexBox--center">
                <div class="Future__flowImageWrapper">
                  <img src="../../../src/asset/future/img-flow2.png" />
                </div>
                <div class="Future__flowTextWrapper">
                  <div class="Future__flowPeriod">
                    <img src="../../../src/asset/future/text-flow2.png" alt="12ヶ月" />
                  </div>
                  <div class="Future__flowItemTitle">
                    運用・保守ヘルプデスクメンバー
                  </div>
                  <div class="Future__flowItemText">
                    研修期間の3ヶ月目〜6ヶ月目でOJTを中心として、現場研修を行います。不明な点は先輩社員に質問できるので安心して経験を積むことができます。
                  </div>
                  <div class="Future__flowItemInfo FlexBox">
                    <p class="Future__flowItemInfoTitle">研修内容</p>
                    <p class="Future__flowItemInfoText">サーバ運用、監視、ヘルプデスク、<br />
                      デスクトップサービスなど</p>
                  </div>
                </div>
              </div>
              <div class="Future__flowItem Future__flowItem--3rd FlexBox FlexBox--center">
                <div class="Future__flowImageWrapper">
                  <img src="../../../src/asset/future/img-flow3.png" />
                </div>
                <div class="Future__flowTextWrapper">
                  <div class="Future__flowPeriod">
                    <img src="../../../src/asset/future/text-flow3.png" alt="2~3年目" />
                  </div>
                  <div class="Future__flowItemTitle">
                    構築・テストメンバー
                  </div>
                  <div class="Future__flowItemText">
                    仮想サーバのアップグレードや認証サーバのリプレイスなど、様々なプロジェクトにメンバーとして参加します。知識学習と実践を通してスキルを習得します。
                  </div>
                  <div class="Future__flowItemInfo">
                    <div class="Future__flowItemInfoLine">
                      <p class="Future__flowItemInfoTitle">役割</p>
                      <p class="Future__flowItemInfoText">プロジェクトメンバー、プロジェクトリーダーの補佐</p>
                    </div>
                    <div class="Future__flowItemInfoLine FlexBox">
                      <p class="Future__flowItemInfoTitle">担当区分</p>
                      <p class="Future__flowItemInfoText">サーバ構築、実装、テストなど</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Future__flowItem Future__flowItem--4th FlexBox FlexBox--center">
                <div class="Future__flowImageWrapper">
                  <img src="../../../src/asset/future/img-flow4.png" />
                </div>
                <div class="Future__flowTextWrapper">
                  <div class="Future__flowPeriod">
                    <img src="../../../src/asset/future/text-flow4.png" alt="4~5年目" />
                  </div>
                  <div class="Future__flowItemTitle">
                    構築・設計リーダー
                  </div>
                  <div class="Future__flowItemText">
                    プロジェクトリーダーとしてプロジェクトに参加します。<br />
                    技術力、統率力によりチームメンバーを牽引し、<br />
                    プロジェクトを推進します。
                  </div>
                  <div class="Future__flowItemInfo">
                    <div class="Future__flowItemInfoLine FlexBox">
                      <p class="Future__flowItemInfoTitle">役割</p>
                      <p class="Future__flowItemInfoText">プロジェクトリーダー</p>
                    </div>
                    <div class="Future__flowItemInfoLine FlexBox">
                      <p class="Future__flowItemInfoTitle">担当区分</p>
                      <p class="Future__flowItemInfoText">要件定義、サーバ構築、実装、テストなど</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="Future__flowItemFooter FlexBox FlexBox--center">
              <div>
                <div><img src="../../../src/asset/future/text-flow5.png" alt="6年目以降" />
                  <div class="Future__flowItemTitle">
                    ITコンサルタント、スペシャリスト、プロジェクトマネージャー
                  </div>
                  <div class="Future__flowItemText">
                    本人の希望と適性に合わせて今後のキャリアパスをデザインします。<br />大きく３つのキャリアパスに分かれます。
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper RoundWrapper--0padding" id="program">
          <div class="RoundWrapper__title">
            充実の教育制度
          </div>
          <div class="RoundWrapper__text">
            入社時に一人ひとりの経験および技術志向から個別の教育プログラム（カリキュラム）を作成し、1年目に受講をしていただきます。2年目、3年目には習得した技術により新しい仕事へのチャレンジが可能です。弊社の資格取得支援制度により今まで多くのエンジニアが個人資格を取得し、独り立ちしています。
          </div>
          <div class="Future__program">
            <div class="FlexBox FlexBox--center">
              <div class="Future__programItem">
                <div><img src="/src/asset/future/img-program1.png" /></div>
                <div class="Future__programTextWrapper">
                  <div class="Future__programTitle">
                    キャリアアップ教育研修制度
                  </div>
                  <div class="Future__programText">
                    e-ラーニングの講座数は大手他社をも凌駕していることはもちろん、社内での座学や実機を使った教育体制を整えています。個別指導会や定期開催の技術トレーニングにぜひご参加ください。
                  </div>
                </div>
              </div>
              <div class="Future__programItem">
                <div><img src="/src/asset/future/img-program2.png" /></div>
                <div class="Future__programTextWrapper">
                  <div class="Future__programTitle">
                    技術者カリキュラム
                  </div>
                  <div class="Future__programText">
                    インフラ担当エンジニア向け実機トレーニングを月1開催しています。
                    開発エンジニア向けに、e-ラーニングシステムにより、技術者向けインフラコース、開発者コースに分かれて受講できます。
                  </div>
                </div>
              </div>
              <div class="Future__programItem">
                <div><img src="/src/asset/future/img-program3.png" /></div>
                <div class="Future__programTextWrapper">
                  <div class="Future__programTitle">
                    一般教養コース
                  </div>
                  <div class="Future__programText">
                    職種変更希望の方に、英会話、簿記、情報管理（セキュリティ）や更にはOfficeの高度な使用方法を開設している講義を受講できます。
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            ひとめでわかるヒューマネテック
          </div>
        </div>

        <div class="Future__bnrWrapper FlexBox FlexBox--center">
          <a href="../corporate/recruit/"><img src="/src/asset/future/bnr-info.png" alt="未来のエンジニア採用 募集要項" /></a>
          <a href="../corporate/recruit/future_engineer.php"><img src="/src/asset/future/bnr-entry.png" alt="未来のエンジニア採用 エントリー" /></a>
        </div>
      </div>

      <div class="Future__bnrContainer FlexBox FlexBox--column FlexBox--middle">
        <p class="Future__bnrContainerTitle">
          未来のエンジニア採用では、居酒屋バイトや営業職、一般事務職などからITエンジニアへ、異業種からのキャリアチェンジを支援します。
        </p>
        <div class="Future__bnrContainerItem FlexBox FlexBox--center">
          <a href="./staff_01.php"><img src="/src/asset/future/bnr1.png" alt="パチンコ店スタッフ" /></a>
          <a href="./staff_01.php"><img src="/src/asset/future/bnr2.png" alt="営業職" /></a>
          <a href="./staff_01.php"><img src="/src/asset/future/bnr3.png" alt="大工" /></a>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <p class="BreadCrumb__item">未来のエンジニア採用</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
