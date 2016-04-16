#pragma strict
/*
function OnGUI()
{
	GUI.color = Color.yellow;
	GUI.backgroundColor = Color.yellow;
	GUI.Box(new Rect(250,50,200,220), "Menu");
	       
    if(GUI.Button(new Rect(250,90,200,50), "Create Profile")) 
    {
       Application.LoadLevel("4.createProfile");
    }
    else if(GUI.Button(new Rect(250,150,200,50), "Login Profile")) 
    {
       Application.LoadLevel("5.loginProfile");
    }
}
*/

function OnGUI()
{
	GUI.color = Color.yellow;
	GUI.backgroundColor = Color.yellow;
	GUI.Box(new Rect(570,120,200,220), "Menu");
	       
    if(GUI.Button(new Rect(570,160,200,50), "Create Profile")) 
    {
       Application.LoadLevel("4.createProfile");
    }
    else if(GUI.Button(new Rect(570,220,200,50), "Login Profile")) 
    {
       Application.LoadLevel("5.loginProfile");
    }
}

