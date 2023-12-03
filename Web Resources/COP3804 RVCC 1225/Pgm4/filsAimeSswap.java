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

public class filsAimeSswap
{

    public static void swap(int[] swapNums)
    {

        int temp;
        if (swapNums[0] > swapNums[1]) 
        {

            temp = swapNums[0];
            swapNums[0] = swapNums[1];
            swapNums[1] = temp; 

        }

        if (swapNums[2] > swapNums[3]) 
        {

            temp = swapNums[2];
            swapNums[2] = swapNums[3];
            swapNums[3] = temp; 

        }

        if (swapNums[0] > swapNums[2]) 
        {

            temp = swapNums[0];
            swapNums[0] = swapNums[2];
            swapNums[2] = temp; 

        }

        if (swapNums[1] > swapNums[3]) 
        {

            temp = swapNums[1];
            swapNums[1] = swapNums[3];
            swapNums[3] = temp; 

        }

        if (swapNums[1] > swapNums[2]) 
        {

            temp = swapNums[1];
            swapNums[1] = swapNums[2];
            swapNums[2] = temp; 

        }

    }

    public static void main(String[] args)
    {

        int[] swapNums = new int[] {784, 5, 123, 56};
    
        for(int i = 0; i < swapNums.length; i++)
        {
            System.out.print(swapNums[i] + " ");
        }
        System.out.printf("\n");

        swap(swapNums);
        for(int i = 0; i < swapNums.length; i++)
        {
            System.out.print(swapNums[i] + " ");
        }
        System.out.printf("\n");

    }

}