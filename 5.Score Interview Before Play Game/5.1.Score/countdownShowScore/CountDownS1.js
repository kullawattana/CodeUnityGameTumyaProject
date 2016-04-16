#pragma strict

var gameTime:float = 8.0f;

function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){
		
	if(--gameTime == 0)
	{
		CancelInvoke("CountDown");
		print("time out");
		Application.LoadLevel("Title Level 1");
	}
}

//Countdown Show
function OnGUI(){
	GUI.Label(Rect(10,10,100,60),"Time : " + gameTime);
	
	GUI.color = Color.yellow;
	GUI.backgroundColor = Color.yellow;
	//GUI.Box(new Rect(10,10,100,60),"");
	       
    if(GUI.Button(new Rect(10,40,100,60), "Back Menu")) 
    {
       Application.LoadLevel("Title Level 1");
    }
}
