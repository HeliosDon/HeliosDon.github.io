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

public class filsAimeSTheBuilder extends filsAimeSSub2
{

    public void display()
    {

        filsAimeSSuperPgm4 sup = new filsAimeSSuperPgm4();
        sup.method1(1);
        sup.method2("Hi", "Bye");
        sup.method3();
        System.out.printf("%s", "I am TheBuilder");

    }

}