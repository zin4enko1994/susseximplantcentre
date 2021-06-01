<?php
/* Template Name: Home Template */
get_header();
$home_fields = get_fields();
global $SVG; ?>

<main id="primary" role="main">
    <section class="main" id="main">
        <div class="main-slider">
            <?php foreach( $home_fields['slider_list'] as $slide ): ?>

                <div class="slide blur-up lazyload" data-bg="<?php echo $slide['background']['sizes']['large'] ?>">
                    <div class="slide-wrap">
                        <div class="media">
                            <div class="image">
                                <img
                                        src="<?php echo $slide['image']['sizes']['thumbnail'] ?>"
                                        data-src="<?php echo $slide['image']['sizes']['large'] ?>"
                                        class="blur-up lazyload img"
                                        alt="<?php echo $slide['title'] ?>" loading="lazy"
                                >
                            </div>
                        </div>
                        <div class="text">
                            <h2 class="title"><?php echo $slide['title'] ?></h2>
                            <div class="subtitle"><?php echo $slide['subtitle'] ?></div>
                            <a class="button" href="#contact"><span>Book Your Free Appointment Today</span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="about" id="about">
       <div class="item">
           <div class="image">
               <img
                   src="<?php echo $home_fields['about_image-one']['sizes']['thumbnail'] ?>"
                   data-src="<?php echo $home_fields['about_image-one']['sizes']['large'] ?>"
                   class="blur-up lazyload img"
                   alt="<?php echo $home_fields['about_image-one']['url'] ?>" loading="lazy"
               >
           </div>
           <div class="text"><?php echo $home_fields['about_text-one'] ?></div>
       </div>
        <div class="item">
            <div class="image">
                <img
                        src="<?php echo $home_fields['about_image-two']['sizes']['thumbnail'] ?>"
                        data-src="<?php echo $home_fields['about_image-two']['sizes']['large'] ?>"
                        class="blur-up lazyload img"
                        alt="<?php echo $home_fields['about_image-two']['url'] ?>" loading="lazy"
                >
            </div>
            <div class="text">
                <?php echo $home_fields['about_text-two'] ?>
                <a class="button" href="#contact">
                    <span>Call Now To Schedule Your Free Consultation</span>
                </a>
            </div>

        </div>
    </section>
    <section class="info">
        <div class="wrapper">
            <h3 class="section-title"><?php echo $home_fields['info_title'] ?></h3>
            <span class="section-subtitle"><?php echo $home_fields['info_subtitle'] ?></span>
            <div class="info-list">
                <?php foreach( $home_fields['info_list'] as $item ): ?>
                    <div class="item">
                       <div class="image">
                           <img
                               src="<?php echo $item['image']['sizes']['thumbnail'] ?>"
                               data-src="<?php echo $item['image']['sizes']['large'] ?>"
                               class="blur-up lazyload img"
                               alt="<?php echo $item['image']['url'] ?>" loading="lazy"
                           >
                       </div>
                        <div class="text"><?php echo $item['text'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="before-after" id="before-after">
        <div class="wrapper">
            <h3 class="section-title"><?php echo $home_fields['before-after_title'] ?></h3>
            <div class="before-slider">
                <?php foreach( $home_fields['before-after_slider'] as $slide ): ?>
                    <div class="slide">
                        <div class="slide-wrap">
                            <div class="media">
                                <div class="before">
                                    <img
                                        src="<?php echo $slide['before_image']['sizes']['thumbnail'] ?>"
                                        data-src="<?php echo $slide['before_image']['sizes']['large'] ?>"
                                        class="blur-up lazyload img"
                                        alt="<?php echo $slide['name'] ?>" loading="lazy"
                                    >
                                </div>
                                <div class="after">
                                    <img
                                        src="<?php echo $slide['after_image']['sizes']['thumbnail'] ?>"
                                        data-src="<?php echo $slide['after_image']['sizes']['large'] ?>"
                                        class="blur-up lazyload img"
                                        alt="<?php echo $slide['name'] ?>" loading="lazy"
                                    >
                                </div>
                            </div>
                            <div class="text">
                                <div class="name"><?php echo $slide['name'] ?></div>
                                <p><?php echo $slide['text'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="other">
                <a class="button" href="#contact"><span>Call Now To Schedule Your Free Consultation</span></a>
                <div class="text"><?php echo $home_fields['before-after_text'] ?></div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact blur-up lazyload" data-bg="<?php echo $home_fields['contact-background']['sizes']['large'] ?>">
        <div class="wrapper">
            <h3 class="section-title"><?php echo $home_fields['contact-title'] ?></h3>
            <span class="section-subtitle"><?php echo $home_fields['contact-subtitle'] ?></span>
            <form action="" id="contact_form">
                <div class="input-wrapper input-field">
                    <input required type="text" placeholder="Name" id="name" name="name">
                </div>
                <div class="input-wrapper input-field">
                    <input required type="email" placeholder="Email" id="email" name="email">
                </div>
                <div class="input-wrapper input-field">
                    <input required type="tel" placeholder="Phone" id="phone" name="phone">
                </div>
                <div class="input-wrapper">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Additional Message"></textarea>
                </div>
                <div class="input-wrapper">
                    <input type="hidden" name="action" value="contactForm">
                    <button type="submit" class="button"><span>Book Your Free Consultation</span></button>
                </div>
            </form>
            <div class="thank-you">
                <h2>Thank you!</h2>
                <span>Your message has been sent</span>
            </div>
        </div>
    </section>
    <?php if($home_fields['faq-list']): ?>
    <section class="faq" id="faq">
        <div class="wrapper">
            <h3 class="section-title"><?php echo $home_fields['faq-title'] ?></h3>
            <div class="faq-list">

                <?php foreach( $home_fields['faq-list'] as $item ): ?>

                    <div class="item">
                        <div class="icon">
                            <img
                                    src="<?php echo $item['icon']['sizes']['thumbnail'] ?>"
                                    data-src="<?php echo $item['icon']['sizes']['large'] ?>"
                                    class="blur-up lazyload img"
                                    alt="<?php echo $item['icon']['url'] ?>" loading="lazy"
                            >
                        </div>
                        <div class="text"><?php echo $item['text'] ?></div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
