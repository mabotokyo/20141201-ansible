<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <table>
    <tr>
      <th>接続元アドレス(REMOTE_ADDR)</th>
      <td><?php echo $_SERVER['REMOTE_ADDR'] ?></td>
    </tr>
    <tr>
      <th>接続元のアドレス(X-FORWARDED-FOR)</th>
      <td><?php echo $_SERVER['HTTP_X_FORWARDED_FOR'] ?></td>
    </tr>
    <tr>
      <th>Webサーバのアドレス(SERVER_ADDR)</th>
      <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
    </tr>
  </table>

  <h3>$_SERVER</h3>
  <pre><?php var_dump($_SERVER); ?></pre>

</body>
</html>


