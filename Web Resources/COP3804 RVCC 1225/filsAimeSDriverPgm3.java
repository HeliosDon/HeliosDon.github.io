/*********************************************************************
 Author    : Sarika Fils-Aime
 Course    : COP3804 Intermediate Java.
 Professor : Michael Robinson 
 Program # : Program Purpose/Description 
             To Create Driver for Program 3

 Due Date  : 07/02/2022 


 Certification: 
 I hereby certify that this work is my own and none of it is the work of any other person. 

 ..........Sarika Fils-Aime..........
*********************************************************************/

public class filsAimeSDriverPgm3
{

    public static void main(String[] args) 
    {

        filsAimeSSuperPgm3 sup = new filsAimeSSuperPgm3();
        filsAimeSSubOne sub1 = new filsAimeSSubOne();
        filsAimeSSubTwo sub2 = new filsAimeSSubTwo();

        sup.methodOne(97);
        sup.methodTwo("hello", "goodbye");
        sup.methodThree();

        System.out.printf("\n");

    }// end of main methos

}// end of program