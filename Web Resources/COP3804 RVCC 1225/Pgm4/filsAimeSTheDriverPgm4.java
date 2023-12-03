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

public class filsAimeSTheDriverPgm4
{

    public static void main(String[] args)
    {

        filsAimeSSuperPgm4 call = new filsAimeSSuperPgm4();
        filsAimeSSub1 sub1 = new filsAimeSSub1();
        filsAimeSSub2 sub2 = new filsAimeSSub2();
        filsAimeSSub3 sub3 = new filsAimeSSub3();
        
        filsAimeSTheBuilder builder = new filsAimeSTheBuilder();
        filsAimeSOverloader overloader = new filsAimeSOverloader();

        call.method1(0);
        call.method2("Hello", "Goodbye");
        call.method3();

        sub1.method1(1);
        sub1.method2("In", "Out");
        sub1.method3();

        sub2.method1(2);
        sub2.method2("Up", "Down");
        sub2.method3();

        sub3.method1(3);
        sub3.method2("Good", "Bad");
        sub3.method3();

        overloader.method1(4);
        overloader.method2("Left", "Right");
        overloader.method3();

        builder.display();

    }

}
