#pragma strict

//Kinect Control
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "mainmenu")								
	{
		Application.LoadLevel("6.MainMenu");					
	}
	else if(other.tag == "howto")							
	{
		Application.LoadLevel("8.HowToPlay");				
	}
	else if(other.tag == "play")							
	{
		Application.LoadLevel("14.Level1-3");			
	}
}

//Mouse Control
var countClick : int = 0;

function Update() {
	if (Input.GetButtonDown("Fire1")) 
	{
    	var hit : RaycastHit;
    	if(Physics.Raycast(Camera.main.ScreenPointToRay(Input.mousePosition), hit))
    	{
        	//Debug.Log(hit.collider.tag);
        	if(hit.collider.tag == "mainmenu") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("6.MainMenu");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "howto") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("8.HowToPlay");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "play") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("14.Level1-3");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}