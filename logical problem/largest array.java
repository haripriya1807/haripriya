function findMinMax(arr) {
    if (arr === null || arr.length === 0) {
        console.log("Array is empty.");
        return;
    }

    let min = Math.min(...arr);
    let max = Math.max(...arr);

    console.log("Smallest number: " + min);
    console.log("Largest number: " + max);
}

let arr = [5, 2, 8, 9, 1, 3];
findMinMax(arr);

java//
import java.util.Arrays;

public class MinMaxElements {
    public static void findMinMax(int[] arr) {
        if (arr == null || arr.length == 0) {
            System.out.println("Array is empty.");
            return;
        }

        int min = Arrays.stream(arr).min().getAsInt();
        int max = Arrays.stream(arr).max().getAsInt();

        System.out.print("Smallest number:" + min);
    
        
        System.out.println("Largest number: " + max);
    }

    public static void main(String[] args) {
        int[] arr = {5, 2, 8, 9, 1, 3};
        findMinMax(arr);
    }
}

