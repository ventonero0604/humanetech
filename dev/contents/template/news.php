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
        <h1><img src="/src/asset/title-news.png" alt="ニュース一覧" /></h1>
      </div>

      <div class="Others__wrapper">
        <div class="RoundWrapper">
          <h2 class="RoundWrapper__title">INFORMATION</h2>
          <div class="RoundWrapper__contents">
            <ul class="News__list">
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    インフォメーションタイトル
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    勉強会開催中
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    パソコンやスマホから面接が実施できるWeb面接を開始しました。 
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    年末年始の営業について 
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    8月お盆期間営業時間のご案内 
                  </p>
                </a>
              </li>
            </ul>

            <div class="News__pager FlexBox FlexBox--center">
              <p class="News__pagerLink is-current">1</p>
              <a class="News__pagerLink" href="#">2</a>
              <a class="News__pagerLink" href="#">3</a>
              <a class="News__pagerLink" href="#">4</a>
              <a class="News__pagerLink" href="#">5</a>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <h2 class="RoundWrapper__title">PRESS RELEASE</h2>
          <div class="RoundWrapper__contents">
            <ul class="News__list">
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    インフォメーションタイトル
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    勉強会開催中
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    パソコンやスマホから面接が実施できるWeb面接を開始しました。 
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    年末年始の営業について 
                  </p>
                </a>
              </li>
              <li class="News__listItem">
                <a class="News__listLink FlexBox" href="#">
                  <p class="News__date">
                    2020.00.00
                  </p>
                  <p class="News__category">
                    INFORMATION
                  </p>
                  <p class="News__text">
                    8月お盆期間営業時間のご案内 
                  </p>
                </a>
              </li>
            </ul>

            <div class="News__pager FlexBox FlexBox--center">
              <p class="News__pagerLink is-current">1</p>
              <a class="News__pagerLink" href="#">2</a>
              <a class="News__pagerLink" href="#">3</a>
              <a class="News__pagerLink" href="#">4</a>
              <a class="News__pagerLink" href="#">5</a>
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
        <p class="BreadCrumb__item">ニュース</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('component/footer.html'); ?>
  </div>
</div>
</body>
</html>
