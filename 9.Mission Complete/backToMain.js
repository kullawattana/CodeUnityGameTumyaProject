#pragma strict

function OnTriggerEnter(other:Collider){
	if (other.tag == "welcome") {
		Application.LoadLevel("6.MainMenu");	
	}
}