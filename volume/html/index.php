<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>php container</h1>
<div>
    <dl>
        <dt>http x forwarded for</dt>
        <dd><?php echo $_SERVER['HTTP_X_FORWARDED_FOR']; ?></dd>
        <dt>remote ip addr</dt>
        <dd><?php echo $_SERVER['REMOTE_ADDR']; ?></dd>
        <dt>server addr</dt>
        <dd><?php echo $_SERVER['SERVER_ADDR']; ?></dd>
    </dl>
</div>
</body>
</html>
