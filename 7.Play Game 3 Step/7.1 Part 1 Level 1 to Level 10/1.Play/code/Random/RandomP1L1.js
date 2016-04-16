#pragma strict

var herBalItem1 : GameObject;				//Item 1 
var herBalItem2 : GameObject;				//Item 2
var herBalItem3 : GameObject;				//Item 3
var herBalItem4 : GameObject;				//Item 4

var addXPos : float;						//Position
var spawnPos : Vector3;
var nextHerbalTime : float = 0.0f;			//Time
var spawnRate : float = 1.0f;				//Rate of Spawn
var nextHerbalTimeLevel : float = 1.5f; 	//Next Item Time Level
var randomObject : Array;					//Array Collection
var gameTime:float = 60.0f;					//CountDownTime

function Start () {
	InvokeRepeating("CountDown",1.0,1.0);
}

function CountDown(){
	if(--gameTime ==0)
	{
		CancelInvoke("CountDown");
		print("time out");
	}
}

function Awake()
{
     randomObject = new Array(herBalItem1, herBalItem2, herBalItem3, herBalItem4);
}
 
function Update () 
{

	 if (nextHerbalTime < Time.time)
        {
            SpawnHerbal();
            nextHerbalTime = Time.time + spawnRate;
            spawnRate *= 1.0f;
            spawnRate = Mathf.Clamp(spawnRate, 0.3f, 99f);
			nextHerbalTimeLevel = nextHerbalTime + 1.0f;
        }
}

function SpawnHerbal()
{    	
        var randomSelect = Random.Range(0,(randomObject.length)); 					//Random Object   
        addXPos = Random.Range(-18.0f, 20.0f);										//Random Position
        spawnPos = transform.position + new Vector3(addXPos,0,0);		
		Instantiate(randomObject[randomSelect], spawnPos, Quaternion.identity);		//Set Object
}