#pragma strict

var Trigger : AudioClip;
var isPlayingAudio : boolean = false;

var textResultLevelP1L1 : TextMesh;
var textResultLevelP2L1 : TextMesh;
var textResultLevelP3L1 : TextMesh;

function Awake() { 
	textResultLevelP1L1.text = "" + PlayerPrefs.GetInt("ScoreSubP1L1");
	textResultLevelP2L1.text = "" + PlayerPrefs.GetInt("ScoreLevel_P2L1");
	textResultLevelP3L1.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L1");
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "next")							
	{
		//Unloging Level 2 by sending value = 2 to main level
		PlayerPrefs.SetString("SavedLevel", "level2");
        Debug.Log("SavedLevel = 1");				//save level 1
        //------------------------------------------------------------------------------------------------>
		Application.LoadLevel("14.Level1-3");				
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
            		Application.LoadLevel("Part3 L3");	
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
        	PlayerPrefs.SetString("click", "F1");
            Application.LoadLevel("10 type");
        }
    }