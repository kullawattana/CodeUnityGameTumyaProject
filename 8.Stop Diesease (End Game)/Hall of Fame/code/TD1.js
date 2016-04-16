#pragma strict

var herbal : AudioClip;  												//Sound Herbal
var isPlayingAudioTopic : boolean = false;
var isPlayingAudioHerbal : boolean = false;	
//------------------------------------------------------------->
var SaveString: String;
var prefab : GameObject;
var prefab2 : GameObject;

function Start() 
{
	SaveString = PlayerPrefs.GetString("Object");
	if(SaveString != null)
		if(SaveString == "Object1")
		{
			Instantiate (prefab, Vector3(2.0, 0, 0), Quaternion.identity);
		}
		else if(SaveString == "Object2")
		{
			Instantiate (prefab2, Vector3(4.0, 3, 0), Quaternion.identity);
		}
}


function Save(herbal : String)
{
	PlayerPrefs.SetString("Object", herbal);
	print(herbal);
}

/*
function OnTriggerEnter (other : Collider) {		
	if(other.tag == "herbal")					
	{
		isPlayingAudioHerbal = true;
        audio.clip = herbal;
        audio.Play();	
	}
	else if(other.tag == "play")					
	{
		Application.LoadLevel("TitleTumyaP1L1");			
	}
}*/

//------------------------------------------------------------------------------------------------------->
var topp : String = "1234"; 
var stringToEditUsername : String = "";   			//Create Username to Save Items		
var buttonMessage : String = "Access Denied";
var allOptions : boolean = false;
var toggle : boolean;
//------------------------------------------------------------------------------------------------------------>

function OnGUI () {	
		GUI.Box(new Rect(300,10,200,250), "Hall of Fame");
		
		stringToEditUsername = GUI.TextField (Rect (300, 60, 200, 30), stringToEditUsername, 25);
		
		if(stringToEditUsername == topp)    		//test call DB or Textfile to read herbal
		{
      		buttonMessage = "Save Items";  		
			toggle = GUI.Toggle(Rect(300, 120, 200, 50), toggle, buttonMessage, "button");
			//send();								//Send Data to Database
			//Save("Object1");
			Save("Object2");
			
    		if (toggle && GUI.Button(Rect(300, 180, 200, 50), "Read Items"))
    		{
    			print ("Read Items");
				isPlayingAudioHerbal = true;
        		audio.clip = herbal;
        		audio.Play();
        		//Application.LoadLevel("BU&Tumya");
        		Save("Object2");
    		}
    	}
   		else    
   		{
      		buttonMessage = "Access Denied";
      		toggle = GUI.Toggle(Rect(300, 120, 200, 50), toggle, buttonMessage, "button");
   		}
}