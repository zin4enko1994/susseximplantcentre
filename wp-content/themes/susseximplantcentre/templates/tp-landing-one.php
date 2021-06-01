<?php
/* Template Name: First Landing Template */
get_header();
$acf_fields = get_fields();
global $SVG; ?>

<main id="primary" role="main">
    <section class="main" id="main">
        <div class="main-slider">
            <?php foreach( $acf_fields['slider_list'] as $slide ): ?>

                <div class="slide blur-up lazyload" data-bg="<?php echo $slide['background']['sizes']['large'] ?>">
                    <div class="slide-wrap">
                        <div class="media slide-media">
                            <div class="image-before">
                                <img
                                    src="<?php echo $slide['image-before']['sizes']['thumbnail'] ?>"
                                    data-src="<?php echo $slide['image-before']['sizes']['large'] ?>"
                                    class="blur-up lazyload img"
                                    alt="<?php echo $slide['image-before']['url'] ?>" loading="lazy"
                                >
                            </div>
                            <div class="image-after">
                                <img
                                    src="<?php echo $slide['image-after']['sizes']['thumbnail'] ?>"
                                    data-src="<?php echo $slide['image-after']['sizes']['large'] ?>"
                                    class="blur-up lazyload img"
                                    alt="<?php echo $slide['image-after']['url']  ?>" loading="lazy"
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

    <section class="services">
        <div class="wrapper">
            <h2 class="section-title">Our services</h2>

            <?php if($acf_fields['services-tabs']): ?>
            <div class="accordion-wrapper">

                <?php foreach( $acf_fields['services-tabs'] as $item ): ?>
                    <div class="item">
                        <div class="name">
                            <div class="title"><?php echo $item['title'] ?></div>
                            <div class="subtitle"><?php echo $item['subtitle'] ?></div>
                        </div>
                        <div class="content">
                            <div class="image">
                                <img
                                    src="<?php echo $item['image']['sizes']['thumbnail'] ?>"
                                    data-src="<?php echo $item['image']['sizes']['large'] ?>"
                                    class="blur-up lazyload img"
                                    alt="<?php echo $item['image']['url'] ?>" loading="lazy"
                                >
                            </div>
                            <div class="text">
                                <p class="doctor"><?php echo $item['doctor'] ?> <span>performs</span> these treatments.</p>
                                <?php echo $item['content'] ?>
                                <a class="button" href="#contact">
                                    <span>Call Now To Schedule Your Free Consultation</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="tabs-wrapper">
                <div class="tabs">
                    <?php foreach( $acf_fields['services-tabs'] as $item ): ?>
                    <div class="tab blur-up lazyload" data-bg="<?php echo $item['background']['sizes']['large'] ?>">
                        <?php echo $SVG['tabs-svg'] ?>
                        <h4><?php echo $item['title'] ?></h4>
                        <div class="subtitle"><?php echo $item['subtitle'] ?></div>
                    </div>
                    <?php endforeach; ?>
                    <div class="services-author">
                        <?php foreach( $acf_fields['services-tabs'] as $item ): ?>
                            <p class="doctor"><?php echo $item['doctor'] ?> <span>performs</span> these treatments.</p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tab_content">
                    <?php foreach( $acf_fields['services-tabs'] as $item ): ?>
                    <div class="tab_item">
                        <?php if($item['image']): ?>
                        <div class="image">
                            <img
                                src="<?php echo $item['image']['sizes']['thumbnail'] ?>"
                                data-src="<?php echo $item['image']['sizes']['large'] ?>"
                                class="blur-up lazyload img"
                                alt="<?php echo $item['image']['url'] ?>" loading="lazy"
                            >
                        </div>
                        <?php endif; ?>
                        <div class="content"><?php echo $item['content'] ?></div>
                        <a class="button" href="#contact">
                            <span>Call Now To Schedule Your Free Consultation</span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if($acf_fields['faq-list']): ?>
    <section class="faq" id="faq">
        <div class="wrapper">
            <h3 class="section-title"><?php echo $acf_fields['faq-title'] ?></h3>
            <div class="faq-list">

                <?php foreach( $acf_fields['faq-list'] as $item ): ?>

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

    <section id="contact" class="contact blur-up lazyload" data-bg="<?php echo $acf_fields['contact-background']['sizes']['large'] ?>">
        <div class="wrapper">
            <h3 class="section-title"><?php echo $acf_fields['contact-title'] ?></h3>
            <span class="section-subtitle"><?php echo $acf_fields['contact-subtitle'] ?></span>
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

    <section class="doctor-info">
        <div class="wrapper">
            <div class="image">
                <img
                    src="<?php echo $acf_fields['doctor-photo']['sizes']['thumbnail'] ?>"
                    data-src="<?php echo $acf_fields['doctor-photo']['sizes']['large'] ?>"
                    class="blur-up lazyload img"
                    alt="<?php echo $acf_fields['doctor-photo']['url'] ?>" loading="lazy"
                >
            </div>
            <div class="text">
                <h4><?php echo $acf_fields['doctor-name'] ?></h4>
                <?php echo $acf_fields['doctor-text'] ?>
                <div class="direction"><?php echo $acf_fields['doctor-direction'] ?></div>
            </div>
        </div>
    </section>

    <section class="before-after" id="before-after">
        <div class="wrapper">
            <h3 class="section-title"><?php echo $acf_fields['before-after_title'] ?></h3>
            <div class="before-slider">
                <?php foreach( $acf_fields['before-after_slider'] as $slide ): ?>
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
                <div class="text"><?php echo $acf_fields['before-after_text'] ?></div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
