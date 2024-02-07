<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/styles/github.min.css">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">

    <title>ポートフォリオ</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">ポートフォリオ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav me-auto mb-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">自己紹介</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">作品紹介</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">お問合せ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="container">
        <h1>自己紹介</h1>
        <p class="lead">こんにちは！私についてご紹介します。</p>
        <table class="table table-bordered">
          <thead class="table-light">
            <tr><th colspan="2">基本プロフィール</th></tr>
          </thead>
          <tbody>
            <tr><td><p class="font-weight-bold">氏名</p></td><td>山田　太郎</td></tr>
            <tr><td><p class="font-weight-bold">生年月日</p></td><td>2002年1月1日</td></tr>
            <tr><td><p class="font-weight-bold">年齢</p></td><td>20才</td></tr>
            <tr><td><p class="font-weight-bold">大学（学部・学科）</p></td><td>サンプル大学（サンプル学部サンプル学科）</td></tr>
            <tr><td><p class="font-weight-bold">卒業予定</p></td><td>2024年3月</td></tr>
            <tr><td><p class="font-weight-bold">自己ＰＲ</p></td><td>小学生の時からサッカーを続けています。根気強さや協調性には自信があります。</td></tr>
          </tbody>
        </table>
        <table class="table table-bordered">
          <thead class="table-light">
            <tr><th colspan="2">IT系学習履歴</th></tr>
          </thead>
          <tbody>
            <tr><td><p class="font-weight-bold">資格</p></td><td>ITパスポート（2022年12月合格）<br />基本情報技術者（勉強中）</td></tr>
            <tr><td><p class="font-weight-bold">プログラミング</p></td><td>HTML/CSS：2カ月<br />PHP：1カ月</td></tr>
            <tr><td><p class="font-weight-bold">インフラ</p></td><td>AWS・EC2でLinux環境を構築中</td></tr>
          </tbody>
        </table>
      </div>

      <div class="btn" onclick="scrollToTop()"></div>
    </main>
    <footer class="footer fixed-bottom text-center py-3">
      <div class="container">
        <span class="text-muted">&copy; 2022 Taro Yamada </span>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
