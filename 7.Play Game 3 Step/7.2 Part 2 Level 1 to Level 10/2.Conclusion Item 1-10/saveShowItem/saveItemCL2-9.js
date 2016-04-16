#pragma strict

var gameTime:float = 5.0f;

var textItem1 : TextMesh; 
var textItem2 : TextMesh; 
var textItem3 : TextMesh; 
var textItem4 : TextMesh; 
var textItem5 : TextMesh; 
var textItem6 : TextMesh; 
var textItem7 : TextMesh; 
var textItem8 : TextMesh; 
var textItem9 : TextMesh; 
var textItem10 : TextMesh; 

function Awake() { 
	textItem1.text = "" + PlayerPrefs.GetInt("ScoreItem1-P2L9") + PlayerPrefs.GetInt("ScoreItem1-P2L9-R");				//My Score
	textItem2.text = "" + PlayerPrefs.GetInt("ScoreItem2-P2L9") + PlayerPrefs.GetInt("ScoreItem2-P2L9-R");				//My Score
	textItem3.text = "" + PlayerPrefs.GetInt("ScoreItem3-P2L9") + PlayerPrefs.GetInt("ScoreItem3-P2L9-R");				//My Score
	textItem4.text = "" + PlayerPrefs.GetInt("ScoreItem4-P2L9") + PlayerPrefs.GetInt("ScoreItem4-P2L9-R");				//My Score
	textItem5.text = "" + PlayerPrefs.GetInt("ScoreItem5-P2L9") + PlayerPrefs.GetInt("ScoreItem5-P2L9-R");				//My Score
	textItem6.text = "" + PlayerPrefs.GetInt("ScoreItem6-P2L9") + PlayerPrefs.GetInt("ScoreItem6-P2L9-R");				//My Score
	textItem7.text = "" + PlayerPrefs.GetInt("ScoreItem7-P2L9") + PlayerPrefs.GetInt("ScoreItem7-P2L9-R");				//My Score
	textItem8.text = "" + PlayerPrefs.GetInt("ScoreItem8-P2L9") + PlayerPrefs.GetInt("ScoreItem8-P2L9-R");				//My Score
	textItem9.text = "" + PlayerPrefs.GetInt("ScoreItem9-P2L9") + PlayerPrefs.GetInt("ScoreItem9-P2L9-R");				//My Score
	textItem10.text = "" + PlayerPrefs.GetInt("ScoreItem10-P2L9") + PlayerPrefs.GetInt("ScoreItem10-P2L9-R");				//My Score
}

function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){		
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		Application.LoadLevel("ScoreResultP1-L9");
	}
}

function OnGUI(){
	GUI.Label(Rect(10,10,100,200),"Time : " + gameTime);
}