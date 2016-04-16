#pragma strict

//Kinect Control
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "level10")						//Level10
	{
		Application.LoadLevel("Title Level 10");	//Next Level To Level10 Page
	}
	else if(other.tag == "back")					//Level3
	{
		Application.LoadLevel("16.Level7-9");		//Next Level To Level3 Page	
	}
	else
	{
		print("Not Select Menu");
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
        	if(hit.collider.tag == "level10") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Title Level 10");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "back") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Level7-9");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
   	}
}