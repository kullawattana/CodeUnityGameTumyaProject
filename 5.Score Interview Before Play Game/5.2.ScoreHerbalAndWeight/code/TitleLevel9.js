#pragma strict

function OnTriggerEnter (other : Collider) 
{		
	if(other.tag == "score")			
	{			
		Application.LoadLevel("2.Device");			
	}
	else if(other.tag == "herbal")				
	{
		Application.LoadLevel("1.2Tumya");			
	}
	else if(other.tag == "Level1-3")					
	{
		Application.LoadLevel("Level1-3");	
	}
	else 
	{
		print("Not Select");
	}		
}