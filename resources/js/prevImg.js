document.getElementById('img').onchange = function(e) {
	let reader = new FileReader();
	reader.readAsDataURL(e.target.files[0]);
	reader.onload = function () {
		let prevImg = document.getElementById('prevImg');

		image = document.createElement('img');
		image.src=reader.result;
		image.className="img-fluid";
		prevImg.innerHTML = '';
		prevImg.append(image);
	}
}