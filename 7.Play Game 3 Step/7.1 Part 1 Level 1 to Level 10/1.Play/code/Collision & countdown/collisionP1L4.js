#pragma strict

var scoreCountItem1 : int = 0; 							//Count Score Item 1
var scoreCountItem2 : int = 0; 							//Count Score Item 2
var scoreCountItem3 : int = 0; 							//Count Score Item 3
var scoreCountItem4 : int = 0;							//Count Score Item 4
var scoreCountItem5 : int = 0; 							//Count Score Item 5
var scoreCountItem6 : int = 0; 							//Count Score Item 6
var scoreCountItem7 : int = 0;							//Count Score Item 7
//---------------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;								//Click Sound
var isPlayingAudio : boolean = false; 					//Check Play Audio by using Toggle
//---------------------------------------------------------------------------------------------------------->
var scoreResult: int;									//Score Result
var textScore: TextMesh = new TextMesh();				//Show Score on Text Mesh
//---------------------------------------------------------------------------------------------------------->
var gameTime: float = 60.0f;							//Time Result
var textTime: TextMesh;									//Show Time on Text Mesh
//---------------------------------------------------------------------------------------------------------->
var textShowScore: TextMesh = new TextMesh();			//Show Score Items on Text Mesh
var scoreI1 : int = 200; 
var scoreI2 : int = 200;
var scoreI3 : int = 200;
var scoreI4 : int = 200;
var scoreI5 : int = 200;
var scoreI6 : int = 100;
var scoreI7 : int = 100;
//---------------------------------------------------------------------------------------------------------->
var subtract : int = 0;
//---------------------------------------------------------------------------------------------------------->
var Trigger1 : AudioClip;								
var isPlayingAudio1 : boolean = false; 	

function Awake() { 
	scoreResultLevel4();
}

function OnTriggerEnter (other : Collider) {		
	if(other.tag == "item1.1")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
		scoreCountItem1 += 200;
		Destroy(other.gameObject);
		scoreResultLevel4();
		
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
		scoreCountItem2 += 200;
		Destroy(other.gameObject);
		scoreResultLevel4();
		
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
		Destroy(other.gameObject);
		scoreResultLevel4();
		
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
		scoreCountItem4 += 200;
		Destroy(other.gameObject);
		scoreResultLevel4();
		
		textShowScore.text = "+" + scoreI4.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;
	}
	else if(other.tag == "item1.5")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
		scoreCountItem5 += 200;
		Destroy(other.gameObject);
		scoreResultLevel4();
		
		textShowScore.text = "+" + scoreI5.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;
	}
	else if(other.tag == "item1.6")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
		scoreCountItem6 += 100;
		Destroy(other.gameObject);
		scoreResultLevel4();
		
		textShowScore.text = "+" + scoreI6.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;
	}
	else if(other.tag == "item1.7")	
	{
		isPlayingAudio = true;				//Audio Play
        audio.clip = Trigger;				
        audio.Play();	
		scoreCountItem7 += 100;
		Destroy(other.gameObject);
		scoreResultLevel4();
		
		textShowScore.text = "+" + scoreI7.ToString();
		textShowScore.active = true;
		yield WaitForSeconds (1);
		textShowScore.active = false;
	}
}

function scoreResultLevel4() {
	scoreResult = scoreCountItem1 + scoreCountItem2 + scoreCountItem3 + scoreCountItem4
				+ scoreCountItem5 + scoreCountItem6 + scoreCountItem7;
	textScore.text = scoreResult.ToString();
	print(scoreResult);
}

//---------------------------------------------------------------------------------------------------------->
//Countdown
function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){
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
	PlayerPrefs.GetInt("ScoreItem1-P1L4");						//My Score Item 1
	PlayerPrefs.SetInt("ScoreItem1-P1L4", scoreCountItem1);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem2-P1L4");						//My Score Item 2
	PlayerPrefs.SetInt("ScoreItem2-P1L4", scoreCountItem2);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem3-P1L4");						//My Score Item 3
	PlayerPrefs.SetInt("ScoreItem3-P1L4", scoreCountItem3);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem4-P1L4");						//My Score Item 4
	PlayerPrefs.SetInt("ScoreItem4-P1L4", scoreCountItem4);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem5-P1L4");						//My Score Item 5
	PlayerPrefs.SetInt("ScoreItem5-P1L4", scoreCountItem5);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem6-P1L4");						//My Score Item 6
	PlayerPrefs.SetInt("ScoreItem6-P1L4", scoreCountItem6);
	//*******************************************************************************************
	PlayerPrefs.GetInt("ScoreItem7-P1L4");						//My Score Item 7
	PlayerPrefs.SetInt("ScoreItem7-P1L4", scoreCountItem7);
	//*******************************************************************************************
	
	PlayerPrefs.GetInt("ScoreSubP1L4");							//My Score
	PlayerPrefs.SetInt("ScoreSubP1L4", scoreResult);
	//****************************************************
	if(scoreResult > PlayerPrefs.GetInt("MaxScoreP1L4")) 			//Maximum Score
	{ 
		PlayerPrefs.SetInt("MaxScoreP1L4", scoreResult);			//Set Maximum Score
	}		
	
	Application.LoadLevel("Part1 CL1-4");
}