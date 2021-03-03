<?php
function safety_request($string)
{
return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>