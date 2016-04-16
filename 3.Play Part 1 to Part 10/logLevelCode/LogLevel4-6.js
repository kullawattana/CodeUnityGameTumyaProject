#pragma strict

var level4Locked : GameObject;
var level5Locked : GameObject;
var level6Locked : GameObject;

var level4Collider : GameObject;
var level5Collider : GameObject;
var level6Collider : GameObject;

var nextLevel : GameObject;
var backLevel : GameObject; 
var levelReached : String; 

function Start () 
{	
	levelReached = PlayerPrefs.GetString("SavedLevel");
    if(levelReached  != null)
    {
		if(levelReached == "level4") 					
        {
			level4Locked.active = false;			
			level4Collider.active = true;			
	
			level5Locked.active = true;     
			level5Collider.active = false; 
			
			level6Locked.active = true; 
			level6Collider.active = false;  
			
			backLevel.active = true;
			nextLevel.active = false;
        }
      
		else if(levelReached == "level5") 		 			
        {
			level4Locked.active = false;				
			level4Collider.active = true;			
	
			level5Locked.active = false; 
			level5Collider.active = true; 

			level6Locked.active = true; 
			level6Collider.active = false;   
			
			backLevel.active = true;
			nextLevel.active = false; 
        }   
        else if(levelReached == "level6") 		 			
        {
			level4Locked.active = false;				
			level4Collider.active = true;			
	
			level5Locked.active = false; 
			level5Collider.active = true; 

			level6Locked.active = false; 
			level6Collider.active = true;   
			
			backLevel.active = true;
			nextLevel.active = true; 
        }  
   }
}