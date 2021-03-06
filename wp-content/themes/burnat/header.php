<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>KSENIA BURNAT - ESCULTORA CERAMISTA</title>
        <meta name="description" content="Ksenia Burnat - Escultora Ceramista">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <!-- Latest compiled and minified JavaScript -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/style/index.css">
    </head>

    <body>
        <header>
            <h1 class="title">Ksenia Burnat</h1>
            <h2 class="sub_title">Escultora Ceramista</h2>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/artiste.jpg" alt="image artiste" class="little-image"></div>

            <nav class="nav_bar">
                <ul>
                    <li>
                        <a href="#biografia" id="link-biografia">Biografia</a>
                    </li>
                    <li>
                        <a href="#" id="link-galeria" class="active">Galeria</a>
                    </li>
                </ul>
            </nav>


            <div class="container_footer">
                <p class="contact"><img class="picto_mail" src="<?php echo get_template_directory_uri(); ?>/assets/images/message.svg">ksenia.burnat@gmail.com</p>

                <div class="languages">
                    <?php $languages =  icl_get_languages('skip_missing=0');
                    $nb = 0;
                    foreach($languages as $lang): ?>
                        <a class="element noajax no-ajax <?php if(ICL_LANGUAGE_CODE == $lang['code']) echo 'active'; ?>" href='<?php echo $lang['url'] ?>'>
                            <img src="<?php echo $lang['country_flag_url']; ?>">
                        </a>
                        <?php $nb++;
                    endforeach; ?>
                </div>
                <div class="credits">
                    <p>
                        Crédits : Léa Vignaud
                    </p>
                </div>
            </div>
        </header>
