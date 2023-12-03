/*********************************************************************
 Author    : Sarika Fils-Aime
 Course    : Java-2
 Professor : Michael Robinson 
 Program # : Program Purpose/Description 
             1) Parallel Arrays (page 152 Chapter 7)
             2) Enhanced For Loops (Page 154 Chapter 7)
             3) String Tokenizers (Page 156 Chapter 7)
             4) ArrayLists (Page 167 Chapter 8)
             5) ArrayList of Objects (Page 188 Chapter 8)

 Due Date  : 06/10/2022 


 Certification: 
 I hereby certify that this work is my own and none of it is the work of any other person. 

 ..........{ Sarika Fils-Aime }..........
*********************************************************************/
import java.util.*;

public class filsAimeSPgm2
{
    public static void parallel(int[] carsWeight, String[] owner, double[] totalMiles)
    {
        
        for (int x = 0; x < carsWeight.length; x++ ) 
        {
            System.out.printf("%d \t", carsWeight[x]);
            System.out.printf("%s \t", owner[x]);
            System.out.printf("%f \n", totalMiles[x] );
        } // end of loop
    } // end of parallel
    
    public static void theEnhanceForLoop(Object[] objectArray)
    {
    
        for (Object obj: objectArray)
        {
        System.out.printf("%s \n", obj);
        }	
    } // end of enhanced loop
    
    public static void tokens()
    {

        String str1 = "Jill$Billy%Becky*Tara&Mary";
        String tokens1[] = str1.split("[$%*&]");
       
        String str2 = "http://gaddisbooks.com";
        String tokens2[] = str2.split("[//.]");
       
        String str3 = "blue one red three yellow";
        String tokens3[] = str3.split("[' ']");
       
        for (String a: tokens1)
        {

        System.out.printf("%s \n", a);  
        } //end of a loop
       
        for (String b: tokens2)
        {

        System.out.printf("%s \n", b); 
        } //end of b loop
         
        for (String c: tokens3)
        {

        System.out.printf("%s \n", c); 
        } //end of c loop
    } //end of tokens
    
    public static void theArrayList()
    {
        ArrayList <Object> theList = new ArrayList <Object>();
        
        theList.add(123);
        theList.add("Java");
        theList.add(3.75);
        theList.add("Fall C");
        theList.add(2099);
        
        int x = 0;

        for (x = 0; x < theList.size(); x++)
        {
            System.out.printf("%s \n", theList.get(x));
        
        } //end of loop
        
            theList.remove(1);
            theList.remove(3);
            
            
        for (x = 0; x < theList.size(); ++x)
        {
            System.out.printf("%s \n", theList.get(x));
            
        } //end of loop
    } //end of arraylist
    
    public static void theObjects(int one, String oneString, double onePointFour, double zeroPointTwoFive, String className, String progLanguage, int oneHundred)
    {
        Object objectArray [] = {one, oneString, onePointFour, zeroPointTwoFive, className, progLanguage, oneHundred};
        ArrayList <Object> theObjectList = new ArrayList <>();
        int x = 0; 
        
        for (x = 0; x < objectArray.length; x++)
        {
            theObjectList.add(objectArray[x]);
        System.out.printf("%s \n", theObjectList.get(x));
            
            } //end of loop
    } //end of objects

    
    public static void main(String[] args) 
    {

        int carsWeight[] = {50102, 23908, 12098};
        String owner[] = {"Michael Hall", "Maria Lopez", "Mo Freeman"};
        double totalMiles[] = {104.45, 232.78, 153.07};
        
        parallel(carsWeight, owner, totalMiles);
        
        Object objectArray[] = {"two", "four", "six"};
        
        theEnhanceForLoop(objectArray);
        
        tokens();
        
        System.out.printf("%s", "\n");
        
        theObjects(1, "one", 1.4, 0.25, "COP3804", "Java Language", 100);
        
        System.out.printf("%s", "\n");

        theArrayList();
    } //end of main method
} 


