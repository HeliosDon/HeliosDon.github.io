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
    <!--h3>This is Modify.php</h3-->
        
    <?php
        
       $found = $_POST['found'];          
           
       if (  ( strlen(trim($found)) > 0 ) && ($found == $Cell) )
       {               
                  
          $query = "UPDATE customers 
                    SET Name        = '$Name',
                        Pronouns    = 'Pronouns',
                        Instagram   = '$Instagram',
                        Email       = '$Email',
                        City        = '$City',
                        State       = '$State',
                        Birthday    = '$Birthday',
                        Favorites   = '$Favorites',
                        Preference  = '$Preference',
                        Gender      = '$Gender',
                        Books       = '$Books',
                        Shows       = '$Shows',
                        Games       = '$Games',
                        Movies      = '$Movies',
                        Comments    = '$Comments'  
                                 
                   WHERE Cell = '$Cell'";
                       
          $sql = mysqli_query( $connection,$query );
                                              
          if ($sql)
          {
             $message ="<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";
          }   
          else
          {
             //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);
             $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
          }
             
       }   
       else
       {
          $message ="<span style=\"color: red;\">RECORD $Cell CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
       }
           
    ?>
  </body>
</html>
