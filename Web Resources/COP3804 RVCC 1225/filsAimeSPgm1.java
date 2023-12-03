/*********************************************************************
 Author    : Sarika Fils-Aime
 Course    : COP3804 Intermediate Java.
 Professor : Michael Robinson 
 Program # : Program Purpose/Description 
             To Present a Two-Dimension Array with dtype int

 Due Date  : 05/22/2022 


 Certification: 
 I hereby certify that this work is my own and none of it is the work of any other person. 

 ..........Sarika Fils-Aime..........
*********************************************************************/

/*NoteS:

0	3	6	9	12	15	18	21	24	27	30	33	36	39	42
3	6	9	12	15	18	21	24	27	30	33	36	39	42	42
6	9	12	15	18	21	24	27	30	33	36	39	42	45	42
9	12	15	18	21	24	27	30	33	36	39	42	45	48	42
12	15	18	21	24	27	30	33	36	39	42	45	48	51	42
15	18	21	24	27	30	33	36	39	42	45	48	51	54	42
18	21	24	27	30	33	36	39	42	45	48	51	54	57	42
21	24	27	30	33	36	39	42	45	48	51	54	57	60	42
24	27	30	33	36	39	42	45	48	51	54	57	60	63	42
27	30	33	36	39	42	45	48	51	54	57	60	63	66	42
30	33	36	39	42	45	48	51	54	57	60	63	66	69	42
33	36	39	42	45	48	51	54	57	60	63	66	69	72	42
36	39	42	45	48	51	54	57	60	63	66	69	72	75	42
39	42	45	48	51	54	57	60	63	66	69	72	75	78	42
42	45	48	51	54	57	60	63	66	69	72	75	78	81	42

*/
public class filsAimeSPgm1 {
	
	public static void arrays(int[][] array2D, int col, int row) {
    
	    for (int x = 0; x < row; x++) {
            for (int y = 0; y < col; y++) {

                array2D[x][y] = (x + y) * 3;

            }  // End of 2nd for loop
        } // End of 1st for loop

        printArray(array2D, col, row);
        arrayTotal(array2D, col, row);

	} // End of arrayBuild Method

    public static void printArray(int[][] array2D, int col, int row) {
        for (int x = 0; x < row; x++) {
            for (int y = 0; y < col; y++) {

                System.out.printf("%2d ", array2D[x][y]);

            } 
            System.out.printf("\n");
        }

    }

    public static void arrayTotal(int[][] array2D, int col, int row) {

        int total = 0;

        for (int x = 0; x < row; x++) {
            for (int y = 0; y < col; y++) {

                total = total + array2D[x][y];

            } 
        
        }
        System.out.printf("\nSum: %d", total );
    }

    public static void main(String[] args) {

        int row = 15;
	    int col = 15;
   
        int [][] array2D = new int[15][15];

        arrays(array2D, col, row);
         
        System.out.printf("\nSarika Fils-Aime");
    }  // End of Main Method
}  // End of class


