/***************************************************************
Author     : Sarika Fils-Aime
Course     : COP3767 Summer C
Professor  : Michael Robinson
Program #  : Pgm2 
           { description}
          
Due Date   : 06/15/2022

Certification: 
I hereby certify that this work is my own and none of it is the work of any other person.

..........{Sarika Fils-Aime}..........
***************************************************************/
import java.io.*;
import java.util.*;
import java.util.Scanner;
import java.io.IOException;
import java.lang.Math.*;
import java.util.Formatter;

public class filsAimeSPgm2 
{

  
    public static String hexToBinary(String hex) 
    {
    	String[] binVal = {"0000", "0001", "0010", "0011","0100", "0101", "0110", "0111", "1000", "1001", "1010", "1011", "1100", "1101", "1110", "1000"};
    	
    	String biNum = "";
    	
    	for (int i = 0; i < hex.length(); i++)
    	{
    	
    	    switch(hex.charAt(i))
    	    {
    	    
    	        case ('0'): {
    	            biNum += binVal[0];
    	        break;}
    	        case ('1'): {
    	            biNum += binVal[1];
    	        break;}
    	        case ('2'): {
    	            biNum += binVal[2];
    	        break;}
    	        case ('3'): {
    	            biNum += binVal[3];
    	        break;}
    	        case ('4'): {
    	            biNum += binVal[4];
    	        break;}
    	        case ('5'): {
    	            biNum += binVal[5];
    	        break;}
    	        case ('6'): {
    	            biNum += binVal[6];
    	        break;}
    	        case ('7'): {
    	            biNum += binVal[7];
    	        break;}
    	        case ('8'): {
    	            biNum += binVal[8];
    	        break;}
    	        case ('9'): {
    	            biNum += binVal[9];
    	        break;}
    	        case ('A'): {
    	            biNum += binVal[10];
    	        break;}
    	        case ('B'): {
    	            biNum += binVal[11];
    	        break;}
    	        case ('C'): {
    	            biNum += binVal[12];
    	        break;}
    	        case ('D'): {
    	            biNum += binVal[13];
    	        break;}
    	        case ('E'): {
    	            biNum += binVal[14];
    	        break;}
    	        case ('F'): {
    	            biNum += binVal[15];
    	        break;}
    	        default:{
    	        
    	            }     
    	            
    	    } //end of switch case
    	
    	} // ende of for loop
    
        return biNum;
    
    } //end of hexToBinary
    
    public static Double binaryToDec(String biNum)
    {
    
        double temp = 0;
        double sum = 0;
    
        for (int i = 0; i < biNum.length(); i++)
        {
    
            if(biNum.charAt(i) == '1')
            {
        
            temp = Math.pow(2, biNum.length()-1-i);
            sum += temp;
         
            } //end of if statement
            
        } //end of for loop
       
        return sum;
        
    } // end of binaryToDec

    public static String chipNum (double num)
    {

        String chip =  "0";
        if (num >= 0 && num <= 34359738368l)
        {
            chip = "0";
        }

        else if (num >= 34359738369l && num <= 68719476738l)
        {
            chip = "1";
        }

        else if (num >= 68719476739l && num <= 103079215108l)
        {
            chip = "2";
        }

        else if (num >= 103079215109l && num <= 137438953478l)
        {
            chip = "3";
        }

        else if (num >= 137438953479l && num <= 171798691848l)
        {
            chip = "4";
        }
        
        else if (num >= 171798691849l && num <= 206158430218l)
        {
            chip = "5";
        }

        else if (num >= 206158430219l && num <= 248518168588l)
        {
            chip = "6";
        }

        else if (num >= 248518168589l && num <= 274877906958l)
        {
            chip = "7";
        }

        else
        {
            chip = "N/A";
        }

        return chip;

    } // end of chipNumber
    
    public static void lowerCase()
    {
        
        int i;
        for (i = 97; i<= 122; ++i)
        {
        
        System.out.printf((char)i + " = " + i + " ");
        
        }// end of for loop
        
    }// end of lowercase
    
    public static void upperCase()
    {
    
        int i;
        for (i = 65; i<= 90; ++i)
        {
        
        System.out.printf((char)i + " = " + i + " ");
        
        }// end of for loop
    
    }// end of upper    

    public static void main(String[] args) throws IOException
    {
        
        List<String> arrayString = new ArrayList<String>();
    	File file = new File("RAMerrors8x4f.6");
    	Scanner test = new Scanner(file); 
    	
    	String hex = test.nextLine();
    	String biNum;
    	Double decimal;
    	
    	System.out.printf("Hex Error\tBinary Value\t\t\t\tDecimal Value\tFound at");
    	
    	while( test.hasNextLine() )
            {                       
           
                biNum = hexToBinary(hex);
                decimal = binaryToDec((biNum)); 
                String chipNum = chipNum(decimal);
                System.out.printf("\n");
                System.out.printf("%s", test.nextLine() + " = " + biNum + " = " + decimal + "  " + chipNum);
    	                      
            } //end of while loop
            
        System.out.printf("\n\n\n");
        upperCase();
        System.out.printf("\n\n\n");
        lowerCase();
    
    } // end method

} // end class
