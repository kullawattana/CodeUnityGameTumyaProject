using UnityEngine;
using System.Collections;
using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.IO;
using System.Text;

public class scoreConsumption : MonoBehaviour {

	public string readScore, LoadScoreString;
	//***********************************************************************>
	public TextMesh textResultLevelP1L1,textResultLevelP2L1,textResultLevelP3L1;
	public TextMesh textResultLevelP1L2,textResultLevelP2L2,textResultLevelP3L2;
	public TextMesh textResultLevelP1L3,textResultLevelP2L3,textResultLevelP3L3;
	public TextMesh textResultLevelP1L4,textResultLevelP2L4,textResultLevelP3L4;
	public TextMesh textResultLevelP1L5,textResultLevelP2L5,textResultLevelP3L5;
	public TextMesh textResultLevelP1L6,textResultLevelP2L6,textResultLevelP3L6;
	public TextMesh textResultLevelP1L7,textResultLevelP2L7,textResultLevelP3L7;
	public TextMesh textResultLevelP1L8,textResultLevelP2L8,textResultLevelP3L8;
	public TextMesh textResultLevelP1L9,textResultLevelP2L9,textResultLevelP3L9;
	public TextMesh textResultLevelP1L10,textResultLevelP2L10,textResultLevelP3L10;
	//***********************************************************************>
	public string[] textSplit;

	public static void WriteToFile(string Target, string Text){
		File.WriteAllText(Target, Text);	
	}
	//--------------------------->
	public static string ReadFile(string Target){
		return File.ReadAllText(Target);	
	}

	// Use this for initialization
	void Start () {
		getString();
	}
	
	void getString() {
		readScore = PlayerPrefs.GetString("ScoreResult");					//Recieve Value to Unlog
		LoadScoreString = ReadFile (readScore);

		textSplit = LoadScoreString.Split(" "[0]);

		for(int i = 0; i < textSplit.Length; i++){
			Debug.Log(textSplit[i]); 										//each split index[]
		}
		//******************************************************** L1
		textResultLevelP1L1.text = textSplit[1];			//Print My Score From Text File
		textResultLevelP2L1.text = textSplit[4];			//Print My Score From Text File
		textResultLevelP3L1.text = textSplit[7];			//Print My Score From Text File
		//******************************************************** L2
		textResultLevelP1L2.text = textSplit[10];			//Print My Score From Text File
		textResultLevelP2L2.text = textSplit[13];			//Print My Score From Text File
		textResultLevelP3L2.text = textSplit[16];			//Print My Score From Text File
		//******************************************************** L3
		textResultLevelP1L3.text = textSplit[19];			//Print My Score From Text File
		textResultLevelP2L3.text = textSplit[22];			//Print My Score From Text File
		textResultLevelP3L3.text = textSplit[25];			//Print My Score From Text File
		//******************************************************** L4
		textResultLevelP1L4.text = textSplit[28];			//Print My Score From Text File
		textResultLevelP2L4.text = textSplit[31];			//Print My Score From Text File
		textResultLevelP3L4.text = textSplit[34];			//Print My Score From Text File
		//******************************************************** L5
		textResultLevelP1L5.text = textSplit[37];			//Print My Score From Text File
		textResultLevelP2L5.text = textSplit[40];			//Print My Score From Text File
		textResultLevelP3L5.text = textSplit[43];			//Print My Score From Text File
		//******************************************************** L6
		textResultLevelP1L6.text = textSplit[46];			//Print My Score From Text File
		textResultLevelP2L6.text = textSplit[49];			//Print My Score From Text File
		textResultLevelP3L6.text = textSplit[52];			//Print My Score From Text File
		//******************************************************** L7
		textResultLevelP1L7.text = textSplit[55];			//Print My Score From Text File
		textResultLevelP2L7.text = textSplit[58];			//Print My Score From Text File
		textResultLevelP3L7.text = textSplit[61];			//Print My Score From Text File
		//******************************************************** L8
		textResultLevelP1L8.text = textSplit[64];			//Print My Score From Text File
		textResultLevelP2L8.text = textSplit[67];			//Print My Score From Text File
		textResultLevelP3L8.text = textSplit[70];			//Print My Score From Text File
		//******************************************************** L9
		textResultLevelP1L9.text = textSplit[73];			//Print My Score From Text File
		textResultLevelP2L9.text = textSplit[76];			//Print My Score From Text File
		textResultLevelP3L9.text = textSplit[79];			//Print My Score From Text File
		//******************************************************** L10
		textResultLevelP1L10.text = textSplit[82];			//Print My Score From Text File
		textResultLevelP2L10.text = textSplit[85];			//Print My Score From Text File
		textResultLevelP3L10.text = textSplit[88];			//Print My Score From Text File
	}
}