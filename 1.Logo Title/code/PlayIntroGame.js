#pragma strict

var movTexture : MovieTexture;
var Trigger : AudioClip;
var isPlayingAudio : boolean = false; 

function Start () {
	renderer.material.mainTexture = movTexture; 
	movTexture.Play();
	
	isPlayingAudio = true;
    audio.clip = Trigger;
    audio.Play();
}

function Update () {
	if(!movTexture.isPlaying)
    {
      	movTexture.Play();
    }
}