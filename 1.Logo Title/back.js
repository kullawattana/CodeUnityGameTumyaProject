#pragma strict

//Countdown Show
function OnGUI(){
	GUI.color = Color.yellow;
	GUI.backgroundColor = Color.yellow;
	//GUI.Box(new Rect(10,10,100,60),"");
	       
    if(GUI.Button(new Rect(10,20,100,60), "Back Menu")) 
    {
       Application.LoadLevel("5.1score&Hall");
    }
}