 <!-- ***************************************************************************************
    Author     : Sarika Fils-Aime 
    Course     : CGS4854 
    URL        : ocelot.aul.fiu.edu/~sfils006
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 { Program 3 } 

    Due Date   : 10/27/2022 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Sarika Fils-Aime }..........

  **************************************************************************************** -->
<!DOCTYPE html>

<html>

  <body>
       <!--h3>This is Delete.php</h3-->
             
                  
    <?php
                   
       $record = "RECORD ". $Cell." DELETED";
         
       $found = $_POST['found']; 
       //echo "delete  found = [" . $found . "]<br>";
        
       // sql to delete a record
       $sql="DELETE FROM customers WHERE Cell='$Cell'";
         
       $Telephone=trim($Cell);
          
       //     if(strlen($Cell)>0)           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Cell) )
       { 
                      
          if (mysqli_query($connection, $sql)) 
          {
             //echo "Record deleted successfully found = {".$found."}";
             $message ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
             $found=""; 
          }         
          else 
          {
             $message = "Error deleting record: " . mysqli_error($connection); 
          }
          
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $Cell CAN NOT BE DELETED, IT DOES NOT EXISTS</span><br\>";
       } 
       
    ?>  
  </body>
<html>
