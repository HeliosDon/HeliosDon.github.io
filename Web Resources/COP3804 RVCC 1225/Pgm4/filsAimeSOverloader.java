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

public class filsAimeSOverloader extends filsAimeSSub2
{

    @Override
    public void method2(String one, String two)
    {

        System.out.printf("%s\n", one, two);
        System.out.printf("%s", "I am the Overloader.\n");

    }

}