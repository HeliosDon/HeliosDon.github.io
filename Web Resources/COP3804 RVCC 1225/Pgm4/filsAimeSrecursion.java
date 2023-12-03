/*********************************************************************
 Author    : Sarika Fils-Aime 
 Course    : COP3804
 Professor : Michael Robinson 
 Program # : PGM4
             Master creation of Polymorphism

 Due Date  : 07/16/2022 


 Certification: 
 I hereby certify that this work is my own and none of it is the work of any other person. 

 ..........{ Sarika Fils-Aime }..........
*********************************************************************/

public class filsAimeSrecursion
{

    public static long factorial(int i)
    {
        System.out.printf("Processing factorial\n", i);
        
        if(i <= 1)
        {
            
            System.out.printf("Reached base case\n", i);
        
            return 1;

        }
        
        else
        {

            System.out.printf("Calling step %d \n", i);
            long counter = factorial(i - 1);
            
            System.out.printf("%d! = %d * %d! = %d * %d = %d\n",
                                i, i, i-1, i, counter, counter * i);       
            return counter * i;
            
        } 
   
    } 

    public static void main(String[] args)
    {

        int i = 10;
        long result = factorial(i);

        System.out.printf("Factorial of %d is %d\n", i, result);

    }

}


