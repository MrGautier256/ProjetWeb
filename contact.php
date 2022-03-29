<?php
$mailto = 'virtualinternship.cesi@gmail.com';
$subject = 'the subject';
$message = 'the message';
$from = '';
$header = 'From:' . $from;

if (mail($mailto, $subject, $message, $header)) {
    echo 'Email on the way';
} else echo "false";
