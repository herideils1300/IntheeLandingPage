<?php
$injected = <<<HTML
<input type="text" value="dev" name="flag" hidden="1" />
<input type="text" hidden="1" name="origin" id="locationValue"/>
HTML;
echo($injected);
?>