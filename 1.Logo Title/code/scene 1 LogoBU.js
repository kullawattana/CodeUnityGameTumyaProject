#pragma strict

//Kinect Control
var Trigger : AudioClip;
var isPlayingAudio : boolean = false; 
var respawnWaitTime : float = 2.0f;

function OnTriggerEnter (other : Collider) {
	
	if(other.tag == "welcome")								
	{
		Application.LoadLevel("2.Animation");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
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
        	if(hit.collider.tag == "welcome") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("2.Animation");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}