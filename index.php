<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<title>Tạo hình ảnh | XUÂN TUYẾN Education - Nền tảng học lập trình trực tuyến</title>
		<style>
			#container {
				width: 960px;
				height: 540px;
				border: 1px solid #ccc;
			}
		</style>
	</head>
	<body>
		<div id="container"></div>
		<img id="scream" width="0" height="0" src="background.jpg">
		<script>
			// Tạo đối tượng canvas
			const canvas = document.createElement("canvas");
			canvas.width = 960;
			canvas.height = 540;
			const ctx = canvas.getContext("2d");
			// Hiển thị ảnh nền
			const img = document.getElementById("scream");
			ctx.drawImage(img, 0, 0);
			// Hiển thị dòng chữ 'Chứng nhận'
			ctx.textAlign = "right";
			ctx.font = "18px Arial";
			ctx.fillStyle = "darkblue";
			ctx.fillText("Chứng nhận", 890, 230);
			// Hiển thị tên học viên
			ctx.font = "30px Arial";
			ctx.fillStyle = "orange";
			ctx.fillText("Trần Công Tuấn", 890, 275);
			// Hiển thị dòng chữ 'Đã hoàn thành khóa học'
			ctx.font = "18px Arial";
			ctx.fillStyle = "darkblue";
			ctx.fillText("Đã hoàn thành khóa học", 890, 330);
			// Hiển thị tên khóa học
			ctx.font = "28px Arial";
			ctx.fillStyle = "green";
			ctx.fillText("Lập trình HTML, CSS và Javascript căn bản", 890, 370);
			// Hiển thị ngày hoàn thành
			ctx.font = "12px Arial";
			ctx.fillStyle = "black";
			ctx.fillText("Ngày hoàn thành: 17/02/2024", 890, 483);
			// Hiển thị số chứng nhận
			ctx.font = "12px Arial";
			ctx.fillStyle = "black";
			ctx.fillText("Số hiệu chứng nhận: XTE-2024-1", 890, 500);
			// Vẽ đường thẳng
			ctx.beginPath();
			ctx.moveTo(590, 467);
			ctx.lineTo(890, 467);
			ctx.stroke();
			// Chuyển đổi canvas thành hình ảnh
			const dataURL = canvas.toDataURL("image/png");
			// Hiển thị hình ảnh
			const image = document.createElement("img");
			image.src = dataURL;
			document.getElementById("container").appendChild(image);
		</script>
	</body>
</html>