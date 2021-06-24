<?php
    session_start();
    $errors=array();
    $db =mysqli_connect("localhost","root","","hms");
    mysqli_select_db($db,'hms');

    if(isset($_POST['fetch']))
    {
  /*{
    $user=$_POST['user1'];
    $query="SELECT fname FROM book WHERE fname='$user'";
    $result=mysqli_query($db,$query);
    if (mysqli_num_rows($result)) {
        */

    
 
$strSQL = "SELECT * FROM book ";

// Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($db,$strSQL);


  print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>first name</td> 
  <td width=100>last name</td> 
  <td width=100>Phone number</td> 
  <td width=100>room type</td> 
  <td width=100>Check-in Date</td>
  <td width=100>Check-out Date</td>
 
  
  </tr>"; 
 while($row = mysqli_fetch_array($rs))
 { 
print "<tr>"; 
print "<td>" . $row['fname'] . "</td>"; 
print "<td>" . $row['lname'] . "</td>"; 
print "<td>" . $row['pno'] . "</td>"; 
print "<td>" . $row['rtype'] . "</td>";
print "<td>" . $row['adate'] . "</td>";
print "<td>" . $row['ddate'] . "</td>";


print "</tr>"; 
} 
print "</table>"; 

  }


 

     if(isset($_POST['Book'])){
            $fname1=$_POST['fn'];
            $lname1=$_POST['ln'];
            $pno1=$_POST['pn'];
            $rtype1=$_POST['rt'];
            $adate1=$_POST['ad'];
            $ddate1=$_POST['dd'];
            $nguests1=$_POST['ng'];
            $addi1=$_POST['add'];

            $result="INSERT INTO book(fname,lname,pno,rtype,adate,ddate,nguests,addi) VALUES('$fname1','$lname1','$pno1','$rtype1','$adate1','$ddate1','$nguests1','$addi1')";
            mysqli_query($db,$result);
            
                $query="UPDATE availability SET no=no-1 WHERE room='$rtype1'";
                mysqli_query($db,$query);

            }

           
    if (isset($_POST['avail'])) {
            $room1=$_POST['rom'];
            $query="SELECT no FROM availability WHERE room='$room1'";
            $f=mysqli_query($db,$query);
            $g=mysqli_fetch_array($f);
           

            if ($g['no']>0) {
                array_push($errors, "Room is available");
            }
            else
                array_push($errors, "Room is not available");


            
        }
    if (isset($_POST['login'])) {
        $username= $_POST['user'];
        
        $password=  $_POST['pass'];
    
         
            $password=md5($password);
            $query ="SELECT pass FROM reg WHERE name ='$username'";
            $result=mysqli_query($db,$query);
            
            if (mysqli_num_rows($result)) {
                //log user in.
                 $_SESSION['user'] = $username;
            $_SESSION['success'] = "You are now logged in";

             header('location: index.php');

            
            
            }else {
                array_push($errors, "Wrong username/password combination");
            
        
        }
        }

            


    if(isset($_POST['register'])){
        $name= $_POST['user'];
        $pnum= $_POST['phone'];
        $email= $_POST['email'];
        $password_1= $_POST['pass1'];
        $password_2= mysqli_real_escape_string($db, $_POST['pass2']);
        if(empty($name)) {
            array_push($errors, "name is required");

        }
        if(empty($pnum)) {
            array_push($errors,"Phone number is required");
        }
        if(empty($email)) {
            array_push($errors, "Email is required");
        }
        if(empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if($password_1 != $password_2) {
          array_push($errors, "Two Passwords do not match");
        }
        if(count($errors)==0){
            $password=md5($password_1); //for security
            $sql ="INSERT INTO reg(name,pnum,email,pass) 
            VALUES ('$name','$pnum','$email','#password')";
            mysqli_query($db,$sql);
            $_SESSION['user'] = $name;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
            
        }
       



    
     






        //logout
        if (isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['username']);
            header('location: login.php');
        }
    }

?>

