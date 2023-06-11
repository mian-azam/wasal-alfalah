<?php
    if(Isset($_POST['submit'])){
        $name= $_POST['usrname'];
        $email= $_POST['usremail'];
        $country= $_POST['usrcountry'];
        $phone= $_POST['usrphone'];
        $pob= $_POST['pob'];
        $nv= $_POST['nv'];
        $sd= $_POST['sd'];
        $no= $_POST['no'];
        $ba= $_POST['ba'];
        $details= $_POST['usrdetails'];
        $details= $_POST['usrdetails'];

        $to= 'hanzilaassignments@gmail.com';
        $subject= 'Form Submission';
        $message= "Name" .$name."\n";
        $header= "Form: ".$email;


        if(mail($to,$subject,$message,$header)){
            echo "<h1>Sent Successfully"
        }
        else{
            echo "Something went wrong"
        }
    }

?>