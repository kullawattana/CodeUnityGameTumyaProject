var cutplane: Transform; // plane used for cutting (just needs some Y coordinate)
var object2cut: Transform; // object to cut, used here for moving it
var cloneprefab : Transform; // clone prefab, all the slices are cloned from this
private var initialDensity : float; // density value, used in start & after cloning
private var cutDone : boolean = false; // cutDone = true, means we just sliced something


function Start()
{
	initialDensity = rigidbody.mass/(GetComponent(MeshFilter).mesh.bounds.size.x*GetComponent(MeshFilter).mesh.bounds.size.y*GetComponent(MeshFilter).mesh.bounds.size.z);
}

// fake-slicer function
function SliceIt() 
{
	// original mesh
	var mesh : Mesh = GetComponent(MeshFilter).mesh;

	if (mesh.bounds.size.x<0.05) return; 

	var vertices : Vector3[] = mesh.vertices;
	var clone : Transform;
	clone = Instantiate(cloneprefab, transform.position+Vector3(0,0,0),transform.rotation);

	var meshPiece : Mesh = clone.GetComponent(MeshFilter).mesh;
	var verticesPiece : Vector3[] = meshPiece.vertices;

	for (var i = 0; i < vertices.Length; i++)
	{
		tmpverts = transform.TransformPoint(vertices[i]); // original object vertices
		tmpvertsPiece = transform.TransformPoint(verticesPiece[i]); // slice object vertices

		if (tmpverts.x<cutplane.position.x)
		{
			vertices[i] = transform.InverseTransformPoint(Vector3(cutplane.position.x,tmpverts.y,tmpverts.z));
			verticesPiece[i] = transform.InverseTransformPoint(Vector3(tmpverts.x,tmpverts.y,tmpverts.z));
		
		}else{ 

			verticesPiece[i] = transform.InverseTransformPoint(Vector3(cutplane.position.x,tmpverts.y,tmpverts.z));

		}
	}

	cutplane.transform.eulerAngles = Vector3(0, 0, 90);
	cutDone = true; 

	mesh.vertices = vertices;
	mesh.RecalculateBounds();

	meshPiece.vertices = verticesPiece;
	meshPiece.RecalculateBounds();

	clone.transform.gameObject.AddComponent(MeshCollider);
	clone.transform.GetComponent(MeshCollider).sharedMesh = clone.GetComponent(MeshFilter).mesh;
	clone.transform.GetComponent(MeshCollider).convex = true;

	rigidbody.mass = (mesh.bounds.size.x*mesh.bounds.size.y*mesh.bounds.size.z)*initialDensity;
	clone.rigidbody.mass = (meshPiece.bounds.size.x*meshPiece.bounds.size.y*meshPiece.bounds.size.z)*initialDensity;

}

// main loop
function Update () 
{
	if (cutDone) 
	{
		cutplane.transform.Rotate(Vector3.right * Time.deltaTime*350, Space.World);
		if (cutplane.transform.eulerAngles.y>80) cutDone = false;

	}else{ 
		if (Input.GetKeyDown("space")) // slice
		{
			if ((object2cut.position.x>992.24) && (object2cut.position.x<995.31))	
			SliceIt();
		}
		if (Input.GetKey("a")) // move object
		{
			object2cut.position.x-=0.01;
		}
		if (Input.GetKey("d")) // move object
		{
			object2cut.position.x+=0.01;
		}
	}
}
