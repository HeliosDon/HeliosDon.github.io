 <!-- ***************************************************************************************
    Author     : Sarika Fils-Aime 
    Course     : CGS4854 
    URL        : ocelot.aul.fiu.edu/~sfils006
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 { Program 1 } 

    Due Date   : 10/27/2022 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Sarika Fils-Aime }..........

  **************************************************************************************** -->
<!DOCTYPE html>
<html>
 <head>
    <title>
      Fils-AimeS Program 3
    </title>
  </head>
  <?php  include( 'Fils-Aime_header.php' );  ?> 

  <head>
    <title>
      Fils-AimeS Program 3
    </title>
  </head>

  <?php  include( 'mainMenu.php' );  ?> 

  <body>

  <div>
    <form method="post" action="Controller3.php">
      <div align="center" style="font-size: 20px;"><b>Subscribe to Book, Show, or Game Reviews!</b></div>
        <br>					
          <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
                   
<!--  text boxes  -->
            <tr>
               <td style="width: 5%; text-align: right;">Cell # &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Cell" value="<?php echo $Cell ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">Name &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Name" value="<?php echo $Name ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">Pronouns &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Pronouns" value="<?php echo $Pronouns ?>" style="width: 100%;">
               </td>
            </tr>	
            
            <tr>
               <td style="width: 5%; text-align: right;">Instagram @ &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Instagram" value="<?php echo $Instagram ?>" style="width: 100%;">
               </td>
            </tr>  
            
            <tr>
               <td style="width: 5%; text-align: right;">Email &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Email" value="<?php echo $Email ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">City &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="City" value="<?php echo $City ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">State &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="State" value="<?php echo $State ?>" style="width: 100%;">
               </td>
            </tr>
            
            <tr>
               <td style="width: 5%; text-align: right;">Birthday &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Birthday" value="<?php echo $Birthday ?>" style="width: 100%;">
               </td>
            </tr>  
            
            <tr>
               <td style="width: 5%; text-align: right;">Favorite Genre(s) &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Favorites" value="<?php echo $Favorites ?>" style="width: 100%;">
               </td>
            </tr>						

            <tr><td> &nbsp; </td> </tr>
           
<!--  preference dropdown -->
            <tr>
              <td style="width: 5%; text-align: right;">Contact Preference &nbsp;</td>
              <td style="width: 20%; text-align: left;">
                <select name="Preference" style="width: 100%"size="1";>
                  <option value="Text Message" <?php if ($Preference == "Text") echo selected ?> >Text Message </option>
                  <option value="Email" <?php if ($Preference == "Email") echo selected ?> >Email </option>
                  <option value="IG Message" <?php if ($Preference == "Instagram") echo selected ?> >IG Message </option>
                </select>
              </td>
            </tr>
            
            <tr><td> &nbsp; </td> </tr>            
            
<!--  gender buttons  -->
            <tr>
               <td style="width: 5%; text-align: right;">Gender &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                  <table style="width: 100%;">
                     <tr>
                       <td text-align: left> 
                         <input type="radio"  <?php if ($Gender == "Male")   echo "checked"; ?> 
                                name="Gender" value="Male" checked> Male </input> &nbsp; &nbsp;
                         <input type="radio"  <?php if ($Gender == "Female")   echo "checked"; ?>
                                name="Gender" value="Female"> Female </input> &nbsp; &nbsp;
                         <input type="radio"  <?php if ($Gender == "Non-Binary")   echo "checked"; ?>
                                name="Gender" value="Non-binary"> Non-Binary </input> &nbsp; &nbsp;
                         <input type="radio"  <?php if ($Gender == "Other")   echo "checked"; ?>
                                name="Gender" value="Other"> Other </input> &nbsp; &nbsp;
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
                             
            <tr><td> &nbsp; </td> </tr>                                         
                    
<!-- genres -->
            <tr>
              <td style="width: 5%; text-align: right"> Review Preferences &nbsp; </td>
              <td style="width: 20%; text-align: left;">
                  <table style="margin: 0px auto;">
                  <tr>                                    
                    <td><input type="checkbox" name="Books" <?php if ($Books == "Books") echo checked;?> value="Books" > Books </input> &nbsp; &nbsp; </td>
                        
                    <td><input type="checkbox" name="Shows" <?php if ($Shows == "Shows") echo checked;?> value="Shows" > Shows </input> &nbsp; &nbsp; </td>
                      
                    <td><input type="checkbox" name="Games" <?php if ($Games == "Games") echo checked;?> value="Games" > Games </input> &nbsp; &nbsp; </td>

                    <td><input type="checkbox" name="Movies" <?php if ($Movies == "Movies") echo checked;?> value="Movies" > Movies </input> &nbsp; &nbsp; </td>
                    
                  </tr>      
                </table>
              </td>
            </tr>                         
              
<!--  comment box  -->
            <tr>
               <td style="width: 5%; text-align: right;">Comments &nbsp;</td>
               <td style="width: 20%;">
                 <textarea name="Comments" rows="5" cols="42">
                   <?php echo $Comments;?>
                 </textarea><br>
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr>                                                        
               
            <tr>
               <td style="width: 15%;" > </td>            
               <td style="width: 20%;" align=center>                
                 <?php echo $message ?>

               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr>                                         

            <tr>
              <td style="width: 15%;"> </td>            
              <td style="width: 20%;" align=center> 
                <input type="submit" name="Find"   value="Find">
                <input type="submit" name="Save"   value="Save">
                <input type="submit" name="Modify" value="Modify">
                <input type="submit" name="Delete" value="Delete">
                <input type="submit" name="Clear"  value="Clear">
                <input type="submit" name="Contact_Me"  value="Contact_Me">
                <input type="hidden" name="found"  value="<?php echo $found ?>" >
              </td>
           </tr>
         </table>
      </form>
    </div>
  </body>

  <?php include('mainMenu.php') ?><br>
      
  <p><center>Sarika Fils-Aime</center><p>


</html>