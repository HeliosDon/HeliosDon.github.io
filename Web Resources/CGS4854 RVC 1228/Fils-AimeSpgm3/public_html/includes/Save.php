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
     
    <!--br><h3>This is Save.php</h3><br-->
       
     
    <?php
            
       $Cell=trim($Cell);
       if(strlen($Cell)>0)           
       {   
          $sql="INSERT INTO customers (
                  Cell,
                  Name,
                  Pronouns,
                  Instagram,
                  Email,
                  City,
                  State,
                  Birthday,
                  Favorites,
                  Preference,
                  Gender,
                  Books,
                  Shows,
                  Games,
                  Movies,
                  Comments
               )
               VALUES
               (            
                  '$Cell',
                  '$Name',
                  '$Pronouns',
                  '$Instagram',
                  '$Email',
                  '$City',
                  '$State',
                  '$Birthday',
                  '$Favorites',
                  '$Preference',
                  '$Gender',
                  '$Books',
                  '$Shows',
                  '$Games',    
                  '$Movies',  
                  '$Comments'                    
               )";
                
                  
          if (mysqli_query($connection, $sql)) 
          {
             $message ="<span style=\"color: blue;\">RECORD $Cell ADDED</span><br\>";
          } 
          else
          {
             $message ="<span style=\"color: red;\">RECORD $Cell EXISTS NOT ADDED</span><br\>";
          }
           
       }                   
       else
       {
          $message ="<span style=\"color: red;\">RECORD NOT ADDED<BR>Cell CAN NOT BE EMPTY</span><br\>";
       } 
             
    ?>
       
  </body>
</html>