/*********************************************************************
 Author    : Sarika Fils-Aime
 Course    : COP3804 Intermediate Java.
 Professor : Michael Robinson 
 Program # : Program Purpose/Description 
             To Create Interface Driver for Program 3

 Due Date  : 07/02/2022 


 Certification: 
 I hereby certify that this work is my own and none of it is the work of any other person. 

 ..........Sarika Fils-Aime..........
*********************************************************************/

public class filsAimeSInterfaceDriver implements filsAimeSInterface
{

    public static String personPantherID = "5573043";
    public static String personLastName = "Fils-Aime";
    public static String personFirstName = "Sarika";
    public static String personSchool = "FIU";

    public void thePersonSchool(String school)
    {

        System.out.printf("%s\n", school);

    }

    public void thePersonPantherID(String id)
    {

        System.out.printf("%s\n", id);

    }

    public void thePersonLastName(String last)
    {

        System.out.printf("%s\n", last);

    }

    public void thePersonFirstName(String first)
    {

        System.out.printf("%s\n", first);

    }

    public static void main(String args[])
    {

        filsAimeSInterfaceDriver userFace = new filsAimeSInterfaceDriver();
        userFace.thePersonSchool(personSchool);
        userFace.thePersonPantherID(personPantherID);
        userFace.thePersonLastName(personLastName);
        userFace.thePersonFirstName(personFirstName);

    }

}