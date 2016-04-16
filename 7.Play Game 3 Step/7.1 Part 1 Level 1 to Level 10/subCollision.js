#pragma strict

var scoreCountI1 : int = 0; 							//Count Score Item 1
var scoreCountI2 : int = 0; 							//Count Score Item 2
var scoreCountI3 : int = 0; 							//Count Score Item 3
var scoreCountI4 : int = 0;								//Count Score Item 4
var scoreCountI5 : int = 0; 							//Count Score Item 1
var scoreCountI6 : int = 0; 							//Count Score Item 2
var scoreCountI7 : int = 0; 							//Count Score Item 3
var scoreCountI8 : int = 0;								//Count Score Item 4
var scoreCountI9 : int = 0; 							//Count Score Item 3
var scoreCountI10 : int = 0;								//Count Score Item 4
//---------------------------------------------------------------------------->
var scoreSub1: int = 0;									//Score Result 
//---------------------------------------------------------------------------->
function OnTriggerEnter (other : Collider) {
	if(other.tag == "item1.1")	
	{			
		scoreCountI1 += 50;
		scoreResultLevel1();
		Destroy(other.gameObject);	
	}
	else if(other.tag == "item1.2")	
	{
		scoreCountI2 += 50;
		scoreResultLevel1();
		Destroy(other.gameObject);	
	}
	else if(other.tag == "item1.3")	
	{
		scoreCountI3 += 50;
		scoreResultLevel1();
		Destroy(other.gameObject);
	}
	else if(other.tag == "item1.4")	
	{
		scoreCountI4 += 50; 
		scoreResultLevel1();
		Destroy(other.gameObject);
	}
	else if(other.tag == "item1.5")	
	{
		scoreCountI5 += 50;
		scoreResultLevel1();
		Destroy(other.gameObject);	
	}
	else if(other.tag == "item1.6")	
	{
		scoreCountI6 += 50;
		scoreResultLevel1();
		Destroy(other.gameObject);
	}
	else if(other.tag == "item1.7")	
	{
		scoreCountI7 += 50; 
		scoreResultLevel1();
		Destroy(other.gameObject);
	}
	else if(other.tag == "item1.8")	
	{
		scoreCountI8 += 50;
		scoreResultLevel1();
		Destroy(other.gameObject);	
	}
	else if(other.tag == "item1.9")	
	{
		scoreCountI9 += 50;
		scoreResultLevel1();
		Destroy(other.gameObject);
	}
	else if(other.tag == "item1.10")	
	{
		scoreCountI10 += 50; 
		scoreResultLevel1();
		Destroy(other.gameObject);
	}
}

function scoreResultLevel1() {
	scoreSub1 = scoreCountI1 + scoreCountI2 + scoreCountI3 + scoreCountI4 
				+ scoreCountI5 + scoreCountI6 + scoreCountI7 + scoreCountI8
				+ scoreCountI9 + scoreCountI10;
	PlayerPrefs.SetInt("ScoreSub1", scoreSub1);							
}