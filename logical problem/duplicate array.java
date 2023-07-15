import java.util.Arrays;
import java.util.LinkedHashSet;



// find the duplicate in array.
public class Main {
    public static int[] main(int[] arr) {
        LinkedHashSet<Integer> set = new LinkedHashSet<>();
        for (int num : arr) {
            set.add(num);
        }

        int[] uniqueArr = new int[set.size()];
        int index = 0;
        for (int num : set) {
            uniqueArr[index++] = num;
        }

        return uniqueArr;

good evening sir 
 solve the probelm,and working on project.
git uploaded. 
    }

    public static void main(String[] args) {
        int[] arr = {1, 2, 2, 3, 4, 4, 4, 5, 6, 6};
        int[] uniqueArr = main(arr);
        System.out.println("given number is duplicate : " + Arrays.toString(arr));
        System.out.println("Array number is  duplicates: " + Arrays.toString(uniqueArr));
    }
}

