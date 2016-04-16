#pragma strict

var scoreCountItem1 : int = 0; 							//Count Score Item 1
var scoreCountItem2 : int = 0; 							//Count Score Item 2
var scoreCountItem3 : int = 0; 							//Count Score Item 3
var scoreCountItem4 : int = 0;							//Count Score Item 4
//---------------------------------------------------------------------------->
var Trigger : AudioClip;								//Click Sound
var isPlayingAudio : boolean = false; 					//Check Play Audio by using Toggle
//---------------------------------------------------------------------------------------------------------->
var scoreResult: int;									//Score Result
var textScore: TextMesh = new TextMesh();				//Show Score on Text Mesh
//---------------------------------------------------------------------------------------------------------->
var gameTime: float = 60.0f;							//Time Result
var textTime: TextMesh = new TextMesh();
//---------------------------------------------------------------------------------------------------------->
var textShowScore: TextMesh = new TextMesh();			//Show Score Items on Text Mesh
var scoreI1 : int = 200; 
var scoreI2 : int = 150;
var scoreI3 : int = 200;
var scoreI4 : int = 100;
//----------------------------------------------------------------------------------------------------------->
var subtract : int = 0;
//----------------------------------------------------------------------------------------------------------->
var Trigger1 : AudioClip;								
var isPlayingAudio1 : boolean = false; 						

function Awake() { 
	scoreResultLevel1();
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "item1.1")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();				
		
		scoreCountItem1 += 200;
		scoreResultLevel1();
		Destroy(other.gameObject);
		
		textShowScore.text = "+" + scoreI1.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;		
	}
	else if(other.tag == "item1.2")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();						
		
		scoreCountItem2 += 150;
		scoreResultLevel1();
		Destroy(other.gameObject);	
		
		textShowScore.text = "+" + scoreI2.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;	
	}
	else if(other.tag == "item1.3")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();						
		
		scoreCountItem3 += 200;
		scoreResultLevel1();
		Destroy(other.gameObject);
		
		textShowScore.text = "+" + scoreI3.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;	
	}
	else if(other.tag == "item1.4")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();						
		
		scoreCountItem4 += 100; 
		scoreResultLevel1();
		Destroy(other.gameObject);
		
		textShowScore.text = "+" + scoreI4.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;	
	}
}

function scoreResultLevel1() {			
	scoreResult = (scoreCountItem1 + scoreCountItem2 + scoreCountItem3 + scoreCountItem4);
	textScore.text = scoreResult.ToString(); 
}

//---------------------------------------------------------------------------------------------------------->
//Countdown
function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){										//Block Countdown
	textTime.text = gameTime.ToString();
	
	if(gameTime == 5)	 					
	{
		isPlayingAudio1 = true;				//Audio Play
        audio.clip = Trigger1;				
        audio.Play();	
		textTime.renderer.material.color = Color.yellow;
	}
		
	if(gameTime == 4)	 					
	{
		isPlayingAudio1 = true;				//Audio Play
        audio.clip = Trigger1;				
        audio.Play();	
		textTime.renderer.material.color = Color.yellow;
	}
		
	if(gameTime == 3)	 					
	{
		isPlayingAudio1 = true;				//Audio Play
        audio.clip = Trigger1;				
        audio.Play();	
		textTime.renderer.material.color = Color.yellow;
	}
	
	if(gameTime == 2)	 					
	{
		isPlayingAudio1 = true;				//Audio Play
        audio.clip = Trigger1;				
        audio.Play();	
		textTime.renderer.material.color = Color.yellow;
	}	
	
	if(gameTime == 1)	 					
	{
		isPlayingAudio1 = true;				//Audio Play
        audio.clip = Trigger1;				
        audio.Play();	
		textTime.renderer.material.color = Color.yellow;
	}
		
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		print("time out");
		gameOver();								//Send Score to Save
	}
}
//---------------------------------------------------------------------------------------------------------->
function gameOver() {
	PlayerPrefs.GetInt("ScoreItem1-P1L1");						//My Score Item 1
	PlayerPrefs.SetInt("ScoreItem1-P1L1", scoreCountItem1);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem2-P1L1");						//My Score Item 2
	PlayerPrefs.SetInt("ScoreItem2-P1L1", scoreCountItem2);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem3-P1L1");						//My Score Item 3
	PlayerPrefs.SetInt("ScoreItem3-P1L1", scoreCountItem3);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem4-P1L1");						//My Score Item 4
	PlayerPrefs.SetInt("ScoreItem4-P1L1", scoreCountItem4);
	//*******************************************************************************************
	
	PlayerPrefs.GetInt("ScoreSubP1L1");
	PlayerPrefs.SetInt("ScoreSubP1L1", scoreResult); 
	
	if(scoreResult > PlayerPrefs.GetInt("MaxScoreP1L1"))  				//Maximum Score
	{ 
		PlayerPrefs.SetInt("MaxScoreP1L1", scoreResult);					//Set Maximum Score 
	}		
	
	Application.LoadLevel("Part1 CL1-1");
}