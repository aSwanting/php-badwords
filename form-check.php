<?php
$user_text = $_POST['user_text'];
$censored_word = $_POST['censored_word'];
$censored_text = str_replace($censored_word, "***", $user_text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Original Text</h3>
    <p><?php echo $user_text; ?></p>   
    <p>Length: <?php echo strlen($user_text); ?></p>

    <h3>Censored Text</h3>
    <p><?php echo $censored_text; ?></p>
    <p>Length: <?php echo strlen($censored_text); ?></p>

</body>
</html>