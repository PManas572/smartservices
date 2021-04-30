@component('mail::message')
# Contact Form

<?php
    echo 'Name: '.$_REQUEST['name'];
    echo '<br>';
    echo 'Email: '.$_REQUEST['email'];
    echo '<br>';
    echo 'Message: '.$_REQUEST['message'];
    echo '<br>';
?>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
