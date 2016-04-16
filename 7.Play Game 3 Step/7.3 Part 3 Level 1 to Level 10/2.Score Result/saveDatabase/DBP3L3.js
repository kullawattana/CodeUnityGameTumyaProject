#pragma strict

//------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;					//Click Sound
var isPlayingAudio : boolean = false; 		//Check Play Audio by using Toggle
//------------------------------------------------------------------------------------------------->
var textResultLevelP3L3 : TextMesh; 
var textMaxScore : TextMesh;

function Awake() { 
	textResultLevelP3L3.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L3");				//My Score
	textMaxScore.text = "" + PlayerPrefs.GetInt("MaxScoreP3L3");						//Maximum Score
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							
	{
		Application.LoadLevel("Part3 L3");				
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
		Application.LoadLevel("F3");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
        send();
	}
}

function send() {							//Send Score to Database
    var form = new WWWForm();
    form.AddField("scoreResult", textResultLevelP3L3.text);
    form.AddField("scoreMax", textMaxScore.text);
    var url = "http://localhost/unity_test/SaveScoreP3L3.php";
    var w = WWW(url, form);
    yield w;
    Debug.Log (w.text);
}