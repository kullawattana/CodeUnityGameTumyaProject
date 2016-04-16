#pragma strict

var gameTime:float = 5.0f;
/*
var scoreI1 : int = 200; 
var scoreI2 : int = 200;
var scoreI3 : int = 200;
var scoreI4 : int = 200;
var scoreI5 : int = 200;
var scoreI6 : int = 200;
*/

var textItem1 : TextMesh; 
var textItem2 : TextMesh; 
var textItem3 : TextMesh; 
var textItem4 : TextMesh; 
var textItem5 : TextMesh; 
var textItem6 : TextMesh; 

function Awake() { 
	textItem1.text = "" + PlayerPrefs.GetInt("ScoreItem1-P1L7");				//My Score
	textItem2.text = "" + PlayerPrefs.GetInt("ScoreItem2-P1L7");				//My Score
	textItem3.text = "" + PlayerPrefs.GetInt("ScoreItem3-P1L7");				//My Score
	textItem4.text = "" + PlayerPrefs.GetInt("ScoreItem4-P1L7");				//My Score
	textItem5.text = "" + PlayerPrefs.GetInt("ScoreItem5-P1L7");				//My Score
	textItem6.text = "" + PlayerPrefs.GetInt("ScoreItem6-P1L7");				//My Score
}

function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){		
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		Application.LoadLevel("ScoreResultP1-L7");
	}
}

function OnGUI(){
	GUI.Label(Rect(10,10,100,200),"Time : " + gameTime);
}