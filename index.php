<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<style>
		#video, #camara {
			display: inline-block;
		}
		#video {
			position: relative;
			width: 100%;
			height: auto;
			border-radius: 12px;
			box-shadow: 1px 2px 3px rgba(0, 0, 0, .5);
		}
		#camara {
			position: absolute;
			width: 150px;
			height: 150px;
			bottom: 0;
			right: 0;
			border-radius: 12px;
			box-shadow: 1px 2px 3px rgba(0, 0, 0, .5);
		}
		.Botones {
			position: absolute;
			z-index: 1;
			bottom: 0;
			left: 0;
		}
		#content {
			position: relative;
		}
	</style>
</head>
<body>
	<div class="container" id="content">
		<div class="mx-1 Botones">
			<button id="start" class="btn btn-info"><i class="fa-solid fa-desktop"></i></button>
			<button id="stop" class="btn btn-danger">Stop</button>
		</div>
		<video id="video" autoplay></video>
		<video id="camara" autoplay></video>
	</div>
</body>
<script>
		start = document.getElementById('start');
		stop = document.getElementById('stop');
		video = document.getElementById('video');
		camara = document.getElementById('camara');
		start.addEventListener("click", async ()=> {
			try {
				video.srcObject = await navigator.mediaDevices.getDisplayMedia({
					video: true,
					audio: true
				})
				camara.srcObject = await navigator.mediaDevices.getUserMedia({
					video: true
				})
			} catch (error) {
				console.log(error);
			}
		})
		stop.addEventListener("click", async ()=> {
			video.srcObject = null;
		})
</script>
</html>