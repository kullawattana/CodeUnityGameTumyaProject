var cutplane: Transform; // plane used for cutting (just needs some Y coordinate)
var cloneprefab : Transform;
private var initialDensity : float;

function Start()
{
	// get density (used for calculating mass for slices)
	initialDensity = rigidbody.mass/(GetComponent(MeshFilter).mesh.bounds.size.x*GetComponent(MeshFilter).mesh.bounds.size.y*GetComponent(MeshFilter).mesh.bounds.size.z);
}

// fake-slicer function 
function SliceIt() 
{
	// original mesh
	var mesh : Mesh = GetComponent(MeshFilter).mesh;

	// check if sliceplane hits original box?
	// **to-do**

	// check object size, can we still slice it, or its too thin?
	//	print (mesh.bounds.size.y);
	if (mesh.bounds.size.y<0.05) return; // min height 0.05 used here for now

	// get original mesh vertices
	var vertices : Vector3[] = mesh.vertices;
	
	// ok, ready to slice it, make clone for slice object
	var clone : Transform;
	clone = Instantiate(cloneprefab, transform.position+Vector3(0,0,0),Quaternion(0,0,0,0));
	// ** prefab needs to be same size as original (or have to adjust it to that, we have same size for now)

	// get slice mesh
	var meshPiece : Mesh = clone.GetComponent(MeshFilter).mesh;
	var verticesPiece : Vector3[] = meshPiece.vertices;
	
	// loop thru vertexes (of original object, but slice clone has same amount)
	for (var i = 0; i < vertices.Length; i++)
	{
		// Transforms the position x, y, z from local space to world space
		tmpverts = transform.TransformPoint(vertices[i]); // original object vertices
		tmpvertsPiece = transform.TransformPoint(verticesPiece[i]); // slice object vertices

		// if vertices are _below_ cut plane, then need to "cut them" = move them higher, to cut plane-y
		if (tmpverts.y<cutplane.position.y)
		{
			// update original object vertices: move them up, to cut plane, so it looks like we have sliced the object
			vertices[i] = transform.InverseTransformPoint(Vector3(tmpverts.x,cutplane.position.y,tmpverts.z));
			
			// update slice object vertices: move them to where original box vertices were, so our slice takes the place of moved vertices
			verticesPiece[i] = transform.InverseTransformPoint(Vector3(tmpverts.x,tmpverts.y,tmpverts.z));

		
		}else{ // we are above cutplane,

			// update slice object vertices: move them to cutplane Y
			verticesPiece[i] = transform.InverseTransformPoint(Vector3(tmpverts.x,cutplane.position.y,tmpverts.z));

		}
	}
		
	// some mesh stuff
	mesh.vertices = vertices;
	mesh.RecalculateBounds();

	meshPiece.vertices = verticesPiece;
	meshPiece.RecalculateBounds();

	// adjust collision box size & location
	clone.collider.size = meshPiece.bounds.size; // reset size
	clone.collider.center = meshPiece.bounds.center; // reset center

	// update mass after sliced (for original object, and slice clone)
	rigidbody.mass = (mesh.bounds.size.x*mesh.bounds.size.y*mesh.bounds.size.z)*initialDensity;
	clone.rigidbody.mass = (meshPiece.bounds.size.x*meshPiece.bounds.size.y*meshPiece.bounds.size.z)*initialDensity;
}

// main loop
function Update () 
{
	if (Input.GetKeyDown("a")) // press A to slice
	{
		SliceIt();
	}

	if (Input.GetKey("w")) // move slice plane UP
	{
		cutplane.position.y+=0.01;
	}
	if (Input.GetKey("s")) // move slice plane DOWN
	{
		cutplane.position.y-=0.01;
	}
}
