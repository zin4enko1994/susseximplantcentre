<?php
global $SVG;
$option = get_fields('option');
?>
<footer id="footer" class="footer">
    <div class="wrapper">
        <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/dist/images/logo.png"
                     data-src="<?php echo get_template_directory_uri() ?>/dist/images/logo.png"
                     class="blur-up lazyload img"
                     alt="Logo"
                     loading="lazy"
                >
            </a>
        </div>
        <div class="contact-info">

            <?php if($option['hours_list']): ?>
            <ul>
                <h4>Opening Timings</h4>
                <?php foreach( $option['hours_list'] as $item ): ?>
                    <li><span><?php echo $item['day'] ?>:</span> <?php echo $item['hours'] ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <ul class="information">
                <h4>Contact information:</h4>
                <?php if($option['address']): ?>
                    <li>
                        <?php echo $SVG['point'] ?>
                        <span>Address:</span> <?php echo $option['address_2'] ?>
                    </li>
                <?php endif; ?>
                <?php if($option['address_2']): ?>
                    <li>
                        <?php echo $SVG['point'] ?>
                        <span>Address:</span> <?php echo $option['address_2'] ?>
                    </li>
                <?php endif; ?>
                <?php if($option['telephone']): ?>
                    <li>
                        <?php echo $SVG['phone'] ?>
                        <span>Telephone:</span>
                        <a href="tel:<?php echo $option['telephone'] ?>"><?php echo $option['telephone'] ?></a>
                    </li>
                <?php endif; ?>
                <?php if($option['telephone_2']): ?>
                    <li>
                        <?php echo $SVG['phone'] ?>
                        <span>Telephone:</span>
                        <a href="tel:<?php echo $option['telephone_2'] ?>"><?php echo $option['telephone_2'] ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="copyright">
        The <a href="#">Dental Practice</a>. Copyright <?php echo date('Y') ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
