#pragma strict

var movTexture : MovieTexture;
var isPlayingAudio : boolean = false; 

function Start () {
	renderer.material.mainTexture = movTexture; 
	movTexture.Play();
	movTexture.loop = true;
}