<?php
include 'header.html';
?>

<h2>Thanks, sucker!</h2>
<dt>Your information has been recorded.</dt>

<dl>
    <dt>Name</dt>
    <dd>
        <?= $_REQUEST['name']?>
    </dd>

    <dt>Section</dt>
    <dd>
        <?= $_REQUEST['section']?>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <?= $_REQUEST['credit_card']?> (<?= $_REQUEST['type_credit']?>)
    </dd>

    <p>
        Here are the all suckers who have submitted here
    </p>

    <?php
        $details = $_REQUEST['name'] . "; " . $_REQUEST['section'] . "; " . $_REQUEST['credit_card'] . "; " . $_REQUEST['type_credit'] . ".";
        $file_content = file_get_contents("sucker.txt");
        echo $file_content;
        $file_content .= $details;
        file_put_contents("sucker.txt", $file_content);
    ?>
</dl>

