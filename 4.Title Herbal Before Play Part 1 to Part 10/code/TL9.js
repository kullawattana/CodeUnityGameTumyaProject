#pragma strict

//Kinect Control
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "score")						
	{
		Application.LoadLevel("score L9");		
	}
	else if(other.tag == "herbal")					
	{
		Application.LoadLevel("Intro Herbal L9");	
	}
	else if(other.tag == "play")					
	{
		Application.LoadLevel("TitleTumyaP1L9");			
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
        	if(hit.collider.tag == "score") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("score L9");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "herbal") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Intro Herbal L9");	
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
            		Application.LoadLevel("TitleTumyaP1L9");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}