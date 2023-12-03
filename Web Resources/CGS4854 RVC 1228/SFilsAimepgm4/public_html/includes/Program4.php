 <!-- ***************************************************************************************
    Author     : Sarika Fils-Aime 
    Course     : CGS4854 
    URL        : ocelot.aul.fiu.edu/~sfils006
    Professor  : Michael Robinson 
    Program #  : Assignment Purpose/Description 
                 { Program 4 } 

    Due Date   : 11/24/2022 
    Certification: 
    I hereby certify that this work is my own and none of it is the work of any other person. 

    ..........{ Sarika Fils-Aime }..........

  **************************************************************************************** -->
<!DOCTYPE html>
<html>
 <head>
    <title>
      Fils-AimeS Program 4
    </title>
  </head>
  <?php  include( 'Fils-Aime_header.php' );  ?> 

  <div>
    <script>
      function currentTime() 
      {
        var today   = new Date();
        var hour    = today.getHours();
        var minutes = today.getMinutes();
        var sec     = today.getSeconds();
      
        minutes = checkTime(minutes);
        sec     = checkTime(sec);
        
        document.getElementById('txt').innerHTML = "Current Time: "+hour+":"+minutes+":"+sec;
      
        var t = setTimeout(function(){currentTime()},500);     
      }

      function checkTime(i) 
      {
         if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
         return i;
      }


      /*
      getDate()	          Returns the day of the month (from 1-31)
      getDay()	          Returns the day of the week (from 0-6)
      getFullYear()	  Returns the year (four digits)
      getHours()  	  Returns the hour (from 0-23)
      getMilliseconds()   Returns the milliseconds (from 0-999)
      getMinutes()	  Returns the minutes (from 0-59)
      getMonth()	  Returns the month (from 0-11)
      getSeconds()	  Returns the seconds (from 0-59)
      getTime()	          Returns the number of milliseconds since midnight Jan 1, 1970
      getTimezoneOffset() Returns the time difference between UTC time and local time, in minutes
      getUTCDate()	  Returns the day of the month, according to universal time (from 1-31)
      getUTCDay()	  Returns the day of the week, according to universal time (from 0-6)
      getUTCFullYear()	  Returns the year, according to universal time (four digits)
      getUTCHours()	  Returns the hour, according to universal time (from 0-23)
      getUTCMilliseconds()Returns the milliseconds, according to universal time (from 0-999)
      getUTCMinutes()	  Returns the minutes, according to universal time (from 0-59)
      getUTCMonth()	  Returns the month, according to universal time (from 0-11)
      getUTCSeconds()	  Returns the seconds, according to universal time (from 0-59)
      getYear()	          Deprecated. Use the getFullYear() method instead
      parse()	          Parses a date string and returns the number of milliseconds since January 1, 1970
      
      setDate()           Sets the day of the month of a date object
      setFullYear()	  Sets the year (four digits) of a date object
      setHours()	  Sets the hour of a date object
      setMilliseconds()	  Sets the milliseconds of a date object
      setMinutes()	  Set the minutes of a date object
      setMonth()	  Sets the month of a date object
      setSeconds()	  Sets the seconds of a date object
      setTime()	          Sets a date to a specified number of milliseconds after/before January 1, 1970
      setUTCDate()	  Sets the day of the month of a date object, according to universal time
      setUTCFullYear()	  Sets the year of a date object, according to universal time (four digits)
      setUTCHours()	  Sets the hour of a date object, according to universal time
      setUTCMilliseconds()Sets the milliseconds of a date object, according to universal time
      setUTCMinutes()	  Set the minutes of a date object, according to universal time
      setUTCMonth()	  Sets the month of a date object, according to universal time
      setUTCSeconds()	  Set the seconds of a date object, according to universal time
      setYear()	          Deprecated. Use the setFullYear() method instead
      toDateString()	  Converts the date portion of a Date object into a readable string
      toGMTString()	  Deprecated. Use the toUTCString() method instead
      toISOString()	  Returns the date as a string, using the ISO standard
      toJSON()	          Returns the date as a string, formatted as a JSON date
      toLocaleDateString()Returns the date portion of a Date object as a string, using locale conventions
      toLocaleTimeString()Returns the time portion of a Date object as a string, using locale conventions
      toLocaleString()	  Converts a Date object to a string, using locale conventions
      toString()	  Converts a Date object to a string
      toTimeString()	  Converts the time portion of a Date object to a string
      toUTCString()	  Converts a Date object to a string, according to universal time
      UTC()	          Returns the number of milliseconds in a date since midnight of 
                              January 1, 1970, according to UTC time
      valueOf()	          Returns the primitive value of a Date object 
      */

    </script>

    <script>
    
      loggedInTime();
             
      var temp1;
      
      function loggedInTime( temp )
      {
         var tiempo = new Date();  
         var temp2 =  "Logged in at: " + tiempo;
         temp1 = temp2;
         document.write( temp2 );
      }


      //document.write( " " + "I am next " + temp1 ); 

      currentTime();
      
    </script>

  </div>


  <header>
       <center><b><font color="Red">Program 4</font></b></center>
  </header>

  <?php  include( 'mainMenu.php' );  ?> 

  <body>
  <div>
    <form method="post" action="Controller4.php">
      <div align="center" style="font-size: 20px;"><b>Subscribe to Book, Show, or Game Reviews!</b></div>
        <br>					
          <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
                   
<!--  text boxes  -->
            <tr>
               <td style="width: 5%; text-align: right;">Cell # &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Cell" placeholder="###-###-####" value="<?php echo $Cell ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">Name &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Name" placeholder="Name" value="<?php echo $Name ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">Pronouns &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Pronouns" placeholder="He/She/They" value="<?php echo $Pronouns ?>" style="width: 100%;">
               </td>
            </tr>	
            
            <tr>
               <td style="width: 5%; text-align: right;">Instagram @ &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Instagram" placeholder="@Instagram" value="<?php echo $Instagram ?>" style="width: 100%;">
               </td>
            </tr>  
            
            <tr>
               <td style="width: 5%; text-align: right;">Email &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Email" placeholder="email@address.com" value="<?php echo $Email ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">City &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="City" placeholder="City" value="<?php echo $City ?>" style="width: 100%;">
               </td>
            </tr>

            <tr>
               <td style="width: 5%; text-align: right;">State &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="State" placeholder="State" value="<?php echo $State ?>" style="width: 100%;">
               </td>
            </tr>
            
            <tr>
               <td style="width: 5%; text-align: right;">Birthday &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Birthday" placeholder="12/25/2020" value="<?php echo $Birthday ?>" style="width: 100%;">
               </td>
            </tr>  
            
            <tr>
               <td style="width: 5%; text-align: right;">Favorite Genre(s) &nbsp;</td>
               <td style="width: 20%;">
                 <input type="text" name="Favorites" placeholder="Fiction, Horror, etc." value="<?php echo $Favorites ?>" style="width: 100%;">
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
                <input type="submit" name="Find"        value="Find">
                <input type="submit" name="Save"        value="Save">
                <input type="submit" name="Modify"      value="Modify">
                <input type="submit" name="Delete"      value="Delete">
                <input type="submit" name="Clear"       value="Clear">
                <input type="submit" name="Contact_Me"  value="Contact_Me">
                <input type="submit" name="Help"        value="Help">
                <input type="submit" name="About"       value="About">
                <input type="hidden" name="found"       value="<?php echo $found ?>" >
              </td>
           </tr>
         </table>
      </form>
    </div>
  </body>

  <?php include('mainMenu.php') ?><br>
      
  <p><center>Sarika Fils-Aime</center><p>


</html>