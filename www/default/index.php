<?php
    require ('contact.php');
    require_once ('connection.php');
    require ('requests.php');

    // $person = new Contact(1, "Dupont", "Marcel", "0611223344");
    // $person2 = new Contact(2, "Gaber", "Khalid", "0399887766");

    // echo $person->to_string();
    // echo $person2->to_string();

    // $person->viewHtml();

    // $person->register();

    echo "Request : <br /><br />";

    $res = $conn->query($exo21);

    $data = $res->fetchAll();

    foreach ( $data as $row ) {
        for ($i = 0; $i < $res->columnCount(); $i++) 
            echo $row[$i]."\t";
        echo "<br />";
    }
?>