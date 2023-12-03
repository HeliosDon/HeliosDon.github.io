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
    <!--h3>this is Find.php</h3-->
                        
    <?php
           
       $sql="SELECT * FROM customers where Cell = '$Cell'";
             
       if ($result=mysqli_query($connection,$sql))
       {
          //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);
          
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
                   
          //printf("Result set has %d rows.\n",$rowcount);
             
                        
          while( $row = mysqli_fetch_array( $result ) )
          {
             $Cell         = $row['Cell'];       //primary key
             $Name         = $row['Name'];       //type="text"
             $Pronouns     = $row['Pronouns'];   //type="text"
             $Instagram    = $row['Instagram'];  //type="text"
             $Email        = $row['Email'];      //type="text"
             $City         = $row['City'];       //type="text" 
             $State        = $row['State'];      //type="text"
             $Birthday     = $row['Birthday'];   //type="text"
             $Favorites    = $row['Favorites'];  //type="text"
             $Preference   = $row['Preference']; //type="dropdown"
             $Gender       = $row['Gender'];     //type="checkbox" 
             $Books        = $row['Books'];      //type="checkbox"
             $Shows        = $row['Shows'];      //type="checkbox"
             $Games        = $row['Games'];      //type="checkbox"
             $Movies       = $row['Movies'];     //type="checkbox"
             $Comments     = $row['Comments'];   //type="textarea"          
          }

          $Cell=trim($Cell);

          if ( $rowcount )
          {
             $found = $Cell;
             $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br\>";
          } 
          else if( strlen($Cell) ==0 )           
          {
             $message ="<span style=\"color: red;\">Cell CAN NOT BE EMPTY</span><br>";
                                 
             //$Cell         = "";
             $Name         = "";
             $Pronouns     = "";
             $Instagram    = "";
             $Email        = "";
             $City         = "";
             $State        = "";
             $Birthday     = "";
             $Favorites    = "";
             $Preference   = "";
             $Gender       = "";
             $Books        = "";
             $Shows        = "";
             $Games        = "";
             $Movies       = "";
             $Comments     = "";              
                      
             $found        = ""; 
           }
           else 
           {
             $message ="<span style=\"color: red;\">RECORD $Cell NOT FOUND</span><br>";
             //echo "<br>Error: " . $sql . " " . mysqli_error($connection);                  
      
             //$Cell         = "";
             $Name         = "";
             $Pronouns     = "";
             $Instagram    = "";
             $Email        = "";
             $City         = "";
             $State        = "";
             $Birthday     = "";
             $Favorites    = "";
             $Preference   = "";
             $Gender       = "";
             $Books        = "";
             $Shows        = "";
             $Games        = "";
             $Movies       = "";
             $Comments     = "";              
                      
             $found        = "";  
          }      
      }
      
    ?> 
  </body>
<html>
