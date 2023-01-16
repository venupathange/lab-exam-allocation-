<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "project");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $sub_code =  $_REQUEST['sub_code'];
        $sub_name = $_REQUEST['sub_name'];
       
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO subject_code  VALUES ('$sub_code',
            '$sub_name')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data is stored in subject_code database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$sub_code\n $sub_name\n ");
            
                header("location:subject_info.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>