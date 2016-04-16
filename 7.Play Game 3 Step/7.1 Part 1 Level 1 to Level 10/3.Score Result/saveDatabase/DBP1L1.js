#pragma strict

//------------------------------------------------------------------------------------------------->
var Trigger : AudioClip;					//Click Sound
var isPlayingAudio : boolean = false; 		//Check Play Audio by using Toggle
//------------------------------------------------------------------------------------------------->
var textResultLevelP1L1 : TextMesh; 
var textMaxScore : TextMesh;
//------------------------------------------------------------------------------------------------->

function Awake() { 
	textResultLevelP1L1.text = "" + PlayerPrefs.GetInt("ScoreSubP1L1");				//My Score
	textMaxScore.text = "" + PlayerPrefs.GetInt("MaxScoreP1L1");						//Maximum Score
}

function OnTriggerEnter (other : Collider) {
	if(other.tag == "playagain")							//playagain
	{
		Application.LoadLevel("Part1 L1");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
	}
	else if(other.tag == "mainmenu")						//mainmenu
	{
		Application.LoadLevel("6.MainMenu");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
	}
	else if(other.tag == "next")							//next
	{
		Application.LoadLevel("Part2 L1");				
		isPlayingAudio = true;
        audio.clip = Trigger;
        audio.Play();
        send();
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
            		Application.LoadLevel("Part1 L1");	
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
            		Application.LoadLevel("6.MainMenu");	
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
            		Application.LoadLevel("Part2 L1");	
            		countClick = 0;				//set zero
            	}
       		}
       	}
     }
}

function send() {												//Send Score to Database
    var form = new WWWForm();
    form.AddField("scoreResult", textResultLevelP1L1.text);
    form.AddField("scoreMax", textMaxScore.text);
    var url = "http://localhost/unity_test/SaveScoreP1L1.php";
    var w = WWW(url, form);
    yield w;
    Debug.Log (w.text);
}