<html>
	<head>
		<title>models</title>
		<style>
			body { margin: 0; }
			canvas { display: block; }
		</style>
	</head>
	<body>
        <script src="https://threejs.org/build/three.js"></script>
        <script src="https://threejs.org/examples/js/controls/OrbitControls.js"></script>
        <script src="https://threejs.org/examples/js/loaders/PLYLoader.js"></script>
		<script src="https://threejs.org/examples/js/loaders/OBJLoader.js"></script>
        <script>
            // Simple three.js example

            var mesh, renderer, scene, camera, controls;

            init();
            animate();

            function init() {

              // renderer
              renderer = new THREE.WebGLRenderer();
              renderer.setSize(window.innerWidth, window.innerHeight);
              document.body.appendChild(renderer.domElement);

              // scene
              scene = new THREE.Scene();

              // camera
              camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.1, 1000 );
              camera.position.set( 50, 50, 50 );

              // controls
              controls = new THREE.OrbitControls(camera,renderer.domElement);

              // ambient
              scene.add(new THREE.AmbientLight(0x222222));

              // light
              var light = new THREE.DirectionalLight(0xffffff, 1);
              light.position.set(20, 20, 0);
              scene.add(light);

              // axes
              // scene.add(new THREE.AxesHelper(5));

			  var objLoader = new THREE.OBJLoader();
			  objLoader.load('./poly/polyline.obj',
				(obj) => {
				    // the request was successfull
				    let material = new THREE.PointsMaterial({ color: 0xffffff, size: 0.25 })
				    mesh = new THREE.Points(obj.children[0].geometry, material)
					mesh.scale.set( 0.05, 0.05, 0.05 );
					mesh.position.x = 255;
				    mesh.position.y = 0;
					mesh.position.z = 105;
				    scene.add(mesh);
				},
				(xhr) => {
				    // the request is in progress
				},
				(err) => {
				    // something went wrong
				})
            }

            function animate() {
                  requestAnimationFrame(animate);
                  renderer.render(scene, camera);
            }
</script>
	</body>
</html>
