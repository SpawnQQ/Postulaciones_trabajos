using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class prefabs : MonoBehaviour {

	public GameObject prefabsHijos;
	public GameObject prefabsPadre;
	int cantPadres;
	int cantHijos;
	public GameObject nombreElemento;
	public GameObject nombreFps;
	public GameObject nombreTiempo;

	public float deltaTime;
	float secondsCounter=0;

	// Use this for initialization
	void Start () {
		cantPadres = 0;
		cantHijos = 0;

	}
	
	// Update is called once per frame
	void Update () {
		secondsCounter += Time.deltaTime;
		deltaTime += (Time.deltaTime - deltaTime) * 0.1f;
		float fps = 1.0f / deltaTime;
		nombreFps.GetComponent<Text>().text = "fps: "+ Mathf.Ceil (fps).ToString ();
		nombreTiempo.GetComponent<Text> ().text = "tiempo(s): " + System.Math.Round(secondsCounter,1);
		if (cantPadres < 20000) {
			GameObject objetoPadre = Instantiate (prefabsPadre) as GameObject;
			objetoPadre.name = "objetoPadre" + (cantPadres + 1);
			cantPadres++;
			for (cantHijos = 0; cantHijos < 100; cantHijos++) {
				GameObject objetoHijo = Instantiate (prefabsHijos) as GameObject;
				objetoHijo.name = "objetoHijo" + (cantPadres) + ", " + (cantHijos + 1);
				objetoHijo.transform.parent = objetoPadre.transform;
				objetoHijo.transform.position = new Vector2 (Random.Range (-64f, 64f), Random.Range (-30f, 30f));
			}
			nombreElemento.GetComponent<Text> ().text = "Elemento " + cantPadres;	
		}
	}
}
