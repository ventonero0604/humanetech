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
        <h1><img src="/src/asset/title-news-detail.png" alt="ニュース" /></h1>
      </div>

      <div class="Others__wrapper">
        <div class="RoundWrapper">
          <div class="NewsDetail FlexBox">
            <div class="NewsDetail__contents">
              <p class="NewsDetail__date">
                2020.2.28
              </p>
              <h2 class="NewsDetail__title">
                新型コロナウィルス感染症の対策について
              </h2>
              <div class="NewsDetail__text">
                <p>当新型コロナウイルス感染症については、日本国内においても感染者が確認されるなど今後の感染拡大も懸念されている状況です。</p>
                <p>弊社取引先様においても2月28日現在8割の職場が在宅もしくは時差通勤を導入していることも踏まえ弊社では3月3日より営業職・コーディネイター職については順次、在宅勤務を導入します。</p>
                <p>派遣で就業中の社員については派遣先の指示に従い、感染予防及び体調管理に十分ご留意くださいますようお願いします。</p>
                <p>弊社のお仕事にご応募いただき面接登録のご希望の方については、電話面接、ビデオ通話面接、最寄りの駅でのお打ち合わせ等、柔軟に対応いたしますので、お気軽にご相談くださいませ。</p>
                <p>営業職・コーディネイター職の在宅勤務が開始されてもサービスの低下のないよう社員一同万全を期して対応いたしますのでご安心ください。</p>
                <p>今後、不測の事態等により変更が生じた場合には、ホームページ等で随時お知らせします。</p>
                <p>代表取締役　森田　庸一</p>
              </div>
              <div class="FlexBox FlexBox--center NewsDetail__btnWrapper">
                <a href="#">PREV</a>
                <a href="#">NEXT</a>
              </div>
            </div>
            <div class="NewsDetail__menu">
              <h3 class="NewsDetail__menuTitle">
                Recent Posts
              </h3>
              <ul class="NewsDetail__list">
                <li>
                  <a href="#">
                    新型コロナウィルス感染症の対策について
                  </a>
                </li>
                <li>
                  <a href="#">
                    勉強会開催中
                  </a>
                </li>
                <li>
                  <a href="#">
                    パソコンやスマホから面接が実施できるWeb面接を開始しました。
                  </a>
                </li>
                <li>
                  <a href="#">
                    年末年始の営業について
                  </a>
                </li>
                <li>
                  <a href="#">
                    8月お盆期間営業時間のご案内
                  </a>
                </li>
              </ul>
              <h3 class="NewsDetail__menuTitle">
                Archive
              </h3>
              <ul class="NewsDetail__list">
                <li>
                  <a href="#">
                    2020年2月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2019年10月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2018年4月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2017年12月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2017年8月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2016年12月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2016年11月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2016年6月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2016年3月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2015年12月
                  </a>
                </li>
                <li>
                  <a href="#">
                    2015年9月
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="#">HOME</a>
        <a class="BreadCrumb__item" href="../template/news.php">NEWS</a>
        <p class="BreadCrumb__item">新型コロナウィルス感染症の対策について</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('component/footer.html'); ?>
  </div>
</div>
</body>
</html>
