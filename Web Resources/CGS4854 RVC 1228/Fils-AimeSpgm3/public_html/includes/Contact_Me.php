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

    <?php  include( 'Fils-Aime_header.php' );  ?> 

   <br>

  <body>
    <header>
      <center>
        <font face= "Courier" color ="Red" size=5>
          <b>CONTACT ME</b>
        </font>
      </center>
    </header>

    <?php  include( 'mainMenu.php' );  ?> 

   <br>
     <form method="post" action="Contact_me_Controller.php">
   <br>
     <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
      <center>
       <tr>
         <td style="width: 5%; text-align: right;">Your Email &nbsp;</td>
           <td style="width: 20%;">
             <input type="text" name="YourEmail" value="" style="width: 100%;">
         </td>
       </tr>

       <tr>
         <td style="width: 5%; text-align: right;">Last Name &nbsp;</td>
           <td style="width: 20%;">
             <input type="text" name="LastName" value="" style="width: 100%;">
         </td>
       </tr>

       <tr>
         <td style="width: 5%; text-align: right;">First Name &nbsp;</td>
           <td style="width: 20%;">
             <input type="text" name="FirstName" value="" style="width: 100%;">
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
                 <input type="radio"  
                        name="Gender" value="Male" checked> Male </input> &nbsp; &nbsp;
                 <input type="radio"  
                        name="Gender" value="Female"> Female </input> &nbsp; &nbsp;
                 <input type="radio"  
                        name="Gender" value="Non-binary"> Non-Binary </input> &nbsp; &nbsp;
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
                    <td><input type="checkbox" name="Books" value="Books" > Books </input> &nbsp; &nbsp; </td>
                        
                    <td><input type="checkbox" name="Shows" value="Shows" > Shows </input> &nbsp; &nbsp; </td>
                      
                    <td><input type="checkbox" name="Games" value="Games" > Games </input> &nbsp; &nbsp; </td>
                  </tr>      
                </table>
              </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>  

            <tr>
              <td style="width: 5%; text-align: right;">Contact Preference &nbsp;</td>
              <td style="width: 20%; text-align: left;">
                <select name="Preference" style="width: 100%"size="1";>
                  <option value="Text Message">Text Message </option>
                  <option value="Email">Email </option>
                  <option value="IG Message">IG Message </option>
                </select>
              </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>  

            <tr>
               <td style="width: 5%; text-align: right;">Comments &nbsp;</td>
               <td style="width: 20%;">
                 <textarea name="Comments" rows="5" cols="42">
                 </textarea><br>
               </td>
            </tr>

            <tr><td> &nbsp; </td> </tr>

            <tr>
              <td style="width: 15%;"> </td>            
              <td style="width: 20%;" align=center> 
                <input type="submit" name="Submit"   value="Submit">
                <input type="reset" name="Clear"   value="Clear">
              </td>
           </tr>

            <tr><td> &nbsp; </td> </tr>



      </center>
    </table>
    </form>

     <?php include('mainMenu.php') ?><br>

  </body>
<html>
