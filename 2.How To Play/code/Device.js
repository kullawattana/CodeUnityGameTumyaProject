#pragma strict

//Kinect Control
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "mainmenu")						
	{
		Application.LoadLevel("1.1HowToPlay");		
	}
	else if(other.tag == "itemDevice_1")					
	{
		other.renderer.material.color = Color.yellow;			
	}
	else if(other.tag == "itemDevice_2")					
	{
		other.renderer.material.color = Color.yellow;			
	}
	else if(other.tag == "itemDevice_3")					
	{
		other.renderer.material.color = Color.yellow;			
	}
	else if(other.tag == "itemDevice_4")					
	{
		other.renderer.material.color = Color.yellow;	
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
            		Application.LoadLevel("8.HowToPlay");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}