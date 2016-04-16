#pragma strict

var scoreCount_1 : int = 0; 				//Count Score Item 1
var scoreCount_2 : int = 0; 				//Count Score Item 2
var scoreCount_3 : int = 0; 				//Count Score Item 3
var scoreCount_4 : int = 0;					//Count Score Item 4
var scoreCount_5 : int = 0;					//Count Score Item 5
var scoreCount_6 : int = 0; 				//Count Score Item 6
var scoreCount_7 : int = 0; 				//Count Score Item 7
var scoreCount_8 : int = 0; 				//Count Score Item 8
var scoreCount_9 : int = 0;					//Count Score Item 9
var scoreCount_10 : int = 0;				//Count Score Item 10
//-------------------------------------------------------------------------------------------------->
var counterHit1 : int = 0;
var counterHit2 : int = 0;
var counterHit3 : int = 0;
var counterHit4 : int = 0;
//-------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;						//Click Sound
var isPlayingAudio : boolean = false; 			//Check Play Audio by using Toggle
//-------------------------------------------------------------------------------------------------->
var textDisplayScore:TextMesh = new TextMesh();		//Show Score on Text Mesh
var textDisplayTime:TextMesh = new TextMesh();		//Show Score on Text Mesh
//---------------------------------------------------------------------------->
var scoreResult: int;							//Score Result
//---------------------------------------------------------------------------->
var gameTime:float = 30.0f;						//CountDown Time

//----------------------------------------------------------------------------> // CountDown Function
function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){	
	textDisplayTime.text = gameTime.ToString();
	
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		print("time out");
		gameOver();								//Send Score to Save
	}
}
//---------------------------------------------------------------------------->

function OnTriggerEnter (other : Collider) {		
	if(other.tag == "item1.1")					//4  == 50
	{
		isPlayingAudio = true;					//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        //------------------------------------------------------------------------------------------>
        
		renderer.material.color = Color.black;
		counterHit1 = counterHit1 + 1;			//Counter Object
		
		if(counterHit1 == 1)						
		{
			other.renderer.material.color = Color.red;
			scoreCount_1 += 10;
			scoreResultLevel1();
		}
		else if(counterHit1 == 2)			
		{
			other.renderer.material.color = Color.red;
			scoreCount_2 += 10;
			scoreResultLevel1();
		}
		else if(counterHit1 == 3)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_3 += 10;
			scoreResultLevel1();
		}
		else if(counterHit1 == 4)					
		{
			other.renderer.material.color = Color.yellow;
			scoreCount_4 += 20;
			scoreResultLevel1();
		}
		else 
		{
			Destroy(other.gameObject);
		}
	}
	
	else if(other.tag == "item1.2")				//6 == 100
	{
		isPlayingAudio = true;					//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        //------------------------------------------------------------------------------------------>
        
		renderer.material.color = Color.black;
		counterHit2 = counterHit2 + 1;			//Counter Object
		if(counterHit2 == 1)						
		{
			other.renderer.material.color = Color.red;
			scoreCount_1 += 20;
			scoreResultLevel1();
		}
		else if(counterHit2 == 2)			
		{
			other.renderer.material.color = Color.red;
			scoreCount_2 += 20;
			scoreResultLevel1();
		}
		else if(counterHit2 == 3)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_3 += 20;
			scoreResultLevel1();
		}
		else if(counterHit2 == 4)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_4 += 20;
			scoreResultLevel1();
		}
		else if(counterHit2 == 5)					
		{
			other.renderer.material.color = Color.yellow;
			scoreCount_5 += 10;
			scoreResultLevel1();
		}
		else if(counterHit2 == 6)					
		{
			other.renderer.material.color = Color.yellow;
			scoreCount_6 += 10;
			scoreResultLevel1();
		}
		else 
		{
			Destroy(other.gameObject);
		}
	}
	
	else if(other.tag == "item1.3")				//8 == 150
	{
		isPlayingAudio = true;					//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        //------------------------------------------------------------------------------------------>
        
		renderer.material.color = Color.black;
		counterHit3 = counterHit3 + 1;			//Counter Object
		if(counterHit3 == 1)						
		{
			other.renderer.material.color = Color.red;
			scoreCount_1 += 20;
			scoreResultLevel1();
		}
		else if(counterHit3 == 2)			
		{
			other.renderer.material.color = Color.red;
			scoreCount_2 += 20;
			scoreResultLevel1();
		}
		else if(counterHit3 == 3)					
		{
			other.renderer.material.color = Color.red;
			scoreCount_3 += 20;
			scoreResultLevel1();
		}
		else if(counterHit3 == 4)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_4 += 20;
			scoreResultLevel1();
		}
		else if(counterHit3 == 5)			
		{
			other.renderer.material.color = Color.gray;
			scoreCount_5 += 20;
			scoreResultLevel1();
		}
		else if(counterHit3 == 6)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_6 += 20;
			scoreResultLevel1();
		}
		else if(counterHit3 == 7)					
		{
			other.renderer.material.color = Color.yellow;
			scoreCount_7 += 20;
			scoreResultLevel1();
		}
		else if(counterHit3 == 8)					
		{
			other.renderer.material.color = Color.yellow;
			scoreCount_8 += 10;
			scoreResultLevel1();
		}
		else 
		{
			Destroy(other.gameObject);
		}
	}
	
	else if(other.tag == "item1.4")				//10	== 200
	{
		isPlayingAudio = true;					//Audio Play
        audio.clip = Trigger;				
        audio.Play();
        //------------------------------------------------------------------------------------------>
        
		renderer.material.color = Color.black;
		counterHit4 = counterHit4 + 1;			//Counter Object
		if(counterHit4 == 1)						
		{
			other.renderer.material.color = Color.red;
			scoreCount_1 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 2)			
		{
			other.renderer.material.color = Color.red;
			scoreCount_2 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 3)					
		{
			other.renderer.material.color = Color.red;
			scoreCount_3 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 4)					
		{
			other.renderer.material.color = Color.red;
			scoreCount_4 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 5)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_5 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 6)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_6 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 7)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_7 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 8)					
		{
			other.renderer.material.color = Color.gray;
			scoreCount_8 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 9)					
		{
			other.renderer.material.color = Color.yellow;
			scoreCount_9 += 20;
			scoreResultLevel1();
		}
		else if(counterHit4 == 10)					
		{
			other.renderer.material.color = Color.yellow;
			scoreCount_10 += 20;
			scoreResultLevel1();
		}
		else 
		{
			Destroy(other.gameObject);
		}
	}
}

function scoreResultLevel1() {
	scoreResult = scoreCount_1 + scoreCount_2 + scoreCount_3 + scoreCount_4 + scoreCount_5
				+ scoreCount_6 + scoreCount_7 + scoreCount_8 + scoreCount_9 + scoreCount_10;
	textDisplayScore.text = scoreResult.ToString();
	print(scoreResult);
}

function gameOver() {
	PlayerPrefs.GetInt("ScoreLevelP3L3");						//My Score
	PlayerPrefs.SetInt("ScoreLevelP3L3", scoreResult);
	//****************************************************
	if(scoreResult > PlayerPrefs.GetInt("MaxScoreP3L3")) 			//Maximum Score
	{ 
		PlayerPrefs.SetInt("MaxScoreP3L3", scoreResult);			//Set Maximum Score
	}		
	
	Application.LoadLevel("ScoreResultP3-L3");
}