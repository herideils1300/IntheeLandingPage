<?php

$message = <<<HTML
<pre>
Enabled endpoints:
       - POST - root/register/ # POST for email submission
       - GET - root/developer-numbers # GET for developer submission count
       - GET - root/gamer-numbers # GET for gamer submission count
</pre>
HTML;

die($message);
?>