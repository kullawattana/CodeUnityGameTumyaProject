#pragma strict

var herBalItem1 : GameObject;			//Item 1 
var herBalItem2 : GameObject;			//Item 2
var herBalItem3 : GameObject;			//Item 3
var herBalItem4 : GameObject;			//Item 4
var herBalItem5 : GameObject;			//Item 5
var herBalItem6 : GameObject;			//Item 6
var herBalItem7 : GameObject;			//Item 7
var herBalItem8 : GameObject;			//Item 8
var herBalItem9 : GameObject;			//Item 9
var herBalItem10 : GameObject;			//Item 9
//-------------------------------------------------------------------------->
var addXPos : float;						//Position
var spawnPos : Vector3;
//-------------------------------------------------------------------------->
var nextEggTime : float = 0.0f;				//Time
var spawnRate : float = 1.0f;				//Rate of Spawn
var nextEggTimeLevel : float = 1.5f; 		//Next Item Time Level
//-------------------------------------------------------------------------->
var randomObject : Array;					//Array Collection
//-------------------------------------------------------------------------->

function Awake()
{
     randomObject = new Array(herBalItem1, herBalItem2, herBalItem3, herBalItem4,
     						herBalItem5, herBalItem6, herBalItem7, herBalItem8,
     						herBalItem9, herBalItem10);
}
 
function Update () 
{

	 if (nextEggTime < Time.time)
        {
            SpawnEgg();
            nextEggTime = Time.time + spawnRate;

            //Speed up the spawnrate for the next item
            spawnRate *= 1.15f;
            spawnRate = Mathf.Clamp(spawnRate, 0.3f, 99f);
			nextEggTimeLevel = nextEggTime + 1.0f;
        }	

}

function SpawnEgg()
{    	
        var randomSelect = Random.Range(0,(randomObject.length)); 			//Random Object
        addXPos = Random.Range(-20.0f, 20.0f);								//Random Position
        spawnPos = transform.position + new Vector3(addXPos,0,0);
		Instantiate(randomObject[randomSelect], spawnPos, Quaternion.identity);		//Set Object
}