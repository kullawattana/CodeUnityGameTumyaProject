#pragma strict

var level10Locked : GameObject;
var level10Collider : GameObject;
var levelReached10 : int;

var backLevel : GameObject; 
var levelReached : String;

levelReached = PlayerPrefs.GetString("SavedLevel");

function Start ()  
{	
    if(levelReached  != null)
    {
    	if(levelReached == "level10") 					
        {  					
			level10Locked.active = false;		
			level10Collider.active = true;		
        }  
    }
}