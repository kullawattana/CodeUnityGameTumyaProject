#pragma strict

var Trigger : AudioClip;
var isPlayingAudio : boolean = false;

var textResultLevelP1L7 : TextMesh;
var textResultLevelP2L7 : TextMesh;
var textResultLevelP3L7 : TextMesh;

function Awake() { 
	textResultLevelP1L7.text = "" + PlayerPrefs.GetInt("ScoreLevelP1L7");
	textResultLevelP2L7.text = "" + PlayerPrefs.GetInt("ScoreLevelP2L7");
	textResultLevelP3L7.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L7");
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							//Welcome
	{
		Application.LoadLevel("Part1 L7");				//Next Level To LogoTumya Page
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
		//Unloging Level 8 by sending value = 8 to main level
		PlayerPrefs.SetString("SavedLevel", "level8");
        Debug.Log("SavedLevel = 7");				//save level 7
        //------------------------------------------------------------------------------------------------>
		Application.LoadLevel("Level7-9");				
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
            		Application.LoadLevel("Part3 L7");	
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
            		Application.LoadLevel("F7");	
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
        	PlayerPrefs.SetString("click", "F7");
            Application.LoadLevel("10 type");
        }
    }