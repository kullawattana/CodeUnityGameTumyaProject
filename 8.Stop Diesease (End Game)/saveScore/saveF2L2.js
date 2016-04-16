#pragma strict

var Trigger : AudioClip;
var isPlayingAudio : boolean = false;

var textResultLevelP1L2 : TextMesh;
var textResultLevelP2L2 : TextMesh;
var textResultLevelP3L2 : TextMesh;

function Awake() { 
	textResultLevelP1L2.text = "" + PlayerPrefs.GetInt("ScoreLevelP1L2");
	textResultLevelP2L2.text = "" + PlayerPrefs.GetInt("ScoreLevelP2L2");
	textResultLevelP3L2.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L2");
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							//Welcome
	{
		Application.LoadLevel("Part1 L2");				//Next Level To LogoTumya Page
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
		//Unloging Level 3 by sending value = 3 to main level
		PlayerPrefs.SetString("SavedLevel", "level3");
        Debug.Log("SavedLevel = 2");				//save level 2
        //------------------------------------------------------------------------------------------------>
		Application.LoadLevel("Level1-3");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
	}
}

function OnGUI () 
	{
        // Make a background box
        GUI.Box(new Rect(10,10,170,90), "Loader Menu");        
        if(GUI.Button(new Rect(20,40,150,20), "Hall of Fame")) 
        {
        	PlayerPrefs.SetString("click", "F2");
            Application.LoadLevel("10 type");
        }
    }