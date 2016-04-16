#pragma strict

var scoreCount_L1 : int = 0; 							//Count Score Item 1
var scoreCount_L2 : int = 0; 							//Count Score Item 2
var scoreCount_L3 : int = 0; 							//Count Score Item 3
var scoreCount_L4 : int = 0;							//Count Score Item 4
//---------------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;								//Click Sound
var isPlayingAudio : boolean = false; 					//Check Play Audio by using Toggle
//---------------------------------------------------------------------------------------------------------->
var scoreResult_left: int;									//Score Result
var textScore: TextMesh = new TextMesh();				//Show Score on Text Mesh
//---------------------------------------------------------------------------------------------------------->

/*
var scoreI1 : int = 200; = 100 ML
var scoreI2 : int = 150; = 10 G
var scoreI3 : int = 200; = 100 ML
var scoreI4 : int = 200; = 100 ML 
*/

function OnTriggerEnter (other : Collider) {		
	if(other.tag == "cube1")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
        		
		scoreCount_L1 += 100;
		Destroy(other.gameObject);
		scoreResultLevel2();
	}
	else if(other.tag == "cube2")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        	
		scoreCount_L2 += 10;
		Destroy(other.gameObject);
		scoreResultLevel2();
	}
	else if(other.tag == "cube3")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        			
		scoreCount_L3 += 100;
		Destroy(other.gameObject);
		scoreResultLevel2();
	}
	else if(other.tag == "cube4")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        	
		scoreCount_L4 += 100; 
		Destroy(other.gameObject);
		scoreResultLevel2();
	}
}

function scoreResultLevel2() {
	scoreResult_left = scoreCount_L1 + scoreCount_L2 + scoreCount_L3 + scoreCount_L4;
	textScore.text = scoreResult_left.ToString() + "ml.";
}

function gameOver() {
	PlayerPrefs.GetInt("ScoreItem1-P2L2");						//My Score Item 1
	PlayerPrefs.SetInt("ScoreItem1-P2L2", scoreCount_L1);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem2-P2L2");						//My Score Item 2
	PlayerPrefs.SetInt("ScoreItem2-P2L2", scoreCount_L2);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem3-P2L2");						//My Score Item 3
	PlayerPrefs.SetInt("ScoreItem3-P2L2", scoreCount_L3);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem4-P2L2");						//My Score Item 4
	PlayerPrefs.SetInt("ScoreItem4-P2L2", scoreCount_L4);
	//*******************************************************************************************
	
	PlayerPrefs.GetInt("ScoreLevel_P2L2");						//My Score
	PlayerPrefs.SetInt("ScoreLevel_P2L2", scoreResult_left);
}