using UnityEngine;
using System.Collections;
using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.IO;
using System.Text;

public class createProfile : MonoBehaviour {
	
	//Load Level
	public String saveFromGetString;
	public string LoadString;							//Load Level
	//------------------------------------------------------------------------->
	//Create Username to Save Items	
	public string stringToEditUsername = "";			
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
	//GUI
	void OnGUI()
	{
		GUI.color = Color.yellow;
		GUI.backgroundColor = Color.yellow;
		//GUI.Box(new Rect(265,50,200,220), "Create Profile");
		GUI.Box(new Rect(570,120,200,220), "Create Profile");

		//stringToEditUsername = GUI.TextField (new Rect (265, 90, 200, 30), stringToEditUsername, 25);	
		stringToEditUsername = GUI.TextField (new Rect (570, 170, 200, 30), stringToEditUsername, 25);		

		if(stringToEditUsername != null)    		
		{	
			buttonMessage = "Create Profile"; 
			//toggle = GUI.Toggle(new Rect(265, 130, 200, 50), toggle, buttonMessage, "button");
			toggle = GUI.Toggle(new Rect(570, 210, 200, 50), toggle, buttonMessage, "button");

			//if (toggle && GUI.Button(new Rect(265, 190, 200, 50), "Welcome to Game"))
			if (toggle && GUI.Button(new Rect(570, 270, 200, 50), "Welcome to Game"))
			{
				Save();
				//isPlayingAudioHerbal = true;
				//audio.clip = herbal;
				//audio.Play();
				Application.LoadLevel("6.MainMenu");
			}
		}
	}
	
	public string SaveString,SaveScoreString;
	public string SaveName;
	public string SaveScore;

	void Save()
	{
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

		SaveString = "object1"+","+stringToEditUsername;
		SaveScoreString = stringToEditUsername;
		SaveName = "C:/Users/TOP/Documents/Tumya Ranger V1.0/ScoreUser/"+stringToEditUsername+".txt";
		SaveScore = "C:/Users/TOP/Documents/Tumya Ranger V1.0/ScoreUser/"+stringToEditUsername+"_score"+".txt";
		WriteToFile (SaveName, SaveString);
		WriteToFile (SaveScore, L1+L2+L3+L4+L5+L6+L7+L8+L9+L10);
		PlayerPrefs.SetString("Name", stringToEditUsername); 
		PlayerPrefs.SetString("ClearName", SaveName); 
		PlayerPrefs.SetString("ScoreResult", SaveScore);
	}
}