<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bulma.min.css">
</head>
<body>
<div class="container">
    <section>
        <h1 class="title">cat1 container</h1>
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
    </section>
</div>
</body>
</html>
