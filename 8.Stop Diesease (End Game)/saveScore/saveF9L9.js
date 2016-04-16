#pragma strict

var Trigger : AudioClip;
var isPlayingAudio : boolean = false;

var textResultLevelP1L9 : TextMesh;
var textResultLevelP2L9 : TextMesh;
var textResultLevelP3L9 : TextMesh;

function Awake() { 
	textResultLevelP1L9.text = "" + PlayerPrefs.GetInt("ScoreLevelP1L9");
	textResultLevelP2L9.text = "" + PlayerPrefs.GetInt("ScoreLevelP2L9");
	textResultLevelP3L9.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L9");
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							//Welcome
	{
		Application.LoadLevel("Part1 L9");				//Next Level To LogoTumya Page
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
		//Unloging Level 10 by sending value = 10 to main level
		PlayerPrefs.SetString("SavedLevel","level10");
        Debug.Log("SavedLevel = 9");				//save level 9
        //------------------------------------------------------------------------------------------------>
		Application.LoadLevel("Level10");				
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
            		Application.LoadLevel("Part3 L9");	
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
            		Application.LoadLevel("F9");	
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
        	PlayerPrefs.SetString("click", "F9");
            Application.LoadLevel("10 type");
        }
    }