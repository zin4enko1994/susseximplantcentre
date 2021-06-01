<?php
// Contact Form
add_action('wp_ajax_contactForm', 'contactForm');
add_action('wp_ajax_nopriv_contactForm', 'contactForm');
function contactForm() {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $messageText = $_POST['message'];

    $headers = 'From: Sussex Implant Centre <login@example.com>'."\r\n" . 'Content-Type: text/html; charset=UTF-8';
    $subj = "Message from the contact form";
    $message = prepare_html( $name, $phone, $mail, $messageText);

    $send = mail("zin4enko.dev@mail.com", $subj, $message, $headers);

    if ( $send ) {
        echo json_encode( array(
            'response' 	=> 200,
            'mail'   	=> $message
        ) );
    }
    else{
        echo json_encode( array(
            'response' 	=> 400,
            'send' => $send
        ) );
    }

    wp_die();
}

function prepare_html( $name, $phone, $mail, $messageText){
    ob_start();

    ?>

    <p>Name: <?= $name ?> </p>
    <p>Phone: <?= $phone ?></p>
    <p>Email: <?= $mail ?></p>

    <?php
        if($messageText) {
            ?>
            <p>Message: <?= $messageText ?></p>
            <?php
        }
    ?>

    <?php
    return ob_get_clean();
}
