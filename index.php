<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['code'] = $_POST['code'];
}
if (isset($_SESSION['code'])) {
    $code = $_SESSION['code'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="" href="https://img.icons8.com/cotton/2x/source-code--v2.png" />
        <title>Simple Snippet</title>
        <link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            textarea{
                font-family: 'Oxanium', cursive;

            }
            button{
                color:blueviolet;
                cursor: pointer
            }
        </style>
    </head>
    <body>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <button type="submit" name="submit">RUN <i class="fa fa-play" aria-hidden="true"></i></button>
            <a href="result.php?fullscreen=1" title="Full Screen"><i class="fa fa-window-maximize" aria-hidden="true"></i></a>
            <textarea name="code" spellcheck="false" style="width: 100%" rows="18" placeholder="Type or paste your html,css,javascript code here....."><?php
                if (!isset($_SESSION['code'])) {
                    
                } else {
                    echo $code;
                }
                ?></textarea>
        </form>

        <iframe src="result.php" style="width: 100%;height: 300px"></iframe>
        
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
    </body>
</html>

