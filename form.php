<?php

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$oguulber = "Variables can store data of different types, and different data types can do different things.";










// $formiin_medeelel = $_POST;
// $email_hayag = $formiin_medeelel['email'];

// print_r(   $email_hayag    );
// echo "<hr>";
// print_r( $formiin_medeelel );

// [
//     'email' => 'apprenticemn@gmail.com'
//     'name' => 'Zerleg Design'
//     'message' => 'lkadsjf lajdf lkajf kl'
// ];

?>

<!--
<h1>
    <?php
        echo $oguulber;
    ?>
</h1>
-->

<!--
https://getbootstrap.com/docs/5.0/components/badge/#example
-->
<h1>
    <?php echo $name; ?> 
    ( <span class="badge bg-secondary"><?php echo $email; ?></span> )
</h1>
<p><?php echo $message; ?></p>