#pragma strict

var herbal : AudioClip;  							//Sound Herbal
var isPlayingAudioTopic : boolean = false;
var isPlayingAudioHerbal : boolean = false;				

function OnTriggerEnter (other : Collider) {		
	if(other.tag == "herbal")					
	{
		isPlayingAudioHerbal = true;
        audio.clip = herbal;
        audio.Play();	
	}
	else if(other.tag == "play")					
	{
		Application.LoadLevel("TitleTumyaP1L8");			
	}
}