#pragma strict

var Trigger : AudioClip;
var isPlayingAudio : boolean = false;

var textResultLevelP1L4 : TextMesh;
var textResultLevelP2L4 : TextMesh;
var textResultLevelP3L4 : TextMesh;

function Awake() { 
	textResultLevelP1L4.text = "" + PlayerPrefs.GetInt("ScoreLevelP1L4");
	textResultLevelP2L4.text = "" + PlayerPrefs.GetInt("ScoreLevelP2L4");
	textResultLevelP3L4.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L4");
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							//Welcome
	{
		Application.LoadLevel("Part1 L4");				//Next Level To LogoTumya Page
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
	}
	else if(other.tag == "mainmenu")							//Welcome
	{
		Application.LoadLevel("MainMenu");				//Next Level To LogoTumya Page
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
	}	
	else if(other.tag == "next")							
	{
		//Unloging Level 5 by sending value = 5 to main level
		PlayerPrefs.SetString("SavedLevel", "level5");
        Debug.Log("SavedLevel = 4");				//save level 4
        //------------------------------------------------------------------------------------------------>
		Application.LoadLevel("Level4-6");				
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
        	if(hit.collider.tag == "playagain") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("Part3 L4");	
            		countClick = 0;				//set zero
            	}
       		}
       		//Debug.Log(hit.collider.tag);
        	else if(hit.collider.tag == "mainmenu") 
        	{
        		//Debug.Log("Hit");
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		Application.LoadLevel("MainMenu");	
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
            		Application.LoadLevel("F4");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}

function OnGUI () 
	{
        // Make a background box
        GUI.Box(new Rect(10,10,170,90), "Loader Menu");        
        if(GUI.Button(new Rect(20,40,150,20), "Hall of Fame")) 
        {
        	PlayerPrefs.SetString("click", "F4");
            Application.LoadLevel("10 type");
        }
    }