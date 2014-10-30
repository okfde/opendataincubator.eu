<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "borko_petkov@abv.bg";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

# RESULT PAGE
$location = "enter the URL of the result page here";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
# SEE ALSO: How to protect a php Email Form using php mail or mb_send_mail against Mail Header Injection
$sender = $recipient;

# MAIL BODY
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>