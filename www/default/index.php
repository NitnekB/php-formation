<?php
    require ('contact.php');

    $person = new Contact(1, "Dupont", "Marcel", "0611223344");
    $person2 = new Contact(2, "Gaber", "Khalid", "0399887766");

    echo $person->to_string();
    echo $person2->to_string();

    $person->viewHtml();

    // $person->register();
?>