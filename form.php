<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <title>Document</title>
</head>
<body>
  <pre>
  <?php
    var_dump($_GET);
  ?>
  </pre>
  <h1>フォームテスト</h1>
  <form action="form.php" method="get" id="form" onsubmit="return false;">
    <input type="text" name="text">
    <button type="submit" name="button-submit" value="button-submit" class="form-button">送信</button>
    <button type="submit" name="button-sort-submit" value="button-sort-submit" class="form-button">ソート用ボタン</button>
  </form>
  <script>
    $(function() {
      $('.form-button').on({
        click : function(e) {
          console.log(e);
          // e.preventDefault(); これをやると押されたsubmitボタンがわからなくなる
          $('#form').removeAttr('onsubmit'); // これをやらないとformを送信できない
          // $(this).submit(); // 最後に押されたところでsubmitする・・・ってわけでもなかった。。。
        }
      });
    });
  </script>
</body>
</html>