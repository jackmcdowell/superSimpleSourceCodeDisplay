<!DOCTYPE html>
<html>
<head>
    <title>PHP Source Code Display</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <a href="#source-code" id="view-source">View Source</a>

    <div id="source-code">
        <a href="#" id="x"><img alt="close" src="x.png"></a><br>
        <?php show_source(__FILE__); ?>
    </div>
</body>
</html>