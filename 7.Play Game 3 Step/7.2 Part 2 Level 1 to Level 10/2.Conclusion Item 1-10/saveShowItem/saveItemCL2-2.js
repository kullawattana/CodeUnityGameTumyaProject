#pragma strict

var gameTime:float = 5.0f;

var textItem1 : TextMesh; 
var textItem2 : TextMesh; 
var textItem3 : TextMesh; 
var textItem4 : TextMesh; 

function Awake() { 
	textItem1.text = "" + PlayerPrefs.GetInt("ScoreItem1-P2L2") + PlayerPrefs.GetInt("ScoreItem1-P2L2-R");				//My Score
	textItem2.text = "" + PlayerPrefs.GetInt("ScoreItem2-P2L2") + PlayerPrefs.GetInt("ScoreItem2-P2L2-R");				//My Score
	textItem3.text = "" + PlayerPrefs.GetInt("ScoreItem3-P2L2") + PlayerPrefs.GetInt("ScoreItem3-P2L2-R");				//My Score
	textItem4.text = "" + PlayerPrefs.GetInt("ScoreItem4-P2L2") + PlayerPrefs.GetInt("ScoreItem4-P2L2-R");				//My Score
}

function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){		
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		Application.LoadLevel("ScoreResultP1-L2");
	}
}

function OnGUI(){
	GUI.Label(Rect(10,10,100,200),"Time : " + gameTime);
}