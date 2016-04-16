using System.Text.RegularExpressions;
using System.IO;
using System.Text;
using UnityEngine;
using System.Collections;

public class unlogD : MonoBehaviour {
	public GameObject level10Locked;				//Key 10
	public GameObject level10Collider;				//Board 10

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
				if(SaveString == "object10")
				{
					level10Locked.active = false;				
					level10Collider.active = true;			

					backLevel.active = true;
				}
			}
		}
	}
}