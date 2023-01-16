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
        $usn =  $_REQUEST['usn'];
        $sname = $_REQUEST['sname'];
        $sem =  $_REQUEST['sem'];
        $branch = $_REQUEST['branch'];
        $scheme = $_REQUEST['scheme'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO studentdetails  VALUES ('$usn',
            '$sname','$sem','$branch','$scheme')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data is stored in studentdetails database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$usn\n $sname\n "
                . "$sem\n $branch\n $scheme");
                header("location:student_info.php");
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