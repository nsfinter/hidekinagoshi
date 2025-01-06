<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HidekiNagoshi</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- WordPressの管理バーを下に移動させるコード -->
    <?php if( is_user_logged_in() ) : ?>
        <style type="text/css">
        html {
            margin: 0 0 32px!important;
        }
        #wpadminbar {
            position: fixed!important;
            top: unset!important;
            bottom: 0;
        }
        </style>
    <?php endif; ?>

    <header class="header">
        <div id="header-nav" class="header-nav">
            <div class="site-id-wrapper">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-id">
                    <span><img class="site-id-name" src="<?php echo get_stylesheet_directory_uri(); ?>/img/site-id-name.svg" alt="Hideki Nagoshi" class="site-id-img"></span>
                    <span><img class="site-id-role" src="<?php echo get_stylesheet_directory_uri(); ?>/img/site-id-role.svg" alt="Web Enginer" class="site-id-img"></span>
                </a>
            </div>
        </div>
        <ul class="sns-list">
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
        </ul>
        <nav id="gnav" class="gnav">
            <ul class="gnav-list">
                <li><a href="">Home</a></li>
                <li><a href="">Profile</a></li>
                <li><a href="">Works</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <button id="btn-nav" class="btn-nav">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>
    
    <main class="main">
        <div>
            <h1>これはテストです。これはテストだよ。</h1>
        </div>
    </main>

    <footer class="footer">
        <div class="inner">

            <small class="copyright">© Hideki Nagoshi</small>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>