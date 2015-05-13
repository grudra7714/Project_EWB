import java.util.*;

class Main{
	public static void main(String args[])
	{
		abcd a = new abcd();

		a.show();		
	}
}

class abc{
	void show()
	{
		System.out.println("This is SPARTAAA.....");
	}
}


class abcd extends abc{	
	void show()
	{	
		System.out.println("Hey.......");
	}
}