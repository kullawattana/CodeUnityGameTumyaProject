#pragma strict

var Trigger : AudioClip;
var isPlayingAudio : boolean = false;

var textResultLevelP1L10 : TextMesh;
var textResultLevelP2L10 : TextMesh;
var textResultLevelP3L10 : TextMesh;

function Awake() { 
	textResultLevelP1L10.text = "" + PlayerPrefs.GetInt("ScoreLevelP1L10");
	textResultLevelP2L10.text = "" + PlayerPrefs.GetInt("ScoreLevelP2L10");
	textResultLevelP3L10.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L10");
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							//Welcome
	{
		Application.LoadLevel("Part1 L10");				//Next Level To LogoTumya Page
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
		PlayerPrefs.SetString("SavedLevel", "level1");
        Debug.Log("SavedLevel = 10");				//save level 9
        //------------------------------------------------------------------------------------------------>
		Application.LoadLevel("Level1");				
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
        	PlayerPrefs.SetString("click", "F10");
            Application.LoadLevel("10 type");
        }
    }