#pragma strict

var gameTime:float = 5.0f;

/*
var scoreI1 : int = 200; 
var scoreI2 : int = 150;
var scoreI3 : int = 100;
var scoreI4 : int = 100;
var scoreI5 : int = 50;
var scoreI6 : int = 50;
var scoreI7 : int = 50;
var scoreI8 : int = 50;
*/

var textItem1 : TextMesh; 
var textItem2 : TextMesh; 
var textItem3 : TextMesh; 
var textItem4 : TextMesh; 
var textItem5 : TextMesh; 
var textItem6 : TextMesh; 
var textItem7 : TextMesh; 
var textItem8 : TextMesh;

function Awake() { 
	textItem1.text = "" + PlayerPrefs.GetInt("ScoreItem1-P1L6");				//My Score
	textItem2.text = "" + PlayerPrefs.GetInt("ScoreItem2-P1L6");				//My Score
	textItem3.text = "" + PlayerPrefs.GetInt("ScoreItem3-P1L6");				//My Score
	textItem4.text = "" + PlayerPrefs.GetInt("ScoreItem4-P1L6");				//My Score
	textItem5.text = "" + PlayerPrefs.GetInt("ScoreItem5-P1L6");				//My Score
	textItem6.text = "" + PlayerPrefs.GetInt("ScoreItem6-P1L6");				//My Score
	textItem7.text = "" + PlayerPrefs.GetInt("ScoreItem7-P1L6");				//My Score
	textItem8.text = "" + PlayerPrefs.GetInt("ScoreItem8-P1L6");				//My Score
}

function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){		
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		Application.LoadLevel("ScoreResultP1-L6");
	}
}

function OnGUI(){
	GUI.Label(Rect(10,10,100,200),"Time : " + gameTime);
}