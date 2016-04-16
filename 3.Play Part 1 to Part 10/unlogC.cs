using System.Text.RegularExpressions;
using System.IO;
using System.Text;
using UnityEngine;
using System.Collections;

public class unlogC : MonoBehaviour {
	//public GameObject level1Locked;					//Key 1-3
	//public GameObject level2Locked;
	//public GameObject level3Locked;
	//public GameObject level4Locked;					//Key 4-6
	//public GameObject level5Locked;
	//public GameObject level6Locked;
	public GameObject level7Locked;					//Key 7-9
	public GameObject level8Locked;
	public GameObject level9Locked;
	//public GameObject level10Locked;				//Key 10
	
	//public GameObject level1Collider;				//Board 1-3
	//public GameObject level2Collider;
	//public GameObject level3Collider;
	//public GameObject level4Collider;				//Board 4-6
	//public GameObject level5Collider;
	//public GameObject level6Collider;
	public GameObject level7Collider;				//Board 7-9
	public GameObject level8Collider;
	public GameObject level9Collider;
	//public GameObject level10Collider;				//Board 10
	
	public GameObject nextLevel;					//Next
	public GameObject backLevel;					//Back
	
	//------------------------------------------------------------------------------------>
	public GameObject[] Objects;					//Game Object
	public string SaveString;						//Save Level
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
		readItems = PlayerPrefs.GetString("readItems");					//Recieve Value to Unlog
				
		LoadString = ReadFile (readItems);
		string[] ObjectsLoaded = LoadString.Split(',');					//Split Text "," 
		
		foreach(string SaveString in ObjectsLoaded)						//and read items
		{
			print (SaveString);
			if(SaveString != null)
			{
				if(SaveString == "object7")
				{
					level7Locked.active = false;				
					level7Collider.active = true;			
					
					level8Locked.active = true; 
					level8Collider.active = false; 
					
					level9Locked.active = true; 
					level9Collider.active = false;   
					
					nextLevel.active = false; 
					backLevel.active = true;
				}
				else if(SaveString == "object8")
				{
					level7Locked.active = false;				
					level7Collider.active = true;			
					
					level8Locked.active = false; 
					level8Collider.active = true; 
					
					level9Locked.active = true; 
					level9Collider.active = false;   
					
					nextLevel.active = false; 
					backLevel.active = true;
				}
				else if(SaveString == "object9")
				{
					level7Locked.active = false;				
					level7Collider.active = true;			
					
					level8Locked.active = false; 
					level8Collider.active = true; 
					
					level9Locked.active = false; 
					level9Collider.active = true;   
					
					nextLevel.active = true; 
					backLevel.active = true;
				}
			}
		}
	}
}