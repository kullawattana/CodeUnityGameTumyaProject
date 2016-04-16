#pragma strict
//Level 1 : 4 Items

var scoreCount_1 : int = 0; 						//Count Score Item 1
var scoreCount_2 : int = 0; 						//Count Score Item 2
var scoreCount_3 : int = 0; 						//Count Score Item 3
var scoreCount_4 : int = 0;							//Count Score Item 4
//-------------------------------------------------------------------------------------------------->							
var Trigger : AudioClip;							//Click Sound
var isPlayingAudio : boolean = false; 				//Check Play Audio by using Toggle
//-------------------------------------------------------------------------------------------------->
var textDisplayScore:TextMesh = new TextMesh();		//Show Score on Text Mesh
var textDisplayTime:TextMesh = new TextMesh();		//Show Score on Text Mesh
//---------------------------------------------------------------------------->
var scoreResult: int;								//Score Result
//---------------------------------------------------------------------------->
var gameTime:float = 60.0f;							//CountDown Time = 30 seconds
//---------------------------------------------------------------------------->
var subCube_1 : GameObject;							//Sub Show Item 1
var subCube_2 : GameObject;							//Sub Show Item 2
var subCube_3 : GameObject;							//Sub Show Item 3
var subCube_4 : GameObject;							//Sub Show Item 4
//---------------------------------------------------------------------------->
var textShowWeight: TextMesh = new TextMesh();
var textShowWeight2: TextMesh = new TextMesh();					
var scoreWeightResult : int = 0;

/*
var scoreI1 : int = 200;  = 100 ML 
var scoreI2 : int = 150;  = 80 ML 
var scoreI3 : int = 200;  = 100 ML
var scoreI4 : int = 100;  = 10 ML 
*/

var scoreWeight_1 : int = 0;
var scoreWeight_2 : int = 0;
var scoreWeight_3 : int = 0;
var scoreWeight_4 : int = 0;

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
		scoreWeight_1 += 100;
		scoreCount_1 += 200;
		
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
		scoreWeight_2 += 80;
		scoreCount_2 += 150;
		
		scoreResultLevel1();
		scoreWeight();
	}
	else if(other.tag == "item1.3")	
	{
		isPlayingAudio = true;						//Audio Play
        audio.clip = Trigger;				
        audio.Play();
		Destroy(other.gameObject);
		
		var subCube_item3 : GameObject = Instantiate(subCube_3, transform.position, transform.rotation) as GameObject;		
		scoreWeight_3 += 100;
		scoreCount_3 += 200;
		
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
		scoreWeight_4 += 10;
		scoreCount_4 += 100;
		
		scoreResultLevel1();
		scoreWeight();
	}
}

function scoreResultLevel1() {
	scoreResult = scoreCount_1 + scoreCount_2 + scoreCount_3 + scoreCount_4;
	textDisplayScore.text = scoreResult.ToString();
}

function scoreWeight() {
	scoreWeightResult = scoreWeight_1 + scoreWeight_2 + scoreWeight_3 + scoreWeight_4;
	textShowWeight.text = scoreWeightResult.ToString();
	textShowWeight2.text = scoreWeightResult.ToString() + "ml.";
}

function gameOver() {
	PlayerPrefs.GetInt("ScoreItem1-P2L1");						//My Score Item 1
	PlayerPrefs.SetInt("ScoreItem1-P2L1", scoreCount_1);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem2-P2L1");						//My Score Item 2
	PlayerPrefs.SetInt("ScoreItem2-P2L1", scoreCount_2);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem3-P2L1");						//My Score Item 3
	PlayerPrefs.SetInt("ScoreItem3-P2L1", scoreCount_3);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem4-P2L1");						//My Score Item 4
	PlayerPrefs.SetInt("ScoreItem4-P2L1", scoreCount_4);
	//*******************************************************************************************
	
	PlayerPrefs.GetInt("ScoreLevel_P2L1");						//My Score
	PlayerPrefs.SetInt("ScoreLevel_P2L1", scoreResult);
	
	if(scoreResult > PlayerPrefs.GetInt("Score_P2L1")) 			//If Maximum Score
	{ 
		PlayerPrefs.SetInt("Score_P2L1", scoreResult);			//Set Maximum Score
	}		
	Application.LoadLevel("ScoreResultP2-L1");					//Next to Coclision Score Level
}