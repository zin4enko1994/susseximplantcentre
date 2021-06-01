<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo() ?><?php wp_title(); ?></title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#000000">
    <!-- Favicon End -->

    <?php wp_head(); ?>
</head>
<?php
global $SVG;
?>
<body <?php body_class(); ?> >
<header id="header" class="header" >

    <div class="wrapper">

        <a class="logo" href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/dist/images/logo.png"
                 data-src="<?php echo get_template_directory_uri() ?>/dist/images/logo.png"
                 class="blur-up lazyload img"
                 alt="Logo"
                 loading="lazy"
            >
        </a>

        <nav class="navigation">
            <ul class="menu">
                <li>
                    <a href="#main">Main</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#testimonial">Testimonial</a>
                </li>
                <li>
                    <a href="#before-after">Before/After</a>
                </li>
                <li>
                    <a href="#faq">FAQ</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <div class="call">
                <?php echo $SVG['phone-icon'] ?>
                <div class="number">
                    <span>01273 698045</span>
                    <a href="#">Request a call</a>
                </div>
            </div>
        </nav>

        <div class="burger">
            <div class="liner">
                <svg class="ham" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                    <path
                            class="line top"
                            d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                    <path
                            class="line middle"
                            d="m 30,50 h 40" />
                    <path
                            class="line bottom"
                            d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                </svg>
            </div>
        </div>

    </div>

</header>
