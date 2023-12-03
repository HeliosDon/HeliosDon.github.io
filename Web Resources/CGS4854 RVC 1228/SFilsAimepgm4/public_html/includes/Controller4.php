 <!-- ***************************************************************************************
    Author     : Sarika Fils-Aime 
    Course     : CGS4854 
    URL        : ocelot.aul.fiu.edu/~sfils006
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 { Program 4 Controller } 

    Due Date   : 11/24/2022 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Sarika Fils-Aime }..........

  **************************************************************************************** -->
<!DOCTYPE html>
<html>
  <head>
    <title>ControllerPgm4</title>
  </head>
          
  <body>
    <div>
      <?php

        $connection = mysqli_connect("ocelot.aul.fiu.edu","fall22_sfils006","5573043","fall22_sfils006");
        if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else
        {  
          //echo "<br>I have connected to mySql<br>";            
               
          $dbName="fall22_sfils006"; 
          $db_selected = mysqli_select_db( $connection, $dbName );
                      
          if (!$db_selected)
          {
             die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
          }
          else
          {                   
             $tableName = "customers";
                    
             $query = mysqli_query( $connection, "SELECT * FROM $tableName" );
                   
             if(!$query)
             {                       
               $sql = "CREATE TABLE ".$tableName."(
                       Cell VARCHAR(20) NOT NULL,
                       PRIMARY KEY(Cell),
                       Name VARCHAR(30),
                       Pronouns VARCHAR(20),
                       Instagram VARCHAR(20),
                       Email VARCHAR(30),
                       City VARCHAR(30),
                       State VARCHAR(30),
                       Birthday VARCHAR(30),
                       Favorites VARCHAR(30),
                       Preference VARCHAR(20),
                       Gender VARCHAR(200),
                       Books VARCHAR(20), 
                       Shows  VARCHAR(20),
                       Games  VARCHAR(20),
                       Movies  VARCHAR(20),
                       Comments VARCHAR(250)
                       )";
                                
               $result = mysqli_query( $connection, $sql );
                         
               if ($result)
               {
                 //echo "table ". $tableName." created<br>";
               }
                 else
               {
                 die ("Can\'t create ". $tableName." ". mysqli_error() );
               }      
             }             
          }
       }
                                
       $Cell        = $_POST['Cell'];
       $Name        = $_POST['Name'];
       $Pronouns    = $_POST['Pronouns'];
       $Instagram   = $_POST['Instagram'];
       $Email       = $_POST['Email'];
       $City        = $_POST['City'];
       $State       = $_POST['State'];
       $Birthday    = $_POST['Birthday'];
       $Favorites   = $_POST['Favorites'];
       $Preference  = $_POST['Preference'];
       $Gender      = $_POST['Gender'];
       $Books       = $_POST['Books'];
       $Shows       = $_POST['Shows'];
       $Games       = $_POST['Games'];
       $Movies      = $_POST['Movies'];
       $Comments    = $_POST['Comments'];            
                 
       $found = $_POST['found'];               
                                    
       if ( $_POST['Find'] )
       { 
          include('Find.php');
          include('Program4.php');
       }
       else if ( $_POST['Save'] )
       { 
          include('Save.php');
          include('Program4.php');
       }
       else if ( $_POST['Modify'] )
       {  
          include('Modify.php');
          include('Program4.php');
       }
       else if ( $_POST['Delete'] )
       {
          include('Delete.php');
          include('Program4.php');
       }
       else if ( $_POST['Clear'] )
       {
          include('Clear.php');
          include('Program4.php');
       }
       else if ( $_POST['Contact_Me'] )
       {
          include('Contact_Me.php');
       }
       else if ( $_POST['Help'] )
       {
          include('Help.php');
          include('Program4.php');
       }
       else if ( $_POST['About'] )
       {
          include('About.php');
       }
       else
       { 
          echo "<br><h1> you pressed UNKOWN button</h1>";   
       }
        
       mysqli_close($connection); 

    ?>
    </div>
                 
  </body>
</html>