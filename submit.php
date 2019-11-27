<?php
    $thursday1=$_POST["ThursdayGame1"];
    $thursday2=$_POST["ThursdayGame2"];
    $thursday3=$_POST["ThursdayGame3"];
    $SG1=$_POST["SundayGame1"];
    $SG2=$_POST["SundayGame2"];
    $SG3=$_POST["SundayGame3"];
    $SG4=$_POST["SundayGame4"];
    $SG5=$_POST["SundayGame5"];
    $SG6=$_POST["SundayGame6"];
    $SG7=$_POST["SundayGame7"];
    $SG8=$_POST["SundayGame8"];
    $SG9=$_POST["SundayGame9"];
    $SG10=$_POST["SundayGame10"];
    $SG11=$_POST["SundayGame11"];
    $SG12=$_POST["SundayGame12"];
    //  $SG13=$_POST["SundayGame13"];
    //  $SG14=$_POST["SundayGame14"];
    $MG1=$_POST["MondayGame1"];
    $TIE=$_POST["Tiebreaker"];
    $Name=$_POST["Name"];
    $Mail=$_POST["Usermail"];
    $to="kbpickem@gmail.com";
    $email_from='kbpickem@gmail.com';
    $email_subject="Pick'ems for $Name";

    $email_body="Name = $Name\n
    Send Picks to = $Mail\n
    ThursdayGame1 = $thursday1\n
    ThursdayGame2 = $thursday2\n
    ThursdayGame3 = $thursday3\n
    SundayGame1 = $SG1\n
    SundayGame2 = $SG2\n
    SundayGame3 = $SG3\n
    SundayGame4 = $SG4\n
    SundayGame5 = $SG5\n
    SundayGame6 = $SG6\n
    SundayGame7 = $SG7\n
    SundayGame8 = $SG8\n
    SundayGame9 = $SG9\n
    SundayGame10 = $SG10\n
    SundayGame11 = $SG11\n
    SundayGame12 = $SG12\n
    MondayGame1 = $MG1\n
    TieBreaker = $TIE";

    
    // SundayGame13 = $SG13\n
    // SundayGame14 = $SG14\n


    mail($to,$email_subject,$email_body);

    echo "<script> location.href='sent.html'; </script>";
        exit;

?>