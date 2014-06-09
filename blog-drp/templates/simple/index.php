<!DOCTYPE html>
<html class="no-js pointer" lang="en">
    <head>

        <meta charset="utf-8">
        <!-- Forked snipets from David Bushell's Off-Canvas Nav | http://dbushell.com/ -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title><?php echo($page_title); ?></title>

        
        
        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:900,600,400,200|Merriweather:400,300,200,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
        
        <?php get_header(); ?>
    </head>

    <body>

        <?php if($is_home) { ?>
        <article>
            <div class="row">
                
                <!--<div class="one-quarter meta">
                    <ul>
                        <li><?php echo($blog_title); ?></li>
                        <li><a href="mailto:<?php echo($blog_email); ?>?subject=Hello"><?php echo($blog_email); ?></a></li>
                        <li><a href="http://twitter.com/<?php echo($blog_twitter); ?>">&#64;<?php echo($blog_twitter); ?></a></li>
                        <li></li>
                    </ul>
                </div>-->
        
                <div class="column-8 post">
                    <h2><?php echo($intro_title); ?></h2>
        
                    <p><?php echo($intro_text); ?></p>
        
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
        </article>
        <?php } ?>
        
        <?php echo($content); ?>
        
        <?php get_footer(); ?>
    </body>
</html>
