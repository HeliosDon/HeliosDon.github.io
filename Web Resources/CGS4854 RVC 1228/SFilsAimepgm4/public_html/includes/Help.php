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
<!--h3>This is Help.php</h3-->

<html>
  <body>
    <script>

      help();

      function help()
      {
        // Open a new window at a specific location
        var myWindow = window.open("", "Help","width=500, height=600, scrollbars=yes,resizable=yes, left=870, top=50"); 
     	 
        // Display the purpose of each button on the form in the newly opened window
        myWindow.document.write("<h2>Buttons Purpose:\n</h2>");
      
        myWindow.document.write("<p>\n- <b>FIND.</b> This button will find an existing record matching the input information. <span style='color:red'>'FOUND'</span></p>");
   
        myWindow.document.write("<p>\n- <b>SAVE.</b> This button will save the input information as a new record.  </p>");
   
        myWindow.document.write("<p>\n- <b>MODIFY.</b> This button will modify an existing record with the input information. Must find the existing record before using. .</p>");
   
        myWindow.document.write("<p>\n- <b>DELETE.</b> This button will delete the displayed record. Must find the existing record first.  </p>");
   
        myWindow.document.write("<p>\n- <b>CLEAR.</b> This button will clear the information on the page.</p>");

        myWindow.document.write("<p>\n- <b>HELP.</b> This button will display this help page.</p>");

        myWindow.document.write("<p>\n- <b>ABOUT.</b> This button will tell you ehat this website is about..</p>");

      }

    </script>
  </body>
<html>
