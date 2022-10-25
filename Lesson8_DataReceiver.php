<!DOCTYPE html>
<head>
    <title>Form Data Received</title>
</head>
<body>
    
 
    <?php 
       /* ---USING GET INTO ANOTHER FORM---
        $firstname = $_GET['txtFirstname'];
        $lastname = $_GET['txtLastname'];
        $sex = $_GET['radSex'];

        if($sex == 'Male')
        echo "Hello!, Sir $firstname $lastname";
        else
        echo "Hello!, Mam $firstname $lastname";
        */


         /* ---USING POST INTO ANOTHER FORM---
        $firstname = $_POST['txtFirstname'];
        $lastname = $_POST['txtLastname'];
        $sex = $_POST['radSex'];

        if($sex == 'Male')
        echo "Hello!, Sir $firstname $lastname";
        else
        echo "Hello!, Mam $firstname $lastname";
        */

        /* ---We can use this if we use GET or POST---
        $firstname = $_REQUEST['txtFirstname'];
        $lastname = $_REQUEST['txtLastname'];
        $sex = $_REQUEST['radSex'];

        if($sex == 'Male')
        echo "Hello!, Sir $firstname $lastname";
        else
        echo "Hello!, Mam $firstname $lastname";
        */
    ?>

</body>
</html>
