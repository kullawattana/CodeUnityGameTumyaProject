using System.Text.RegularExpressions;
using System.IO;
using System.Text;
using UnityEngine;
using System.Collections;

public class unlogB : MonoBehaviour {
	public GameObject level4Locked;					//Key 4-6
	public GameObject level5Locked;
	public GameObject level6Locked;

	public GameObject level4Collider;				//Board 4-6
	public GameObject level5Collider;
	public GameObject level6Collider;
	
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
				if(SaveString == "object4")
				{
					level4Locked.active = false;				
					level4Collider.active = true;			
					
					level5Locked.active = true; 
					level5Collider.active = false; 
					
					level6Locked.active = true; 
					level6Collider.active = false;   
					
					nextLevel.active = false; 
					backLevel.active = true;
				}
				else if(SaveString == "object5")
				{
					level4Locked.active = false;				
					level4Collider.active = true;			
					
					level5Locked.active = false; 
					level5Collider.active = true; 
					
					level6Locked.active = true; 
					level6Collider.active = false;   
					
					nextLevel.active = false; 
					backLevel.active = true;
				}
				else if(SaveString == "object6")
				{
					level4Locked.active = false;				
					level4Collider.active = true;			
					
					level5Locked.active = false; 
					level5Collider.active = true; 
					
					level6Locked.active = false; 
					level6Collider.active = true;   
					
					nextLevel.active = true; 
					backLevel.active = true;
				}
			}
		}
	}
}