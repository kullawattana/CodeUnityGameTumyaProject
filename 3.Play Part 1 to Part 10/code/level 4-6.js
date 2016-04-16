#pragma strict

//Kinect Control
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "level4")						//Level4
	{
		Application.LoadLevel("Title Level 4");		//Next Level To Level4 Page
	}
	else if(other.tag == "level5")					//Level5
	{
		Application.LoadLevel("Title Level 5");		//Next Level To Level5 Page
	}
	else if(other.tag == "level6")					//Level6
	{
		Application.LoadLevel("Title Level 6");		//Next Level To Level6 Page
	}
	else if(other.tag == "next")					//Level3
	{
		Application.LoadLevel("16.Level7-9");		//Next Level To Level3 Page
	}
	else if(other.tag == "back")					//Level3
	{
		Application.LoadLevel("14.Level1-3");		//Next Level To Level3 Page
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
        	if(hit.collider.tag == "level4") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Title Level 4");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "level5") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Title Level 5");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "level6") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Title Level 6");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "next") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("16.Level7-9");	
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
            		Application.LoadLevel("14.Level1-3");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}