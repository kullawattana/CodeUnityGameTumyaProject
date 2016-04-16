#pragma strict

var movTexture : MovieTexture;
var Trigger : AudioClip;
var isPlayingAudio : boolean = false; 
var gameTime:float = 5.0f; 

function Start () {
	renderer.material.mainTexture = movTexture; 
	movTexture.Play();
	
	isPlayingAudio = true;
    audio.clip = Trigger;
    audio.Play();
    
    InvokeRepeating("CountDown",1.0,1.0);
}

function Update () {
	if(!movTexture.isPlaying)
    {
      	movTexture.Play();
    }
}

function CountDown(){
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		Application.LoadLevel("Part1 L2");
	}
}