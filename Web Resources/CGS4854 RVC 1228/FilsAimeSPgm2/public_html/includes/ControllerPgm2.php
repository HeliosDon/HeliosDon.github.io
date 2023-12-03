<!-- ***************************************************************************************
  Author     : Sarika Fils-Aime 
  Course     : CGS4854 
  URL        : ocelot.aul.fiu.edu/~sfils006
  Professor  : Michael Robinson 
  Program #  : Assignment Purpose/Description 
                 { Program 2 } 
  Due Date   : 09/29/2022 
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Sarika Fils-Aime }..........

**************************************************************************************** -->
<!DOCTYPE html>
<html>
  <head>
    <title>ControllerPgm2</title>
  </head>
          
  <body>
    <?php
         
       echo "This is Controller 2 Called by Program 2 <br>";                        
       $Cell        = $_POST['Cell'];
       $Name        = $_POST['Name'];
       $Pronouns    = $_POST['Pronouns'];
       $Instagram   = $_POST['Instagram'];
       $Email       = $_POST['Email'];
       $City        = $_POST['City'];
       $State       = $_POST['State'];
       $Birthday    = $_POST['Birthday'];
       $Favorites   = $_POST['Favorites'];
       $Gender      = $_POST['Gender'];
       $Books       = $_POST['Books'];
       $Shows       = $_POST['Shows'];
       $Games       = $_POST['Games'];
       $Comments    = $_POST['Comments'];            
                 
       $found = $_POST['found']; 
                    
       echo 'Cell'. $Cell."<br>"; 
       echo 'Name'. $Name."<br>";  
       echo 'Pronouns'. $Pronouns."<br>";  
       echo 'Instagram @'. $Instagram."<br>";
       echo 'Email'. $Email."<br>";   
       echo 'City'. $City."<br>";  
       echo 'State'. $State."<br>";  
       echo 'Birthday'. $Birthday."<br>";  
       echo 'Favorites'. $Favorites."<br>";  
       echo 'Gender'. $Gender."<br>";  
       echo 'Books'. $Books."<br>";  
       echo 'Shows'. $Shows."<br>";  
       echo 'Games'. $Games."<br>";  
       echo 'Comments'. $Comments."<br>";                
                                    
       if ( $_POST['Find'] )
       { 
          include('Find');
            echo "You've pressed Find.";

       }
       else if ( $_POST['Save'] )
       { 
          include('Save');
            echo "You've pressed Save.";

       }
       else if ( $_POST['Modify'] )
       {  
          include('Modify');
            echo "You've pressed Modify.";

       }
       else if ( $_POST['Delete'] )
       {
          include('Delete');
            echo "You've pressed Delete.";
       }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }
        
    ?>
                 
  </body>
</html>