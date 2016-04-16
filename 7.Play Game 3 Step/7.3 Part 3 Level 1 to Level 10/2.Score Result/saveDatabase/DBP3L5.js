#pragma strict

//------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;					//Click Sound
var isPlayingAudio : boolean = false; 		//Check Play Audio by using Toggle
//------------------------------------------------------------------------------------------------->
var textResultLevelP3L5 : TextMesh; 
var textMaxScore : TextMesh;

function Awake() { 
	textResultLevelP3L5.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L5");				//My Score
	textMaxScore.text = "" + PlayerPrefs.GetInt("MaxScoreP3L5");						//Maximum Score
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							
	{
		Application.LoadLevel("Part3 L5");				
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
		Application.LoadLevel("F5");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
        send();
	}
}

function send() {							//Send Score to Database
    var form = new WWWForm();
    form.AddField("score", textResultLevelP3L5.text);
    form.AddField("username", textMaxScore.text);
    var url = "http://localhost/unity_test/SaveScoreP3L5.php";
    var w = WWW(url, form);
    yield w;
    Debug.Log (w.text);
}