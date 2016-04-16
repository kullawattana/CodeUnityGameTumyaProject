#pragma strict

//Kinect Control
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "mainmenu")						
	{
		Application.LoadLevel("9.Tumya");		
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
            		Application.LoadLevel("9.Tumya");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}