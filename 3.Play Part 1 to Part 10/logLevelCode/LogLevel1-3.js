#pragma strict

var level1Locked : GameObject;
var level2Locked : GameObject;
var level3Locked : GameObject;

var level1Collider : GameObject;
var level2Collider : GameObject;
var level3Collider : GameObject;

var nextLevel : GameObject; 
var levelReached : String; 

function Start () 
{	
	levelReached = PlayerPrefs.GetString("SavedLevel");
    if(levelReached  != null)
    {
		if(levelReached == "level1") 					
        {
			level1Locked.active = false;			
			level1Collider.active = true;			
	
			level2Locked.active = true;     
			level2Collider.active = false; 
			
			level3Locked.active = true; 
			level3Collider.active = false;  
			
			nextLevel.active = false;
        }
      
		else if(levelReached == "level2") 		 			
        {
			level1Locked.active = false;				
			level1Collider.active = true;			
	
			level2Locked.active = false; 
			level2Collider.active = true; 

			level3Locked.active = true; 
			level3Collider.active = false;   
			
			nextLevel.active = false; 
        }   
        else if(levelReached == "level3") 		 			
        {
			level1Locked.active = false;				
			level1Collider.active = true;			
	
			level2Locked.active = false; 
			level2Collider.active = true; 

			level3Locked.active = false; 
			level3Collider.active = true;   
			
			nextLevel.active = true; 
        }  
   }
}