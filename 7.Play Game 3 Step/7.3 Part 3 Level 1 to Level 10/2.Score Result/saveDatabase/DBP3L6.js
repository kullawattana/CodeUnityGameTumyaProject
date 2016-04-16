#pragma strict

//------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;					//Click Sound
var isPlayingAudio : boolean = false; 		//Check Play Audio by using Toggle
//------------------------------------------------------------------------------------------------->
var textResultLevelP3L6 : TextMesh; 
var textMaxScore : TextMesh;

function Awake() { 
	textResultLevelP3L6.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L6");				//My Score
	textMaxScore.text = "" + PlayerPrefs.GetInt("MaxScoreP3L6");						//Maximum Score
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							
	{
		Application.LoadLevel("Part3 L6");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
	}
	else if(other.tag == "mainmenu")							
	{
		Application.LoadLevel("MainMenu");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
	}
	else if(other.tag == "next")							
	{
		Application.LoadLevel("F6");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
        send();
	}
}

function send() {							//Send Score to Database
    var form = new WWWForm();
    form.AddField("score", textResultLevelP3L6.text);
    form.AddField("username", textMaxScore.text);
    var url = "http://localhost/unity_test/SaveScoreP3L6.php";
    var w = WWW(url, form);
    yield w;
    Debug.Log (w.text);
}