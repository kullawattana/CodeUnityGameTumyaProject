#pragma strict
//Kinect Control
var item1 : GameObject;
var item2 : GameObject;
var item3 : GameObject;
var item4 : GameObject;
var item5 : GameObject;
var item6 : GameObject;
var item7 : GameObject;
var item8 : GameObject;
var item9 : GameObject;
var item10 : GameObject;
var Player : GameObject; 

function Start(){ 
	item1.active = false;
	item2.active = false;	
	item3.active = false;	
	item4.active = false;	
	item5.active = false;	
	item6.active = false;	
	item7.active = false;	
	item8.active = false;	
	item9.active = false;	
	item10.active = false;
	Player.active = true;		
}


function OnTriggerEnter (other : Collider) {		
	if(other.tag == "item1.1")									
	{
		item1.active = true;	
	}
	else if(other.tag == "item1.2")								 
	{
		item2.active = true;		
	}
	else if(other.tag == "item1.3")								
	{
		item3.active = true;			
	}
	else if(other.tag == "item1.4")									
	{
		item4.active = true;			
	}
	else if(other.tag == "item1.5")								
	{
		item5.active = true;		
	}
	else if(other.tag == "item1.6")								
	{
		item6.active = true;		
	}
	else if(other.tag == "item1.7")								
	{
		item7.active = true;			
	}
	else if(other.tag == "item1.8")								
	{
		item8.active = true;				
	}
	else if(other.tag == "item1.9")								
	{
		item9.active = true;				
	}
	else if(other.tag == "item1.10")								
	{
		item10.active = true;	
	}
}

function OnTriggerExit (other : Collider) {		
	if(other.tag == "item1.1")									
	{
		item1.active = false;		
	}
	else if(other.tag == "item1.2")								
	{	
		item2.active = false;		
	}
	else if(other.tag == "item1.3")								
	{	
		item3.active = false;			
	}
	else if(other.tag == "item1.4")									
	{
		item4.active = false;					
	}
	else if(other.tag == "item1.5")								
	{
		item5.active = false;				
	}
	else if(other.tag == "item1.6")								
	{
		item6.active = false;			
	}
	else if(other.tag == "item1.7")								
	{
		item7.active = false;			
	}
	else if(other.tag == "item1.8")								
	{
		item8.active = false;			
	}
	else if(other.tag == "item1.9")								
	{
		item9.active = false;			
	}
	else if(other.tag == "item1.10")								
	{
		item10.active = false;			
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
        	if(hit.collider.tag == "item1.1") 
        	{
        		//Debug.Log("Hit");
            	item1.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item1.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.2") 
        	{
        		//Debug.Log("Hit");
            	item2.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item2.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.3") 
        	{
        		//Debug.Log("Hit");
            	item3.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item3.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.4") 
        	{
        		//Debug.Log("Hit");
            	item4.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item4.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.5") 
        	{
        		//Debug.Log("Hit");
            	item5.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item5.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.6") 
        	{
        		//Debug.Log("Hit");
            	item6.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item6.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.7") 
        	{
        		//Debug.Log("Hit");
            	item7.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item7.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.8") 
        	{
        		//Debug.Log("Hit");
            	item8.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item8.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.9") 
        	{
        		//Debug.Log("Hit");
            	item9.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item9.active = false;
            		countClick = 0;				//set zero
            	}
       		}
       		else if(hit.collider.tag == "item1.10") 
        	{
        		//Debug.Log("Hit");
            	item10.active = true;
            	countClick += 1;				
            	if(countClick == 2)				//Double click
            	{
            		item10.active = false;
            		countClick = 0;				//set zero
            	}
       		}
     	}
	}
} 

var checkClick : String;

function OnGUI () 
	{
        // Make a background box
        GUI.Box(new Rect(10,10,170,90), "Loader Menu");
    
        checkClick = PlayerPrefs.GetString("click");
        
        if(checkClick == "F1")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F1");
        	}
        }
        
        else if(checkClick == "F2")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F2");
        	}
        }
        
        else if(checkClick == "F3")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F3");
        	}
        }
        
    	else if(checkClick == "F4")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F4");
        	}
        }
        
        else if(checkClick == "F5")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F5");
        	}
        }
    	
    	else if(checkClick == "F6")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F6");
        	}
        }
        
        else if(checkClick == "F7")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F7");
        	}
        }
        
        else if(checkClick == "F8")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F8");
        	}
        }
        
        else if(checkClick == "F9")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F9");
        	}
        }
        
        else if(checkClick == "F10")
        {
        	if(GUI.Button(new Rect(20,40,150,20), "Back")) {
            	Application.LoadLevel("F10");
        	}
        }
        
        if(GUI.Button(new Rect(20,70,150,20), "Main Menu")) {
            Application.LoadLevel("5.1score&Hall");
        }
    }