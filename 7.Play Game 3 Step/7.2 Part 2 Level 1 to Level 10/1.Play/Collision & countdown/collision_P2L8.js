#pragma strict
//4 Items

var scoreCount_1 : int = 0; 						//Count Score Item 1
var scoreCount_2 : int = 0; 						//Count Score Item 2
var scoreCount_3 : int = 0; 						//Count Score Item 3
var scoreCount_4 : int = 0;							//Count Score Item 4
var scoreCount_5 : int = 0; 						//Count Score Item 5
var scoreCount_6 : int = 0; 						//Count Score Item 6
var scoreCount_7 : int = 0;							//Count Score Item 7
var scoreCount_8 : int = 0; 						//Count Score Item 8
var scoreCount_9 : int = 0; 						//Count Score Item 9
var scoreCount_10 : int = 0;						//Count Score Item 10
//-------------------------------------------------------------------------------------------------->							
var Trigger : AudioClip;							//Click Sound
var isPlayingAudio : boolean = false; 				//Check Play Audio by using Toggle
//-------------------------------------------------------------------------------------------------->
var textDisplayScore:TextMesh = new TextMesh();		//Show Score on Text Mesh
var textDisplayTime:TextMesh = new TextMesh();		//Show Score on Text Mesh
//---------------------------------------------------------------------------->
var scoreResult: int;								//Score Result
//---------------------------------------------------------------------------->
var gameTime:float = 30.0f;							//CountDown Time = 30 seconds
//---------------------------------------------------------------------------->
var subCube_1 : GameObject;								//Sub Show Item 1
var subCube_2 : GameObject;								//Sub Show Item 2
var subCube_3 : GameObject;								//Sub Show Item 3
var subCube_4 : GameObject;								//Sub Show Item 4
var subCube_5 : GameObject;								//Sub Show Item 5
var subCube_6 : GameObject;								//Sub Show Item 6
var subCube_7 : GameObject;								//Sub Show Item 7
var subCube_8 : GameObject;								//Sub Show Item 8
var subCube_9 : GameObject;								//Sub Show Item 9
var subCube_10 : GameObject;							//Sub Show Item 10

/*
var scoreI1 : int = 100;  = 12 G
var scoreI2 : int = 25;   = 8 G
var scoreI3 : int = 100;  = 12 G
var scoreI4 : int = 25;   = 8 G
var scoreI5 : int = 100;  = 12 G
var scoreI6 : int = 50;   = 10 G
var scoreI7 : int = 150;  = 24 G
var scoreI8 : int = 20;   = 6 G
var scoreI9 : int = 200;  = 32 G
var scoreI10 : int = 10;  = 4 G
*/

var scoreWeight_1 : int = 0;
var scoreWeight_2 : int = 0;
var scoreWeight_3 : int = 0;
var scoreWeight_4 : int = 0;
var scoreWeight_5 : int = 0;
var scoreWeight_6 : int = 0;
var scoreWeight_7 : int = 0;
var scoreWeight_8 : int = 0;
var scoreWeight_9 : int = 0;
var scoreWeight_10 : int = 0;

var textShowWeight: TextMesh = new TextMesh();	
var textShowWeight2: TextMesh = new TextMesh();	
var scoreWeightResult : int = 0;

function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){	
	textDisplayTime.text = gameTime.ToString();
	
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		print("time out");
		gameOver();									//Send Score to Save to Next Scene
	}
}

function OnTriggerEnter (other : Collider) {	 		
	if(other.tag == "item1.1")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item1 : GameObject = Instantiate(subCube_1, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 12;
		scoreCount_1 += 100;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.2")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item2 : GameObject = Instantiate(subCube_2, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 8;
		scoreCount_1 += 25;
		
		scoreResultLevel1();
		scoreWeight();;
	}
	else if(other.tag == "item1.3")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item3 : GameObject = Instantiate(subCube_3, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 12;
		scoreCount_1 += 100;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.4")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item4 : GameObject = Instantiate(subCube_4, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 8;
		scoreCount_1 += 25;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.5")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item5 : GameObject = Instantiate(subCube_5, transform.position, transform.rotation) as GameObject;
		scoreWeight_1 += 12;
		scoreCount_1 += 100;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.6")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);
		
		var subCube_item6 : GameObject = Instantiate(subCube_6, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 10;
		scoreCount_1 += 50;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.7")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);
		
		var subCube_item7 : GameObject = Instantiate(subCube_7, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 24;
		scoreCount_1 += 150;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.8")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item8 : GameObject = Instantiate(subCube_8, transform.position, transform.rotation) as GameObject;	
		scoreWeight_1 += 6;
		scoreCount_1 += 20;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.9")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item9 : GameObject = Instantiate(subCube_9, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 32;
		scoreCount_1 += 200;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.10")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);

		var subCube_item10 : GameObject = Instantiate(subCube_10, transform.position, transform.rotation) as GameObject;		
		scoreWeight_1 += 4;
		scoreCount_1 += 10;
		
		scoreResultLevel1();
		scoreWeight();
	}
}

function scoreResultLevel1() {
	scoreResult = scoreCount_1 + scoreCount_2 + scoreCount_3 + scoreCount_4 
			+ scoreCount_5 + scoreCount_6 + scoreCount_7 + scoreCount_8 + scoreCount_9 + scoreCount_10;
	textDisplayScore.text = scoreResult.ToString();
	print(scoreResult);
}

function scoreWeight() {
	scoreWeightResult = scoreWeight_1 + scoreWeight_2 + scoreWeight_3 + scoreWeight_4
						+ scoreWeight_5 + scoreWeight_6 + scoreWeight_7 + scoreWeight_8
						+ scoreWeight_9 + scoreWeight_10;
	textShowWeight.text = scoreWeightResult.ToString();
	textShowWeight2.text = scoreWeightResult.ToString() + "g.";
}

function gameOver() {
	PlayerPrefs.GetInt("ScoreItem1-P2L8");						//My Score Item 1
	PlayerPrefs.SetInt("ScoreItem1-P2L8", scoreCount_1);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem2-P2L8");						//My Score Item 2
	PlayerPrefs.SetInt("ScoreItem2-P2L8", scoreCount_2);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem3-P2L8");						//My Score Item 3
	PlayerPrefs.SetInt("ScoreItem3-P2L8", scoreCount_3);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem4-P2L8");						//My Score Item 4
	PlayerPrefs.SetInt("ScoreItem4-P2L8", scoreCount_4);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem5-P2L8");						//My Score Item 5
	PlayerPrefs.SetInt("ScoreItem5-P2L8", scoreCount_5);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem6-P2L8");						//My Score Item 6
	PlayerPrefs.SetInt("ScoreItem6-P2L8", scoreCount_6);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem7-P2L8");						//My Score Item 7
	PlayerPrefs.SetInt("ScoreItem7-P2L8", scoreCount_7);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem8-P2L8");						//My Score Item 8
	PlayerPrefs.SetInt("ScoreItem8-P2L8", scoreCount_8);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem9-P2L8");						//My Score Item 9
	PlayerPrefs.SetInt("ScoreItem9-P2L8", scoreCount_9);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem10-P2L8");						//My Score Item 10
	PlayerPrefs.SetInt("ScoreItem10-P2L8", scoreCount_10);
	//*******************************************************************************************
	
	PlayerPrefs.GetInt("ScoreLevel_P2L8");						//My Score
	PlayerPrefs.SetInt("ScoreLevel_P2L8", scoreResult);
	
	if(scoreResult > PlayerPrefs.GetInt("Score_P2L8")) 			//If Maximum Score
	{ 
		PlayerPrefs.SetInt("Score_P2L8", scoreResult);			//Set Maximum Score
	}		
	Application.LoadLevel("scoreResult_P2L8");					//Next to Coclision Score Level
}