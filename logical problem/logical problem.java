

//Given an array arr[] of N positive integers. Push all the zeros of the given array to the right end of the array while maitaining the order of non-zero elements.


import java.util.*;
public class Main {
    public static void main(int[] arr) {
        int count = 0;
        for (int i = 0; i < arr.length; i++) {
            if (arr[i] != 0) {
                arr[count] = arr[i];
                count++;
            }
        }
        while (count < arr.length) {
            arr[count] = 0;
            count++;
      }
    }
    public static void main(String[] args) {
        int[] arr = {3, 0, 0, 0, 4};
        main(arr);
        System.out.println("Array after pushing zeros to the end: " + Arrays.toString(arr));
    }
}
