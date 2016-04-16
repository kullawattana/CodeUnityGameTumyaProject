using UnityEngine;
using System.Collections;
using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.IO;
using System.Text;

public class readProfile : MonoBehaviour {
	//Load Level
	public String saveFromGetString;
	public string LoadString;							//Load Level
	//------------------------------------------------------------------------->
	//Create Username to Save Items	
	public string stringToEditUsername;			
	public string buttonMessage = "Access Denied";
	public Boolean toggle = false;
	public Boolean allOptions = false;
	//------------------------------------------------------------------------->
	//Sound Herbal
	public Boolean isPlayingAudioHerbal = false; 
	public AudioClip herbal;
	//------------------------------------------------------------------------->
	//Read and Write File
	public static void WriteToFile(string Target, string Text){
		File.WriteAllText(Target, Text);	
	}
	//--------------------------->
	public static string ReadFile(string Target){
		return File.ReadAllText(Target);	
	}
	//--------------------------->
	public string SaveString;
	public string SaveName;
	public string readItems;
	public string stringName;
	public string getName;
	public string SaveScore;

	void Start(){
		stringToEditUsername = "";
	}
	//GUI
	void OnGUI()
	{
		GUI.color = Color.yellow;
		GUI.backgroundColor = Color.yellow;
		//GUI.Box (new Rect (265, 50, 200, 220), "Login Profile");
				
		GUI.Box(new Rect(570,120,200,220), "Login Profile");

		//stringToEditUsername = GUI.TextField (new Rect (265, 90, 200, 30), stringToEditUsername, 25);	
		stringToEditUsername = GUI.TextField (new Rect (570, 170, 200, 30), stringToEditUsername, 25);
					
		if (stringToEditUsername != null) {
			SaveName = "C:/Users/TOP/Documents/Tumya Ranger V1.0/ScoreUser/" + stringToEditUsername + ".txt";
			SaveScore = "C:/Users/TOP/Documents/Tumya Ranger V1.0/ScoreUser/"+stringToEditUsername+"_score"+".txt";
			PlayerPrefs.SetString("ClearName",SaveName);
			PlayerPrefs.SetString("ScoreResult", SaveScore);
			buttonMessage = "Login"; 
			//toggle = GUI.Toggle (new Rect (265, 130, 200, 50), toggle, buttonMessage, "button");
			toggle = GUI.Toggle(new Rect(570, 210, 200, 50), toggle, buttonMessage, "button");
			if (toggle && GUI.Button (new Rect (570, 270, 200, 50), "Welcome to Game")) 
			{
				//if (toggle && GUI.Button(new Rect(570, 270, 200, 50), "Welcome to Game"))
				readItems = PlayerPrefs.GetString ("ClearName");
				LoadString = ReadFile (readItems);
				string[] ObjectsLoaded = LoadString.Split (',');				//Split Text ","
				foreach (string SaveString in ObjectsLoaded) 
				{
					if (SaveString != null) 
					{
						if (stringToEditUsername == SaveString) 
						{
							Application.LoadLevel ("5.1score&Hall");
						}
						else if (stringToEditUsername != SaveString)
						{
							buttonMessage = "Login"; 
						}
					}
				}
			}
		}
	}
}