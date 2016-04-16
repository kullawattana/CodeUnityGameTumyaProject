using UnityEngine;
using System.Collections;
using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.IO;
using System.Text;

public class saveF1L5 : MonoBehaviour {
	//Load Level
	public String saveFromGetString;
	public string LoadString;							//Load Level
	//------------------------------------------------------------------------->
	//Create Username to Save Items	
	public string stringToEditUsername = "";			
	//------------------------------------------------------------------------->
	//Sound Herbal
	/*
	public Boolean isPlayingAudioHerbal = false; 
	public AudioClip herbal;
	*/
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
	/*
	public AudioClip Trigger;
	public Boolean isPlayingAudio = false;
	*/
	//--------------------------->
	public TextMesh textResultLevelP1L5;
	//*************************************************************************
	public TextMesh textResultLevelP2L5;
	//*************************************************************************
	public TextMesh textResultLevelP3L5;
	//--------------------------->
	public string SaveString, SaveName, read, SaveScoreName, LoadScoreString;
	public string stringE;

	
	void Awake() {
		//Score Show Part 1 L1-L10
		textResultLevelP1L5.text = "" + PlayerPrefs.GetInt("ScoreSubP1L5");
		//Score Show Part 2 L1-L10
		textResultLevelP2L5.text = "" + PlayerPrefs.GetInt("ScoreLevel_P2L5");
		//Score Show Part 3 L1-L10
		textResultLevelP3L5.text = "" + PlayerPrefs.GetInt("ScoreLevelP3L5");
	}
	
	void OnTriggerEnter(Collider other){
		if (other.tag == "nextL5") {
			Application.LoadLevel("15.Level4-6");
			save();
		}
	}

	public string Name;
	void save(){
		stringE = "object1,object2,object3,object4,object5,object6";
		Name = PlayerPrefs.GetString("Name"); 

		string L1 = "L1_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L1") + " , " 
			+ "L1_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L1") + " , " 
				+ "L1_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L1") + " , " + "\r\n";
		
		string L2 = "L2_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L2") + " , " 
			+ "L2_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L2") + " , " 
				+ "L2_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L2") + " , " + "\r\n";
		
		string L3 = "L3_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L3") + " , " 
			+ "L3_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L3") + " , " 
				+ "L3_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L3") + " , " + "\r\n";
		
		string L4 = "L4_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L4") + " , " 
			+ "L4_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L4") + " , " 
				+ "L4_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L4") + " , " + "\r\n";
		
		string L5 = "L5_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L5") + " , " 
			+ "L5_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L5") + " , " 
				+ "L5_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L5") + " , " + "\r\n";
		
		string L6 = "L6_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L6") + " , " 
			+ "L6_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L6") + " , " 
				+ "L6_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L6") + " , " + "\r\n";
		
		string L7 = "L7_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L7") + " , " 
			+ "L7_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L7") + " , " 
				+ "L7_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L7") + " , " + "\r\n";
		
		string L8 = "L8_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L8") + " , " 
			+ "L8_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L8") + " , " 
				+ "L8_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L8") + " , " + "\r\n";
		
		string L9 = "L9_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L9") + " , " 
			+ "L9_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L9") + " , " 
				+ "L9_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L9") + " , " + "\r\n";
		
		string L10 = "L10_P1 :" + PlayerPrefs.GetInt ("ScoreSubP1L10") + " , " 
			+ "L10_P2 :" + PlayerPrefs.GetInt("ScoreLevel_P2L10") + " , " 
				+ "L10_P3 :" + PlayerPrefs.GetInt("ScoreLevelP3L10") + " , " + "\r\n";

		SaveScoreName = PlayerPrefs.GetString ("ScoreResult");					//Recieve Value to Unlog
		LoadScoreString = ReadFile (SaveScoreName);
		string[] ObjectsScoreLoaded = LoadScoreString.Split(',');					//Split Text ","
		
		foreach (string SaveString in ObjectsScoreLoaded) 
		{
			if(SaveString != null)
			{
				print (SaveString);
				if(SaveString == "object5")		
				{
					WriteToFile (SaveScoreName, L1+L2+L3+L4+L5+L6+L7+L8+L9+L10);
				}
			}
		}
		
		SaveName = PlayerPrefs.GetString ("ClearName");					//Recieve Value to Unlog
		LoadString = ReadFile (SaveName);
		string[] ObjectsLoaded = LoadString.Split(',');					//Split Text ","
		
		foreach (string SaveString in ObjectsLoaded) 
		{
			if(SaveString != null)
			{
				print (SaveString);
				if(SaveString == "object5")		
				{
					WriteToFile (SaveName, stringE+","+Name);				//write object1
					WriteToFile (SaveScoreName, L1+L2+L3+L4+L5+L6+L7+L8+L9+L10);
				}
			}
		}
	}
	
	void OnGUI()
	{
		// Make a background box
		GUI.Box(new Rect(10,10,170,90), "Loader Menu");        
		if(GUI.Button(new Rect(20,40,150,20), "Hall of Fame")) 
		{
			PlayerPrefs.SetString("click", "F5");
			Application.LoadLevel("10 type");
		}
	}
}