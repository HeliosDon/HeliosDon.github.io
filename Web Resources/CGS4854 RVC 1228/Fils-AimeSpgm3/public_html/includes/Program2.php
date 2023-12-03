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
    <title>
      Fils-AimeS Program 2
    </title>
  </head> 
  <?php  include( 'Fils-Aime_header.php' );  ?> 

  <?php  include( 'mainMenu.php' );  ?> 

  <body>
    <form method="post" action="ControllerPgm2.php">
      <div align="center" style="font-size: 20px;"><b>Subscribe to Book, Show, or Game Reviews!</b></div>
        <br>					
          <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
                   
<!--  text boxes  -->
            <tr>
               <td style="width: 5%; text-align: right;">Cell # &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Cell" value=" " style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">Name &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Name" value=" " style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">Pronouns &nbsp;</td>
               <td style="width: 20%;">
                 <input id="birth" type="text" name="Pronouns" value=" " style="width: 100%;">
               </td>
            </tr>	
            
            <tr>
               <td style="width: 5%; text-align: right;">Instagram @ &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Instagram" value=" " style="width: 100%;">
               </td>
            </tr>  
            
            <tr>
               <td style="width: 5%; text-align: right;">Email &nbsp;</td>
               <td style="width: 20%;">
                 <input id="birth" type="text" name="Email" value=" " style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">City &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="City" value=" " style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">State &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="State" value=" " style="width: 100%;">
               </td>
            </tr>
            
            <tr>
               <td style="width: 5%; text-align: right;">Birthday &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Birthday" value=" " style="width: 100%;">
               </td>
            </tr>  
            
            <tr>
               <td style="width: 5%; text-align: right;">Favorite Genre(s) &nbsp;</td>
               <td style="width: 20%;">
                 <input id="birth" type="text" name="Favorites" value=" " style="width: 100%;">
               </td>
            </tr>						

            <tr><td> &nbsp; </td> </tr>
           
<!--  age dropdown -->
            <tr>
              <td style="width: 5%; text-align: right;">Contact Preference &nbsp;</td>
              <td style="width: 20%; text-align: left;">
                <select name="Contact" style="width: 100%"size="1";>
                  <option value="Text Message">Text Message </option>
                  <option value="Email">Email </option>
                  <option value="IG Message">IG Message </option>
                </select>
              </td>
            </tr>
            
            <tr><td> &nbsp; </td> </tr>            
            
<!--  gender buttons  -->
            <tr>
               <td style="width: 5%; text-align: right;">Gender &nbsp; </td>
               <td style="width: 20%; text-align: left;">
                  <table style="margin: 0px auto;">
                     <tr>
                       <td text-align: left> 
                         <input type="radio"  
                                name="Gender" value="Male" checked> Male &nbsp; &nbsp;
                         <input type="radio"  
                                name="Gender" value="Female"> Female &nbsp; &nbsp;
                         <input type="radio"  
                                name="Gender" value="Non-binary"> Non-Binary &nbsp; &nbsp;

                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
                             
            <tr><td> &nbsp; </td> </tr>                                         
                    
<!-- subjects -->
            <tr>
              <td style="width: 5%; text-align: right"> Review Preferences &nbsp; </td>
              <td style="width: 20%;">
                <table>
                  <tr>                                    
                    <td><input type="checkbox" name="Books" value="Books" > Books &nbsp; &nbsp; </td>
                        
                    <td><input type="checkbox" name="Shows" value="Shows" > Shows &nbsp; &nbsp; </td>
                      
                    <td><input type="checkbox" name="Games" value="Games" > Games &nbsp; &nbsp; </td>
                  </tr>      
                </table>
              </td>
            </tr>
                 
<!--  text style-->
            <tr>
               <td style="width: 5%; text-align: right;">Specific Title Request &nbsp; </td>
               <td style="width: 20%;">
                  <input type="text" name="Title" value="  " style="width: 100%;">
               </td>
            </tr>
            
            <tr><td> &nbsp; </td> </tr>                          
              
<!--  comment box  -->
            <tr>
               <td style="width: 5%; text-align: right;">Comments &nbsp;</td>
               <td style="width: 20%;">
                 <textarea name="Comments" rows="5" cols="42">
                 </textarea><br>
               </td>
            </tr>
               
            <tr><td> &nbsp; </td> </tr>                                                        
               
            <tr>
               <td style="width: 15%;" > </td>            
               <td style="width: 20%;" align=center>                
                  $message
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
                <input type="reset" name="ClearScreen"  value="ClearScreen">
              </td>
           </tr>
         </table>
      </form>
  </body>


</html>