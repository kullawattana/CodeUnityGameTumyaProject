#pragma strict

//Kinect Control
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "level7")						//Level7
	{
		Application.LoadLevel("Title Level 7");		//Next Level To Level7 Page
	}
	else if(other.tag == "level8")					//Level8
	{
		Application.LoadLevel("Title Level 8");		//Next Level To Level8 Page
	}
	else if(other.tag == "level9")					//Level9
	{
		Application.LoadLevel("Title Level 9");		//Next Level To Level9 Page
	}
	else if(other.tag == "next")					//Level3
	{
		Application.LoadLevel("17.Level10");		//Next Level To Level3 Page
	}
	else if(other.tag == "back")					//Level3
	{
		Application.LoadLevel("15.Level4-6");		//Next Level To Level3 Page	
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
        	if(hit.collider.tag == "level7") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Title Level 7");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "level8") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Title Level 8");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "level9") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Title Level 9");	
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
            		Application.LoadLevel("17.Level10");	
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
            		Application.LoadLevel("15.Level4-6");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}