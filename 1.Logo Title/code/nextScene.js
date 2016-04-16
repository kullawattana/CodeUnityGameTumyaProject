#pragma strict

//Kinect Control
var Trigger : AudioClip;
var isPlayingAudio : boolean = false; 

function OnTriggerEnter (other : Collider) {
	
	if(other.tag == "welcome")										//Welcome
	{
		Application.LoadLevel("3.create&loginMenu");				//Next Level To LogoTumya Page
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
            		Application.LoadLevel("3.create&loginMenu");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}