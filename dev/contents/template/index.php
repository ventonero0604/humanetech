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
    <section class="Top">
      <div class="Slider">
        <!-- styleにbackground-imageつける -->
        <div class="Top__main" style="background-image: url(/src/asset/top/img-main.png);">
          <h1 class="Top__mainTitle FlexBox FlexBox--middle FlexBox--center">
            <img src="../../src/asset/top/title-main.png" alt="人と技術と教育で未来へつなぐヒューマネテック。" />
          </h1>
        </div>
        <!-- styleにbackground-imageつける -->
        <div class="Top__main" style="background-image: url(/src/asset/top/img-pride.png);">
          <h1 class="Top__mainTitle FlexBox FlexBox--middle FlexBox--center">
            <img src="../../src/asset/top/title-main.png" alt="人と技術と教育で未来へつなぐヒューマネテック。" />
          </h1>
        </div>
        <!-- styleにbackground-imageつける -->
        <div class="Top__main" style="background-image: url(/src/asset/top/img-future.png);">
          <h1 class="Top__mainTitle FlexBox FlexBox--middle FlexBox--center">
            <img src="../../src/asset/top/title-main.png" alt="人と技術と教育で未来へつなぐヒューマネテック。" />
          </h1>
        </div>
      </div>

      <div class="Top__lead fadein">
        <div class="Top__leadWrapper FlexBox FlexBox--center FlexBox--middle">
          <div class="Top__leadLogo"><img src="../../src/asset/top/logo.png" alt="Human education Technology" /></div>
          <div>
            <h2 class="Top__leadTitle"><img src="../../src/asset/top/title-lead.png" alt="世界に羽ばたく未来のヒューマネテックエンジニア" /></h2>
            <p class="Top__leadText">
              ヒューマネテックはIT人材、基盤、システム、という３つのソリューションを提供しております。<br/>
              「ITは人」をモットーに、エンジニアにはコミュニケーションスキルも含めた人材教育に力を注ぎ、サービスの品質向上を図っています。<br/>
              人と技術と教育で未来へつなぎIT業界の発展の一助を担うことを目指している企業です。
            </p>
            <div class="Button">
              <a class="button button--white button--bold" href="solution/">MORE</a>
            </div>
          </div>
        </div>
      </div>
      <div class="Top__job fadein">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <div class="Top__jobTitle"><img src="../../src/asset/top/title-job.png" alt="Humanetechならエンジニアとして更なる高みを目指せる。ハイレベルなクライアントの元で活躍できる。" /></div>
          <p class="Top__jobText">
            職種はインフラ50%、開発30%。日系大手企業含め、派遣先からの直案件が90%以上。<br/>
            IT専門の派遣会社だからこそできるハイレベルで密度の濃い仕事をご提供できます。
          </p>
          <div class="Top__jobLogoWrapper FlexBox FlexBox--center">
            <div class="Top__jobLogo"><img src="../../src/asset/top/img-log.png" alt="ロゴマーク" /></div>
            <div class="Top__jobLogo"><img src="../../src/asset/top/img-log.png" alt="ロゴマーク" /></div>
            <div class="Top__jobLogo"><img src="../../src/asset/top/img-log.png" alt="ロゴマーク" /></div>
            <div class="Top__jobLogo"><img src="../../src/asset/top/img-log.png" alt="ロゴマーク" /></div>
            <div class="Top__jobLogo"><img src="../../src/asset/top/img-log.png" alt="ロゴマーク" /></div>
          </div>
          <div class="Button">
            <a class="button button--gray" href="job/">お仕事を探す</a>
          </div>
        </div>
      </div>

      <div class="Top__engineer">
        <div class="Top__engineerWrapper FlexBox FlexBox--right">
          <div class="Top__engineerInfo">
            <h3 class="Top__engineerTitle"><img src="../../src/asset/top/title-pride.png"
                alt="ENGINEER PRIDE スペシャリストの誇りを胸に働く。" /></h3>
            <p class="Top__engineerInfoTitle">エンジニア派遣</p>
            <div class="Top__engineerImage Top__engineerImage--sp"><img src="../../src/asset/top/img-pride.png" alt="来社不要 WEBでカンタンに派遣登録ができる！" /></div>
            <div class="Top__engineerCard FlexBox FlexBox--column FlexBox--middle">
              <div><img src="../../src/asset/top/ico-gear.png" /></div>
              <div class="Top__engineerCardTitle">エンジニア派遣登録</div>
              <div><img src="../../src/asset/top/line-blue.png" /></div>
              <div class="Top__engineerCardText">
                IT専門の人材派遣会社だからこそ、スペシャリストとして働ける環境を整備。他社をリードする優れた教育制度と、経験豊富なキャリアコンサルタントがエンジニアの適正とお仕事を精度高くマッチできることが、私たちの強みです。
              </div>
              <div class="Button">
                <a class="button button--gray button--bold" href="engineer_dispatch/">MORE</a>
              </div>
            </div>
          </div>
          <div class="Top__engineerImage"><img src="../../src/asset/top/img-pride.png" alt="来社不要 WEBでカンタンに派遣登録ができる！" /></div>
        </div>
      </div>

      <div class="Top__engineerList">
        <p class="Top__engineerListTitle">エンジニア派遣</p>
        <ul class="Top__engineerListItems FlexBox">
          <li class="Top__engineerListItem">
            <a href="engineer_dispatch/consulting.php" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-pride1.png" /></div>
                <p class="Top__engineerListText">キャリアコンサルティング</p>
              </div>
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="engineer_dispatch/about_dispatch.php" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-pride2.png" /></div>
                <p class="Top__engineerListText">当社の派遣について</p>
              </div>
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="engineer_dispatch/faq.php" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-pride3.png" /></div>
                <p class="Top__engineerListText">よくある質問</p>
              </div>
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="corporate/welfare.php" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-pride4.png" /></div>
                <p class="Top__engineerListText">教育制度・福利厚生</p>
              </div>
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="corporate/recruit/entry_career.php" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-pride5.png" /></div>
                <p class="Top__engineerListText">エントリー</p>
              </div>
            </a>
          </li>
      </div>

      <div class="Top__engineer Top__engineer--future">
        <div class="Top__engineerWrapper Top__engineerWrapper--future FlexBox FlexBox--right">
          <div class="Top__engineerInfo Top__engineerInfo--future">
            <h3 class="Top__engineerTitle Top__engineerTitle--future"><img src="../../src/asset/top/title-future.png"
                alt="理想を現実に。" /></h3>
            <p class="Top__engineerInfoTitle Top__engineerInfoTitle--future">未来のエンジニア採用</p>
            <div class="Top__engineerImage Top__engineerImage--sp"><img src="../../src/asset/top/img-future.png" alt="来社不要 WEBでカンタンに派遣登録ができる！" /></div>
            <div class="Top__engineerCard Top__engineerCard--future FlexBox FlexBox--column FlexBox--middle">
              <div><img src="../../src/asset/top/ico-book.png" /></div>
              <div class="Top__engineerCardTitle">エンジニア育成プログラム</div>
              <div><img src="../../src/asset/top/line-red.png" /></div>
              <div class="Top__engineerCardText">
                ヒューマネテックでは、未来のエンジニアを輩出すべく、未経験者の育成に力を入れています。居酒屋のバイトや営業職、一般事務職などの他業種からのキャリアチェンジも大歓迎です。夢や目標に向けて頑張る方をヒューマネテックは支援します。
              </div>
              <div class="Button">
                <a class="button button--gray button--bold" href="future_engineer/">MORE</a>
              </div>
            </div>
          </div>
          <div class="Top__engineerImage"><img src="../../src/asset/top/img-future.png" alt="来社不要 WEBでカンタンに派遣登録ができる！" /></div>
        </div>
      </div>

      <div class="Top__engineerList">
        <p class="Top__engineerListTitle">エンジニア育成プログラム</p>
        <ul class="Top__engineerListItems FlexBox">
          <li class="Top__engineerListItem">
            <a href="future_engineer/#scheme" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-future1.png" /></div>
                <p class="Top__engineerListText Top__engineerListText--future">育成プログラム</p>
              </div>
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="future_engineer/#program" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-future2.png" /></div>
                <p class="Top__engineerListText Top__engineerListText--future">身に付けられるスキル</p>
              </div >
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="future_engineer/" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-future3.png" /></div>
                <p class="Top__engineerListText Top__engineerListText--future">資格支援制度</p>
              </div>
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="corporate/recruit/future_engineer.php" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-future4.png" /></div>
                <p class="Top__engineerListText Top__engineerListText--future">募集要項</p>
              </div>
            </a>
          </li>
          <li class="Top__engineerListItem">
            <a href="corporate/recruit/future_engineer.php" class="Top__engineerListLink">
              <div class="FlexBox FlexBox--column FlexBox--middle">
                <div class="Top__engineerListIcon"><img src="../../src/asset/top/ico-future5.png" /></div>
                <p class="Top__engineerListText Top__engineerListText--future">エントリー</p>
              </div>
            </a>
          </li>
      </div>

      <div class="Top__info">
        <div class="Top__infoWrapper FlexBox FlexBox--center">
          <div class="Top__infoTextWrapper">
            <div><img src="../../src/asset/logo-b.png" alt="Humanetech" /></div>
            <p class="Top__infoTitle">私たちは<b>夢</b>に溢れる<b>原石</b>を探しています。</p>
            <p class="Top__infoText">
              自分の将来を真剣に考え、成長に向かって自分自身を変えようといま思っているのであれば、きっとあなたはヒューマネテックに縁があるはずです。なぜならば私たちはそんな未来の宝石を求め、支援する企業だからです。
            </p>
            <div class="Button">
              <a class="button button--bold" href="corporate/">MORE</a>
            </div>
          </div>
          <div class="Top__infoImageWrapper FlexBox">
            <div class="Top__infoImage Top__infoImage--red">
              <div class="Top__infoImageText Top__infoImageText--left">
                <div><img src="../../src/asset/text-education.png" alt="EDUCATION" /></div>
                <p>充実と安心の教育制度・福利厚生。先輩エンジニアによる定期的な勉強会やe-ラーニングによるIT講座受け放題など、充実のフォロー体制。</p>
              </div>
            </div>
            <div class="Top__infoImage Top__infoImage--navy">
              <div class="Top__infoImageText Top__infoImageText--right">
                <div><img src="../../src/asset/text-pass.png" alt="CAREER PASS" /></div>
                <p>5年後、10年後も必要とされるエンジニアでいるために、今何をすべきかを常に念頭に置いてコーチングを行います。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="Button Button--sp">
          <a class="button button--bold" href="corporate/">MORE</a>
        </div>
      </div>

      <div class="Top__solution">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <h3 class="Top__solutionTitle"><img src="../../src/asset/top/title-solution.png" alt="SOLUTION" /></h3>
          <p class="Top__solutionText">ヒューマネテックはIT人材、基盤、システム、クラウドの4つのソリューションを提供しております。</p>
        </div>
        <div class="Top__solutionItems FlexBox FlexBox--wrap">
          <div class="Top__solutionItem Top__solutionItem--human">
            <a class="Top__solutionItemLink" href="solution/">
              <div class="Top__solutionItemTexts FlexBox FlexBox--column FlexBox--middle FlexBox--center">
                <div class="Top__solutionItemIcon"><img src="../../src/asset/top/ico-human.png" /></div>
                <p class="Top__solutionItemTitle">人材ソリューション</p>
                <p class="Top__solutionItemBold">実績が証明</p> 
                <p class="Top__solutionItemText">
                  ヒューマネテックは正社員または正社員登用を前提とした有期雇用の技術者集団。<br />
                  技術部門の「人的リソースBPOサービス」としてお手伝いします。
                </p>
              </div>
            </a>
          </div>
          <div class="Top__solutionItem Top__solutionItem--base">
            <a class="Top__solutionItemLink" href="solution/base.php">
              <div class="Top__solutionItemTexts FlexBox FlexBox--column FlexBox--middle FlexBox--center">
                <div class="Top__solutionItemIcon"><img src="../../src/asset/top/ico-base.png" /></div>
                <p class="Top__solutionItemTitle">基盤ソリューション</p>
                <p class="Top__solutionItemText">
                  導入計画から運用までワンストップで対応
                </p>
              </div>
            </a>
          </div>
          <div class="Top__solutionItem Top__solutionItem--system">
            <a class="Top__solutionItemLink" href="solution/system.php">
              <div class="Top__solutionItemTexts FlexBox FlexBox--column FlexBox--middle FlexBox--center">
                <div class="Top__solutionItemIcon"><img src="../../src/asset/top/ico-system.png" /></div>
                <p class="Top__solutionItemTitle">システムソリューション</p>
                <p class="Top__solutionItemText Top__solutionItemText--2col">
                  システムの見える化、WEB情報分析、<br />
                  AWS導入までおまかせください
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="Top__news">
        <h3 class="Top__newsTitle"><img src="../../src/asset/top/title-news.png" /></h3>
        <div class="FlexBox FlexBox--center">
          <div class="Top__newsTable">
            <div class="Top__newsTableColumn">
              <div class="Top__newsTableItem">
                2019年10月2日
              </div>
              <div class="Top__newsTableItem">
                勉強会開催中
              </div>
            </div>
            <div class="Top__newsTableColumn">
              <div class="Top__newsTableItem">
                2018年4月16日
              </div>
              <div class="Top__newsTableItem">
                パソコンやスマホから面接が実施できるWeb面接を開始しました。
              </div>
            </div>
            <div class="Top__newsTableColumn">
              <div class="Top__newsTableItem">
                2017年12月28日
              </div>
              <div class="Top__newsTableItem">
                年末年始の営業について
              </div>
            </div>
            <div class="Top__newsTableColumn">
              <div class="Top__newsTableItem">
                2017年8月3日
              </div>
              <div class="Top__newsTableItem">
                8月お盆時期営業時間のご案内
              </div>
            </div>
          </div>
        </div>
        <div class="FlexBox FlexBox--center">
          <div class="Button">
            <a class="button button--bold" href="news.php">VIEW ALL</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div id="footer">
  <?php include ('component/footer.html'); ?>
  </div>
</div>
</body>
</html>
