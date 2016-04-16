#pragma strict

var level7Locked : GameObject;
var level8Locked : GameObject;
var level9Locked : GameObject;

var level7Collider : GameObject;
var level8Collider : GameObject;
var level9Collider : GameObject;

var nextLevel : GameObject;
var backLevel : GameObject; 
var levelReached : String;

function Start () 
{	
	levelReached = PlayerPrefs.GetString("SavedLevel");
    if(levelReached  != null)
    {
		if(levelReached == "level7") 					
        {
			level7Locked.active = false;			
			level7Collider.active = true;			
	
			level8Locked.active = true;     
			level8Collider.active = false; 
			
			level9Locked.active = true; 
			level9Collider.active = false;  
			
			backLevel.active = true;
			nextLevel.active = false;
        }
      
		else if(levelReached == "level8") 		 			
        {
			level7Locked.active = false;				
			level7Collider.active = true;			
	
			level8Locked.active = false; 
			level8Collider.active = true; 

			level9Locked.active = true; 
			level9Collider.active = false;   
			
			backLevel.active = true;
			nextLevel.active = false; 
        }   
        else if(levelReached == "level9") 		 			
        {
			level7Locked.active = false;				
			level7Collider.active = true;			
	
			level8Locked.active = false; 
			level8Collider.active = true; 

			level9Locked.active = false; 
			level9Collider.active = true;   
			
			backLevel.active = true;
			nextLevel.active = true; 
        }  
   }
}