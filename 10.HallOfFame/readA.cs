using UnityEngine;
using System.Collections;
using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.IO;
using System.Text;

public class readA : MonoBehaviour {
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
		readItems = PlayerPrefs.GetString("ClearName");

		LoadString = ReadFile (readItems);
		string[] ObjectsLoaded = LoadString.Split(',');					//Split Text ","

		foreach(string SaveString in ObjectsLoaded)
		{
		print (SaveString);
		if(SaveString != null)
		{
			if(SaveString == "object2")		
			{
				GameObject readItemL1 = Instantiate (Objects[0], new Vector3(-19.0f, 2.0f, -10.79f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object3")
			{
				GameObject readItemL2 = Instantiate (Objects[1], new Vector3(-8.98f, 2.27f, -10.79f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object4")
			{
				GameObject readItemL3 = Instantiate (Objects[2], new Vector3(0.42f, 2.11f, -10.84f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object5")
			{
				GameObject readItemL4 = Instantiate (Objects[3], new Vector3(9.60f, 2.10f, -10.79f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object6")
			{
				GameObject readItemL5 = Instantiate (Objects[4], new Vector3(18.87f, 2.10f, -10.79f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object7")
			{
				GameObject readItemL6 = Instantiate (Objects[5], new Vector3(-18.88f, 1.87f, -0.74f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object8")
			{
				GameObject readItemL7 = Instantiate (Objects[6], new Vector3(-8.98f, 2.27f, -0.74f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object9")
			{
				GameObject readItemL8 = Instantiate (Objects[7], new Vector3(0.42f, 2.11f, -0.78f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object10")
			{
				GameObject readItemL9 = Instantiate (Objects[8], new Vector3(9.60f, 2.10f, -0.74f), Quaternion.identity) as GameObject;
			}
			else if(SaveString == "object11")
			{
				GameObject readItemL10 = Instantiate (Objects[9], new Vector3(18.87f, 2.10f, -0.74f), Quaternion.identity) as GameObject;
			}
		}
		}
	}
}
	//------------------------------------------------------------------------------------------------------------------------>