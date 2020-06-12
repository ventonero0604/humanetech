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
        <div class="Job__container FlexBox">
          <div class="Job__menu">
            <div class="Job__menuHeader FlexBox FlexBox--middle">
              <p>職種別に求人情報を表示</p>
            </div>
            <div class="Job__menuBody">
              <a class="Job__menuItem" href="#">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-dev.png" />
                  </div>
                  <p class="Job__menuText">開発エンジニア</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="#">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-network.png" />
                  </div>
                  <p class="Job__menuText">ネットワークエンジニア</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="#">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-server.png" />
                  </div>
                  <p class="Job__menuText">サーバエンジニア</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="#">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-maintein.png" />
                  </div>
                  <p class="Job__menuText">運用保守</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="#">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-support.png" />
                  </div>
                  <p class="Job__menuText">サポート</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="#">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-translate.png" />
                  </div>
                  <p class="Job__menuText">IT事務翻訳系</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="#">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-ohter.png" />
                  </div>
                  <p class="Job__menuText">その他IT系</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <div class="Job__menuLogoWrapper">
                <a href="#" class="FlexBox FlexBox--center">
                  <img src="/src/asset/job/bnr-en.png" alt="エン派遣" />
                </a>
              </div>
            </div>
          </div>

          <div class="Job__contents">
            <div class="Job__searchResult">
              <h2 class="Job__searchResultTitle">
                案件情報の検索結果
              </h2>
              <div class="Job__searchResultWrapper FlexBox FlexBox--middle">
                <p class="Job__searchResultItems">
                  100件中1～50件を表示
                </p>
                <div class="FlexBox ItemWrapper">
                  <div class="SelectWrapper">
                    <select name="">
                      <option value="">新着順</option>
                      <option value="">新着順</option>
                      <option value="">新着順</option>
                    </select>
                  </div>
                  <div class="FlexBox">
                    <a class="PrevButton" href="#">
                      前へ
                    </a>
                    <a class="NextButton" href="#">
                      次へ
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--dev FlexBox FlexBox--middle">
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
              <div class="Job__itemBody">
                <h3 class="Job__itemTitle">
                  <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                </h3>
                <div class="Job__itemInfo">
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--salary">給与</p>
                    <div class="Job__itemInfoText">
                      月額40万円～　※スキル・経験により考慮
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--period">期間</p>
                    <div class="Job__itemInfoText">
                      即日～長期　※勤務開始時期はご相談下さい
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--place">場所</p>
                    <div class="Job__itemInfoText">
                      丸ノ内線東京駅より地下直結、JR東京駅より徒歩1分、JR京葉線東京駅より徒歩3分（大手町駅や有楽町駅からも通勤可！）
                    </div>
                  </div>
                </div>
                <div class="Job__itemBtnWrapper FlexBox FlexBox--center">
                  <div class="Job__itemBtn Job__itemBtn--detail">
                    <a href="job_01.php">詳細を見る</a>
                  </div>
                  <div class="Job__itemBtn Job__itemBtn--entry">
                    <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--network FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-network-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    ネットワークエンジニア
                  </p>
                </div>
                <p class="Job__itemDate">
                  登録日：2020.3.18｜お仕事No. 200313NT2
                </p>
              </div>
              <div class="Job__itemBody">
                <h3 class="Job__itemTitle">
                  <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                </h3>
                <div class="Job__itemInfo">
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--salary">給与</p>
                    <div class="Job__itemInfoText">
                      月額40万円～　※スキル・経験により考慮
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--period">期間</p>
                    <div class="Job__itemInfoText">
                      即日～長期　※勤務開始時期はご相談下さい
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--place">場所</p>
                    <div class="Job__itemInfoText">
                      丸ノ内線東京駅より地下直結、JR東京駅より徒歩1分、JR京葉線東京駅より徒歩3分（大手町駅や有楽町駅からも通勤可！）
                    </div>
                  </div>
                </div>
                <div class="Job__itemBtnWrapper FlexBox FlexBox--center">
                  <div class="Job__itemBtn Job__itemBtn--detail">
                    <a href="job_01.php">詳細を見る</a>
                  </div>
                  <div class="Job__itemBtn Job__itemBtn--entry">
                    <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--server FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-server-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    サーバエンジニア
                  </p>
                </div>
                <p class="Job__itemDate">
                  登録日：2020.3.18｜お仕事No. 200313NT2
                </p>
              </div>
              <div class="Job__itemBody">
                <h3 class="Job__itemTitle">
                  <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                </h3>
                <div class="Job__itemInfo">
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--salary">給与</p>
                    <div class="Job__itemInfoText">
                      月額40万円～　※スキル・経験により考慮
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--period">期間</p>
                    <div class="Job__itemInfoText">
                      即日～長期　※勤務開始時期はご相談下さい
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--place">場所</p>
                    <div class="Job__itemInfoText">
                      丸ノ内線東京駅より地下直結、JR東京駅より徒歩1分、JR京葉線東京駅より徒歩3分（大手町駅や有楽町駅からも通勤可！）
                    </div>
                  </div>
                </div>
                <div class="Job__itemBtnWrapper FlexBox FlexBox--center">
                  <div class="Job__itemBtn Job__itemBtn--detail">
                    <a href="job_01.php">詳細を見る</a>
                  </div>
                  <div class="Job__itemBtn Job__itemBtn--entry">
                    <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--maintain FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-maintain-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    運用保守
                  </p>
                </div>
                <p class="Job__itemDate">
                  登録日：2020.3.18｜お仕事No. 200313NT2
                </p>
              </div>
              <div class="Job__itemBody">
                <h3 class="Job__itemTitle">
                  <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                </h3>
                <div class="Job__itemInfo">
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--salary">給与</p>
                    <div class="Job__itemInfoText">
                      月額40万円～　※スキル・経験により考慮
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--period">期間</p>
                    <div class="Job__itemInfoText">
                      即日～長期　※勤務開始時期はご相談下さい
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--place">場所</p>
                    <div class="Job__itemInfoText">
                      丸ノ内線東京駅より地下直結、JR東京駅より徒歩1分、JR京葉線東京駅より徒歩3分（大手町駅や有楽町駅からも通勤可！）
                    </div>
                  </div>
                </div>
                <div class="Job__itemBtnWrapper FlexBox FlexBox--center">
                  <div class="Job__itemBtn Job__itemBtn--detail">
                    <a href="job_01.php">詳細を見る</a>
                  </div>
                  <div class="Job__itemBtn Job__itemBtn--entry">
                    <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--support FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-support-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    サポート
                  </p>
                </div>
                <p class="Job__itemDate">
                  登録日：2020.3.18｜お仕事No. 200313NT2
                </p>
              </div>
              <div class="Job__itemBody">
                <h3 class="Job__itemTitle">
                  <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                </h3>
                <div class="Job__itemInfo">
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--salary">給与</p>
                    <div class="Job__itemInfoText">
                      月額40万円～　※スキル・経験により考慮
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--period">期間</p>
                    <div class="Job__itemInfoText">
                      即日～長期　※勤務開始時期はご相談下さい
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--place">場所</p>
                    <div class="Job__itemInfoText">
                      丸ノ内線東京駅より地下直結、JR東京駅より徒歩1分、JR京葉線東京駅より徒歩3分（大手町駅や有楽町駅からも通勤可！）
                    </div>
                  </div>
                </div>
                <div class="Job__itemBtnWrapper FlexBox FlexBox--center">
                  <div class="Job__itemBtn Job__itemBtn--detail">
                    <a href="job_01.php">詳細を見る</a>
                  </div>
                  <div class="Job__itemBtn Job__itemBtn--entry">
                    <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--translate FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-translate-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    IT事務翻訳系
                  </p>
                </div>
                <p class="Job__itemDate">
                  登録日：2020.3.18｜お仕事No. 200313NT2
                </p>
              </div>
              <div class="Job__itemBody">
                <h3 class="Job__itemTitle">
                  <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                </h3>
                <div class="Job__itemInfo">
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--salary">給与</p>
                    <div class="Job__itemInfoText">
                      月額40万円～　※スキル・経験により考慮
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--period">期間</p>
                    <div class="Job__itemInfoText">
                      即日～長期　※勤務開始時期はご相談下さい
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--place">場所</p>
                    <div class="Job__itemInfoText">
                      丸ノ内線東京駅より地下直結、JR東京駅より徒歩1分、JR京葉線東京駅より徒歩3分（大手町駅や有楽町駅からも通勤可！）
                    </div>
                  </div>
                </div>
                <div class="Job__itemBtnWrapper FlexBox FlexBox--center">
                  <div class="Job__itemBtn Job__itemBtn--detail">
                    <a href="job_01.php">詳細を見る</a>
                  </div>
                  <div class="Job__itemBtn Job__itemBtn--entry">
                    <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--other FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-other-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    その他IT系
                  </p>
                </div>
                <p class="Job__itemDate">
                  登録日：2020.3.18｜お仕事No. 200313NT2
                </p>
              </div>
              <div class="Job__itemBody">
                <h3 class="Job__itemTitle">
                  <a href="#">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                </h3>
                <div class="Job__itemInfo">
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--salary">給与</p>
                    <div class="Job__itemInfoText">
                      月額40万円～　※スキル・経験により考慮
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--period">期間</p>
                    <div class="Job__itemInfoText">
                      即日～長期　※勤務開始時期はご相談下さい
                    </div>
                  </div>
                  <div class="Job__itemInfoTitle FlexBox">
                    <p class="Job__itemInfoTitleText Job__itemInfoTitleText--place">場所</p>
                    <div class="Job__itemInfoText">
                      丸ノ内線東京駅より地下直結、JR東京駅より徒歩1分、JR京葉線東京駅より徒歩3分（大手町駅や有楽町駅からも通勤可！）
                    </div>
                  </div>
                </div>
                <div class="Job__itemBtnWrapper FlexBox FlexBox--center">
                  <div class="Job__itemBtn Job__itemBtn--detail">
                    <a href="job_01.php">詳細を見る</a>
                  </div>
                  <div class="Job__itemBtn Job__itemBtn--entry">
                    <a href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Job__pager FlexBox FlexBox--center">
              <a class="prev" href="#">前へ</a>
              <p class="pages is-current" href="#">1</p>
              <a class="pages" href="#">2</a>
              <a class="pages" href="#">3</a>
              <a class="pages" href="#">4</a>
              <a class="pages" href="#">5</a>
              <a class="next" href="#">次へ</a>
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
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
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
