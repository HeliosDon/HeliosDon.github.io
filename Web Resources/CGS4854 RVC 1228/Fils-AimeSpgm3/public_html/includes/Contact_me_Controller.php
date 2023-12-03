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
  <head>
    <title>
      Fils-AimeSPgm3
    </title>
  </head>

  <body>
    <?php 

      if(isset($_POST['Submit'])) 
      { 
        $to          = "michael.robinson@cs.fiu.edu"; 
        $subject     = "Sarika Fils-Aime's Newsletter (Program 3)"; 
        $FirstName   = $_POST['FirstName'];
        $LastName    = $_POST['LastName']; 
        $YourEmail   = $_POST['YourEmail']; 
        $Gender      = $_POST['Gender']; 
        $Books       = $_POST['Books']; 
        $Shows       = $_POST['Shows']; 
        $Games       = $_POST['Games']; 
        $Preference  = $_POST['Preference'];
        $Comments    = $_POST['Comments'];


        $body = "First Name:                   $FirstName\nLast Name:                    $LastName\nE-Mail:                           $YourEmail\nGender:                         $Gender\nReview Preference:     $Books   $Shows   $Games\nContact Preference:    $Preference\nComments:                   $Comments\n";

        mail($to, $subject, $body); 

      }  
        include('ContactMeSend.php');
      
 
    ?>   
  </body>
<html>
