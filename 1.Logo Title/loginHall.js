#pragma strict
/*
function OnGUI()
{
	GUI.color = Color.yellow;
	GUI.backgroundColor = Color.yellow;
	GUI.Box(new Rect(250,50,200,220), "User Menu");
	       
    if(GUI.Button(new Rect(250,90,200,50), "Score")) 
    {
       Application.LoadLevel("5.2scoreCum");
    }
    else if(GUI.Button(new Rect(250,150,200,50), "Hall of Fame")) 
    {
       Application.LoadLevel("10 type");
    }
    else if(GUI.Button(new Rect(250,210,200,50), "Play Game")) 
    {
       Application.LoadLevel("6.MainMenu");
    }
}
*/

function OnGUI()
{
	GUI.color = Color.yellow;
	GUI.backgroundColor = Color.yellow;
	GUI.Box(new Rect(570,120,200,220), "User Menu");
	       
    if(GUI.Button(new Rect(570,160,200,50), "Score")) 
    {
       Application.LoadLevel("5.2scoreCum");
    }
    else if(GUI.Button(new Rect(570,220,200,50), "Hall of Fame")) 
    {
       Application.LoadLevel("10 type");
    }
    else if(GUI.Button(new Rect(570,280,200,50), "Play Game")) 
    {
       Application.LoadLevel("6.MainMenu");
    }
}