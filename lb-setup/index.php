<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <table>
    <tr>
      <th>接続元アドレス(REMOTE_ADDR)</th>
    <td><?php echo h($_SERVER['REMOTE_ADDR']) ?></td>
    </tr>
    <tr>
      <th>接続元のアドレス(X-FORWARDED-FOR)</th>
    <td><?php echo h($_SERVER['HTTP_X_FORWARDED_FOR']) ?></td>
    </tr>
    <tr>
      <th>Webサーバのアドレス(SERVER_ADDR)</th>
      <td><?php echo h($_SERVER['SERVER_ADDR']) ?></td>
    </tr>
  </table>

</body>
</html>


