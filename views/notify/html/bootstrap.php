<?php defined('SYSPATH') or die('No direct script access.');
foreach ($renderer->get_messages() as $msg_type => $msgs_of_type):
    $class = '';
    if (in_array($msg_type, ['success', 'warning', 'info', 'error'])):
        $class = ' alert-' . $msg_type;
    endif;
    ?>
<div class="alert alert-block fade in <?=$class ?>">
    <a class="close" href="#" data-dismiss="alert">×</a>
    <?=count($msgs_of_type) ? implode("<br />\n", $msgs_of_type) : $msgs_of_type?>
</div>
<? endforeach ?>
