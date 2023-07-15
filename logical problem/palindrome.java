public class Main{
    public static void main(String[]args){
        String a="cursor";
        String b="";
        for(int i=a.length()-1;i>=0;i--){
            b=b+a.charAt(i);
        }
        System.out.println(b);
        if(a.equals(b)){
                System.out.println("palindrome");
        }
        else {
            System.out.println("not palindrome");
        }
    }
    }
