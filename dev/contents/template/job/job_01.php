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
    <section class="Job">
      <div class="Job__wrapper Job__wrapper--line">
        <div class="Job__container Job__container--full">
          <div class="FlexBox">
            <div class="Job__contents">
              <div class="Job__item">
                <div class="Job__itemHeader Job__itemHeader--full Job__itemHeader--dev FlexBox FlexBox--middle">
                  <div class="Job__itemCategory FlexBox">
                    <div><img src="/src/asset/job/ico-dev-w.png" /></div>
                    <p class="Job__itemCategoryTitle">
                      開発エンジニア
                    </p>
                  </div>
                  <p class="Job__itemDate">
                    登録日：2020.3.18｜お仕事No. 200313NT2
                  </p>
                </div>
                <div class="Job__itemBody Job__itemBody--full">
                  <h2 class="Job__itemTitle Job__itemTitle--full">
                    <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                  </h2>
                  <div class="Job__itemDetail">
                    <p class="Job__itemDetailText">
                      社内ポータル（SharePoint Server）での依頼に基づくサイト構築支援。ユーザー（サイト管理者）からの調査依頼・問合せ対応をお願い致します。<br/>
                      Webサイト作成経験があり、SharePointに関して積極的に学習して対応する意欲のある方であれば、大歓迎！
                    </p>
                  </div>
                  <h3 class="RoundWrapper__title Job__hideTitleSp">
                    募集要項
                  </h3>
                  <div class="Job__list">
                    <div class="Job__listItem">
                      <div class="FlexBox">
                        <div class="Job__listTitle">
                          給与
                        </div>
                        <div class="Job__listText">
                          <p>月額40万～50万円　※スキル見合い、お気軽にご相談ください。</p>
                          <p>交通費　:　 別途支給</p>
                        </div>
                      </div>
                    </div>
                    <div class="Job__listItem">
                      <div class="FlexBox">
                        <div class="Job__listTitle">
                          期間
                        </div>
                        <div class="Job__listText">
                          即日～長期　※勤務開始時期はご相談下さい
                        </div>
                      </div>
                    </div>
                    <div class="Job__listItem">
                      <div class="FlexBox">
                        <div class="Job__listTitle">
                          場所
                        </div>
                        <div class="Job__listText">
                          西大井駅より徒歩10分
                        </div>
                      </div>
                    </div>
                    <div class="Job__listItem">
                      <div class="FlexBox">
                        <div class="Job__listTitle">
                          勤務曜日
                        </div>
                        <div class="Job__listText">
                          月～金
                        </div>
                      </div>
                    </div>
                    <div class="Job__listItem">
                      <div class="FlexBox">
                        <div class="Job__listTitle">
                          勤務地
                        </div>
                        <div class="Job__listText">
                          9:00～18:00　残業：月30時間程度
                        </div>
                      </div>
                    </div>
                    <div class="Job__listItem">
                      <div class="FlexBox">
                        <div class="Job__listTitle">
                          仕事内容
                        </div>
                        <div class="Job__listText">
                          SharePointサイト構築(サイトの作成、リスト・ライブラリの設定、アクセス権の設定など)を行ていただきます。SharePointサイト以外でもWebサイト作成経験があり、SharePointに関して積極的に学習して対応する意欲のある方であれば、相談に応じます。
                        </div>
                      </div>
                    </div>
                    <div class="Job__listItem">
                      <div class="FlexBox">
                        <div class="Job__listTitle">
                          応募資格
                        </div>
                        <div class="Job__listText">
                          <p>・SharePoint Server でのサイト管理、構築の経験</p>
                          <p>・JavaScript</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="Job__detailBtnWrapper FlexBox FlexBox--center">
                    <div class="Job__itemBtn Job__itemBtn--detailFull">
                      <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリーする</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="FlexBox FlexBox--center">
          <a href="../engineer_dispatch/">
            <img class="is-notSP" src="/src/asset/job/bnr-l.png" alt="ENGINEER PRIDE" />
            <img class="is-sp" src="/src/asset/job/bnr-l-sp.png" alt="ENGINEER PRIDE" />
          </a>
        </div>

        <div class="Job__bnrWrapper FlexBox FlexBox--center">
          <a href="../engineer_dispatch/consulting.php">
            <img src="/src/asset/job/bnr-consultant.png" alt="キャリアコンサルティング" />
          </a>
          <a href="../engineer_dispatch/faq.php">
            <img src="/src/asset/job/bnr-faq.png" alt="よくある質問" />
          </a>
          <a href="../engineer_dispatch/about_dispatch.php">
            <img src="/src/asset/job/bnr-about.png" alt="当社の派遣について" />
          </a>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="#">HOME</a>
        <p class="BreadCrumb__item">お仕事を探す</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
