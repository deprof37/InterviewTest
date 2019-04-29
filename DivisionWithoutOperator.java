/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Arrays;

/**
 *
 * @author Adeife
 */
public class DivisionWithoutOperator {
    
    public static void main(String [] args){
        int a = 6;
        int b = -5;
        int remainder = 0;
        
        int result = (a > b) ? a : b;
        result = Math.abs(result);
        int counter = 0;
        
        if((a > 0 && b > 0)){
            while(result >= Math.abs(b)){
                result = result - Math.abs(b);
                counter++;
            }
            remainder = a - (Math.abs(b) * counter);
            System.out.println("if was done");
        }
        else if ((a < 0 && b < 0)){
            result = Math.abs(a);
            while(result >= Math.abs(b)){
                result = result - Math.abs(b);
                counter++;
            }
            remainder = a - (b * counter);
            System.out.println("if2 was done");
        }
        else {
        while(result >= 0){
            result = result - Math.abs(b);
            counter++;
        }
        
        if(b < 0 && a > 0) {
            counter = counter * -1;
            remainder = a-(b*counter);
        }
        else if (a < 0 && b > 0){
            remainder = a-(b*counter) * -1;
            counter = counter * -1;
        }
        }
        System.out.println("Quotient is : "  + counter + " remainder is : " + remainder);
    }
}
