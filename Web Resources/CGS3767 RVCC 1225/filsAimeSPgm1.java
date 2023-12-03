/***************************************************************
Author     : Sarika Fils-Aime
Course     : COP3767 Summer C
Professor  : Michael Robinson
Program #  : Pgm1 
           { description}
          
Due Date   : 05/22/2022

Certification: 
I hereby certify that this work is my own and none of it is the work of any other person.

..........{Sarika Fils-Aime}..........
***************************************************************/
import java.util.*;

public class filsAimeSPgm1 
{

   public static void processingUbantu ( String myName, double num, String word, String editor, String save)
   {
   
       String quit = "To Quit without Saving: Ctrl + Q";
       String quitU = quit.toUpperCase();
   
       System.out.printf("My name is %s \n", myName); 
       System.out.printf("Number: %16.5f \n", num); 
       System.out.printf("Word: %s \n", word); 

       System.out.printf("Editor %s \n", editor); 
       System.out.printf("To Save and Quit: %s \n", save); 
       System.out.println( quitU ); 
       
       System.out.printf("Benefit One of using a VM: Can be moved"); 
       System.out.printf("\n");
       System.out.printf("Benefit Two of using a VM: Multiple operating Systems on one device"); 
       System.out.printf("\n");
       System.out.printf("Benefit Three of using a VM: Can be cloned");
       System.out.printf("\n");
       System.out.printf("Major Problem: If the Host system goes down, the VM also goes down" ); 
       ystem.out.printf("\n");

   }

   public static void main ( String[] args ) 
   {
       String quit = "Ctrl + Q";
       String quitU = quit.toUpperCase();
       processingUbantu ( "Sarika", 2021.99, "Fall", "gedit", "Must save (Ctrl + S) then quit, Ctrl + Q" );
    
   }
   
 }
