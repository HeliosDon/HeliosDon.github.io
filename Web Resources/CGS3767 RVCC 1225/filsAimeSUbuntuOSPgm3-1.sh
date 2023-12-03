<<comment

     ********************************************************************
       Author    : Sarika Fils-Aime
       Course    : CGS3767
       Professor : Michael Robinson 
       Program # : Pgm3 
                   { A brief description of the program }
                
       Due Date  : 07/13/2022 
                 
       Certification: 
       I hereby certify that this work is my own and none of it is the work of any other person. 
     -----------------( Sarika Fils-Aime )---------------
     *********************************************************************/

comment


while true
do

    echo Sarika Fils-Aime >> results.txt
    'date' >> results.txt

    echo enter first number 
    read FirstNumber

    if [ $FirstNumber -eq 33 ]; then
        break
    fi

    echo enter second number
    read SecondNumber

    if [ $SecondNumber -eq 66 ]; then 
        break
    fi

    while [ $SecondNumber -eq 0 ] 
    do 
        echo you cant divide by 0. enter second number
        read SecondNumber
    done

    result=$((FirstNumber/SecondNumber))
    echo $FirstNumber "divided by " $SecondNumber " = " $result
    echo $FirstNumber "divided by " $SecondNumber " = " $result >> results.txt

done

echo printing out ACGT lines

head -1500 hs_alt_HuRef_chr10.fa | grep -o ACGT | wc -l








