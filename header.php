<header>
  <div class="site-width">
    <h1><a href="index.php">TEST MARKET</a></h1>
    <nav id="top-nav">
      <ul>
        <!-- $_SESSION['user_id']が入っている=ログイン状態である
        表示内容の分岐 -->
        <?php
          if(empty($_SESSION['user_id'])){
        ?>
            <li><a href="signup.php" class="btn btn-primary">ユーザー登録</a></li>
            <li><a href="login.php">ログイン</a></li>
        <?php
          }else{
        ?>
            <li><a href="mypage.php">マイページ</a></li>
            <li><a href="logout.php">ログアウト</a></li>
        <?php
          }
        ?>
      </ul>
    </nav>
  </div>
</header>