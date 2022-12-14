<!DOCTYPE HTML>
<head>
<?php
        $name="";
        $dob="";
        $slot="";
        $month="";
        if(isset($_POST['name']))
            $name = $_POST['name'];
        if(isset($_POST['dob']))
            $dob= $_POST['dob'];
        if(isset($_POST['slot']))
            $slot= $_POST['slot'];
        if(isset($_POST['month']))
            $month= $_POST['month'];
    ?>
<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();       
        $_SESSION["name"] = $name;

     }
  ?>  
</head>

<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        $diff= $diff->format('%y');
        if ($diff<18 || $diff>65)
        {
          echo "Sorry,You are not eligible"; 
        }
        else{
        ?>
            <h3 > Booking Confirmation for the month of <u> <?php echo $month ?> </u> <h3>
            <table>
            <tr>
            <td> UserName : <i> <u> <?php echo $name ?> </u> </i> </td>
        </tr>
        <tr>
            <td>Slot : <i> <u> <?php echo $slot ?> </i> </u> </td>
        </tr>
        <tr>
            <td>Fee Payment : Rs.500/- </td>
        
        </table>
        <?php
        include("dbconfig.php");
        global $sql;
        global $res;
        $sql ="INSERT INTO yoga(name,month,slot) Values('$name','$month','$slot')";
        $res = mysqli_query($db,$sql);
        if($res)
        {
           echo "Booked Successfully";
        }
        else{
            echo "Something went wrong,try again";
        }

        
        }
     }
  ?>
  