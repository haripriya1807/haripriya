
// find the array an given number is present or not 
,if num is present find index value .


public class Main{
    public static void main(String[] args) {
        int[] a = {1, 2, 3, 4, 5};
        int num = 2;
        int index = -1;
        for (int i = 0; i < a.length; i++) {
            if (a[i] == num) {
                index = i;
                break;
            }
        }
        if (index != -1) {
            System.out.println("given number " + num + " is present at");
            System.out.println("index_"+index);
        } else {
            System.out.println("given number " + num + " is not present in the array_");
            System.out.println(-1);
        }
    }
}
