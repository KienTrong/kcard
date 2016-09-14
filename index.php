<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div id="page" class="site">
    <div class="user-box">
        <div class="user-avatar">
            <img src="<?php echo get_avatar_url( '1', array( 'size' => '180' ) ); ?>" alt="" />
        </div>
        <div class="user-name">
            <h1>Hi, I'm Kien Trong</h1>
        </div>
        <div class="user-bio">
            Father, Husband, Designer, WordPress lover and founder of numerous brands including <a href="https://www.famethemes.com">FameThemes</a>.
        </div>
        <div class="user-social">
            <a href="https://twitter.com/kientrong89"><i aria-hidden="true" class="fa fa-twitter"></i></a>
            <a href="https://facebook.com/kien.81089"><i aria-hidden="true" class="fa fa-facebook-official"></i></a>
            <a href="https://github.com/KienTrong"><i aria-hidden="true" class="fa fa-github"></i></a>
            <a href="mailto:<?php echo antispambot( 'kienpc81089@gmail.com' ); ?>"><i aria-hidden="true" class="fa fa-envelope"></i></a>
        </div>
        <div class="credits">
            <p>Image by <a href="https://unsplash.com/photos/UjAHjamxDjU">Alex Read</a> &mdash; vCard style inspired by <a href="http://carrd.co/">carrd.co</a> &mdash; Icons by <a href="http://fontawesome.io">Font Awesome</a>.
        </div>
    </div>

</div>


<?php wp_footer(); ?>
</body>
</html>
