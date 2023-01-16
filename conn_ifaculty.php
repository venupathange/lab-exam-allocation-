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
        $i_tsn =  $_REQUEST['i_tsn'];
        $name = $_REQUEST['name'];
        $c_no =  $_REQUEST['c_no'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO i_faculty  VALUES ('$i_tsn',
            '$name','$c_no')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data is stored in i_faculty database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$i_tsn\n $name\n "
                . "$c_no");
                header("location:ifaculty_info.php");
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