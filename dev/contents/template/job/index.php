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
      <div class="Job__main">
        <div class="Job__mainWrapper FlexBox FlexBox--center FlexBox--middle">
          <h1 class="Job__mainTitle">
            <img class="is-pc" src="/src/asset/job/title.png" alt="案件を探す" />
            <img class="is-notPC" src="/src/asset/job/title-sp.png" alt="案件を探す" />
          </h1>
          <div class="Job__form">
            <div class="Job__formItem FlexBox">
              <input type="text" name="" placeholder="フリーワードで検索する">
              <div class="Job__formSubmit">
                <input type="submit">
              </div>
            </div>
            <p class="Job__formText">条件を設定して検索</p>
            <div class="Job__formItem FlexBox">
              <div class="Job__formSelectWrapper FlexBox FlexBox--middle">
                <div class="Job__formSelect">
                  <select name="">
                    <option value="">職種</option>
                    <option value="">職種</option>
                    <option value="">職種</option>
                  </select>
                </div>
                <p class="Job__formSeparator">×</p>
                <div class="Job__formSelect">
                  <select name="">
                    <option value="">最寄駅</option>
                    <option value="">最寄駅</option>
                    <option value="">最寄駅</option>
                  </select>
                </div>
                <p class="Job__formSeparator">×</p>
                <div class="Job__formSelect">
                  <select name="">
                    <option value="">給与</option>
                    <option value="">給与</option>
                    <option value="">給与</option>
                  </select>
                </div>
              </div>
              <div class="Job__formSubmit Job__formSubmit--round">
                <input type="submit">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="Job__wrapper">
        <div class="Job__container FlexBox">
          <div class="Job__menu">
            <div class="Job__menuHeader FlexBox FlexBox--middle">
              <p>職種別に求人情報を表示</p>
            </div>
            <div class="Job__menuBody">
              <a class="Job__menuItem" href="./index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-pm.png" />
                  </div>
                  <p class="Job__menuText">PM</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-pmo.png" />
                  </div>
                  <p class="Job__menuText">PMO</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-se.png" />
                  </div>
                  <p class="Job__menuText">開発 SE</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-dev.png" />
                  </div>
                  <p class="Job__menuText">開発プログラマー</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-network.png" />
                  </div>
                  <p class="Job__menuText">ネットワークエンジニア</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-server.png" />
                  </div>
                  <p class="Job__menuText">サーバーエンジニア</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-help.png" />
                  </div>
                  <p class="Job__menuText">ヘルプデスク</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-marketing.png" />
                  </div>
                  <p class="Job__menuText">マーケティング</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-office.png" />
                  </div>
                  <p class="Job__menuText">事務</p>
                  <p class="Job__menuNumber">（2）</p>
                </div>
              </a>
              <a class="Job__menuItem" href="index02.php">
                <div class="FlexBox FlexBox--middle">
                  <div class="Job__icoWrapper FlexBox FlexBox--center">
                    <img src="/src/asset/job/ico-other.png" />
                  </div>
                  <p class="Job__menuText">その他</p>
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
            <div class="Job__item">
              <div class="Job__itemHeader Job__itemHeader--navy FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-pm-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    PM
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
              <div class="Job__itemHeader Job__itemHeader--navy FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-pmo-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    PMO
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
              <div class="Job__itemHeader Job__itemHeader--blue FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-se-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    開発 SE
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
              <div class="Job__itemHeader Job__itemHeader--blue FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-dev-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    開発プログラマー
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
              <div class="Job__itemHeader Job__itemHeader--green FlexBox FlexBox--middle">
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
              <div class="Job__itemHeader Job__itemHeader--lightgreen FlexBox FlexBox--middle">
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
              <div class="Job__itemHeader Job__itemHeader--purple FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-help-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    ヘルプデスク
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
              <div class="Job__itemHeader Job__itemHeader--orange FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-marketing-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    マーケティング
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
              <div class="Job__itemHeader Job__itemHeader--red FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-office-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    事務
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
              <div class="Job__itemHeader Job__itemHeader--gray FlexBox FlexBox--middle">
                <div class="Job__itemCategory FlexBox">
                  <div><img src="/src/asset/job/ico-other-w.png" /></div>
                  <p class="Job__itemCategoryTitle">
                    その他
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
        <p class="BreadCrumb__item">案件を探す</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
