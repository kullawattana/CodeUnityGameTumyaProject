#pragma strict

//Item Score
var scoreCount_L1 : int = 0; 				//Count Score Item 1
var scoreCount_L2 : int = 0; 				//Count Score Item 2
var scoreCount_L3 : int = 0; 				//Count Score Item 3
var scoreCount_L4 : int = 0;				//Count Score Item 4
var scoreCount_L5 : int = 0; 				//Count Score Item 5
var scoreCount_L6 : int = 0; 				//Count Score Item 6
var scoreCount_L7 : int = 0;				//Count Score Item 7
//---------------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;								//Click Sound
var isPlayingAudio : boolean = false; 					//Check Play Audio by using Toggle
//---------------------------------------------------------------------------------------------------------->
var scoreResult_right: int;									//Score Result
var textScore: TextMesh = new TextMesh();				//Show Score on Text Mesh
//---------------------------------------------------------------------------------------------------------->

/*
var scoreI1 : int = 200;  = 60 ML
var scoreI2 : int = 150;  = 10 ML
var scoreI3 : int = 100;  = 5 ML
var scoreI4 : int = 50;   = 0.5 ML 
var scoreI5 : int = 50;   = 0.45 ML
var scoreI6 : int = 50;   = 0.05 ML
var scoreI7 : int = 50;   = 0.01 ML 
*/

function OnTriggerEnter (other : Collider) {		
	if(other.tag == "cube1")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        			
		scoreCount_L1 += 60;
		Destroy(other.gameObject);
		scoreResultLevel3();
	}
	else if(other.tag == "cube2")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        	
		scoreCount_L2 += 10;
		Destroy(other.gameObject);
		scoreResultLevel3();
	}
	else if(other.tag == "cube3")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        	
		scoreCount_L3 += 5;
		Destroy(other.gameObject);
		scoreResultLevel3();
	}
	else if(other.tag == "cube4")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
        
		scoreCount_L4 += 0.5;
		Destroy(other.gameObject);
		scoreResultLevel3();
	}
	else if(other.tag == "cube5")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        	
		scoreCount_L5 += 0.45;
		Destroy(other.gameObject);
		scoreResultLevel3();
	}
	else if(other.tag == "cube6")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
        
		scoreCount_L6 += 0.05;
		Destroy(other.gameObject);
		scoreResultLevel3();
	}
	else if(other.tag == "cube7")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
        
		scoreCount_L7 += 0.01;
		Destroy(other.gameObject);
		scoreResultLevel3();
	}	
}

function scoreResultLevel3() {
	scoreResult_right = scoreCount_L1 + scoreCount_L2 + scoreCount_L3 + scoreCount_L4
					+ scoreCount_L5 + scoreCount_L6 + scoreCount_L7; 
	textScore.text = scoreResult_right.ToString();
}

function gameOver() {
	PlayerPrefs.GetInt("ScoreItem1-P2L3-R");						//My Score Item 1
	PlayerPrefs.SetInt("ScoreItem1-P2L3-R", scoreCount_L1);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem2-P2L3-R");						//My Score Item 2
	PlayerPrefs.SetInt("ScoreItem2-P2L3-R", scoreCount_L2);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem3-P2L3-R");						//My Score Item 3
	PlayerPrefs.SetInt("ScoreItem3-P2L3-R", scoreCount_L3);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem4-P2L3-R");						//My Score Item 4
	PlayerPrefs.SetInt("ScoreItem4-P2L3-R", scoreCount_L4);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem5-P2L3-R");						//My Score Item 5
	PlayerPrefs.SetInt("ScoreItem5-P2L3-R", scoreCount_L5);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem6-P2L3-R");						//My Score Item 6
	PlayerPrefs.SetInt("ScoreItem6-P2L3-R", scoreCount_L6);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem7-P2L3-R");						//My Score Item 7
	PlayerPrefs.SetInt("ScoreItem7-P2L3-R", scoreCount_L7);
	//*******************************************************************************************
	
	PlayerPrefs.GetInt("ScoreLevel_P2L3-R");						//My Score
	PlayerPrefs.SetInt("ScoreLevel_P2L3-R", scoreResult_right);
}