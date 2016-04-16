using System.Text.RegularExpressions;
using System.IO;
using System.Text;
using UnityEngine;
using System.Collections;

public class unlogByReadfile : MonoBehaviour {
	public GameObject level1Locked;					//Key
	public GameObject level2Locked;
	public GameObject level3Locked;
	
	public GameObject level1Collider;				//Board
	public GameObject level2Collider;
	public GameObject level3Collider;
	
	public GameObject nextLevel;					//Back 
	public GameObject backLevel;					//Next
	
	//------------------------------------------------------------------------------------>
	public GameObject[] Objects;		//Game Object
	public string SaveString;			//Save Level
	//------------------------------------------------------------------------------------>
	public string LoadString;
	public string readItems;
	
	public static void WriteToFile(string Target, string Text){
		File.WriteAllText(Target, Text);	
	}
	//--------------------------->
	public static string ReadFile(string Target){
		return File.ReadAllText(Target);	
	}
	
	void Start()
	{
		getString();
	}
	
	void getString() 
	{
		readItems = PlayerPrefs.GetString("getStringToUnlog");			//Recieve Value to Unlog
		
		LoadString = ReadFile (readItems);
		string[] ObjectsLoaded = LoadString.Split(',');					//Split Text "," 
		
		foreach(string SaveString in ObjectsLoaded)						//and read items
		{
			print (SaveString);
			if(SaveString != null)
			{
				if(SaveString == "object1")		
				{
					level1Locked.active = false;			
					level1Collider.active = true;			
					
					level2Locked.active = true;     
					level2Collider.active = false; 
					
					level3Locked.active = true; 
					level3Collider.active = false;  
					
					nextLevel.active = false;
				}
				else if(SaveString == "object2")
				{
					level1Locked.active = false;				
					level1Collider.active = true;			
					
					level2Locked.active = false; 
					level2Collider.active = true; 
					
					level3Locked.active = true; 
					level3Collider.active = false;   
					
					nextLevel.active = false; 
				}
				else if(SaveString == "object3")
				{
					level1Locked.active = false;				
					level1Collider.active = true;			
					
					level2Locked.active = false; 
					level2Collider.active = true; 
					
					level3Locked.active = false; 
					level3Collider.active = true;   
					
					nextLevel.active = true; 
				}
			}
		}
	}
}
