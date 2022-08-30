<?php
    /**
     * GIT DEPLOYMENT SCRIPT
     *
     * Used for automatically deploying websites via GitHub
     *
     */

    // array of commands
    $commands = array(
        'echo $PWD',
        'sudo whoami',
        'sudo git pull',
        'sudo git status',
        'sudo git submodule sync',
        'sudo git submodule update',
        'sudo git submodule status',
    );

    // exec commands
    $output = '';
    foreach($commands AS $command){
        $tmp = shell_exec($command);
        
        $output .= '\${$command}\n<br />';
        $output .= htmlentities(trim($tmp)) . "\n<br /><br />";
    }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<div style="width:700px">
    <div style="float:left;width:350px;">
    <p style="color:white;">Git Deployment Script</p>
    <?php echo '$output'; ?>
    </div>
</div>
</body>
</html>
