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

public class filsAimeSbubbleSort
{

    public static void bubbleSort(String[] nameArray)
    {
        String temp;
        for (int i = 0; i < nameArray.length; ++i)
        {
            for (int j = 0; j < nameArray.length - 1; ++j)
            {
                if (nameArray[j].compareTo(nameArray[j + 1]) > 0) 
                {
                    temp = nameArray[j];
                    nameArray[j] = nameArray[j + 1];
                    nameArray[j + 1] = temp; 

                }
            }
        }
    }

    public static void main(String[] args)
    {

        String[] nameArray = new String[] {"Sarika", "Fils-Aime"};

        for(int i = 0; i < nameArray.length; i++)
        {
            System.out.print(nameArray[i] + " ");
        }
        System.out.printf("\n");

        bubbleSort(nameArray);

        for(int i = 0; i < nameArray.length; i++)
        {
            System.out.print(nameArray[i] + " ");
        }
        System.out.printf("\n");

    }

}