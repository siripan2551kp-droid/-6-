<?php
include 'data.php';

// รับค่า ID จาก URL ถ้าไม่มีให้เป็น 1
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$mountain = $destinations[$id];
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $mountain['name']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background-color: #f8f9fa; display: flex; flex-direction: column; min-height: 100vh; }
        
        /* Header Section */
        .header {
            height: 50vh;
            background: url('<?php echo $mountain['image']; ?>') no-repeat center center/cover;
            position: relative; display: flex; align-items: center; justify-content: center; color: white;
        }
        .overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); }
        .header-content { position: relative; z-index: 1; text-align: center; }
        .header-content h1 { font-size: 3rem; font-weight: 800; text-transform: uppercase; }

        /* Container */
        .content-container {
            max-width: 900px; width: 95%; margin: -60px auto 50px; background: white;
            padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative; z-index: 2; flex: 1;
        }
        
        .section-title { border-left: 5px solid #28a745; padding-left: 15px; margin-bottom: 25px; font-size: 24px; }
        .detail-text { line-height: 1.8; color: #444; margin-bottom: 30px; font-size: 16px; }
        
        /* ------------------------------------- */
        /* Slider Gallery (ระบบเลื่อนรูป) */
        /* ------------------------------------- */
        .slider-wrapper { 
            position: relative; width: 100%; margin-top: 20px; 
            border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .slider-container {
            display: flex; overflow-x: auto; scroll-behavior: smooth;
            -ms-overflow-style: none; /* ซ่อน Scrollbar ของ IE */
            scrollbar-width: none; /* ซ่อน Scrollbar ของ Firefox */
        }
        .slider-container::-webkit-scrollbar { display: none; } /* ซ่อน Scrollbar ของ Chrome/Safari */
        
        .slider-img {
            flex: 0 0 100%; /* บังคับให้รูปกว้าง 100% ของกรอบทีละ 1 รูป */
            width: 100%; max-height: 500px; object-fit: cover;
        }
        
        /* ปุ่มกดเลื่อน ซ้าย-ขวา */
        .slide-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.85); color: #333;
            border: none; width: 45px; height: 45px; border-radius: 50%;
            font-size: 20px; font-weight: bold; cursor: pointer; z-index: 10;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2); transition: 0.3s;
            display: flex; align-items: center; justify-content: center;
        }
        .slide-btn:hover { background-color: #333; color: white; }
        .slide-btn.prev { left: 15px; }
        .slide-btn.next { right: 15px; }
        /* ------------------------------------- */

        /* Media Elements */
        .video-box, .map-box { 
            width: 100%; height: 450px; border-radius: 15px; overflow: hidden; 
            margin-top: 20px; border: 1px solid #ddd; box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .section-divider { margin-top: 50px; border-top: 1px solid #eee; padding-top: 30px; }
        
        /* Back Button */
        .btn-back-container { text-align: center; margin-top: 50px; }
        .btn-back {
            display: inline-block; padding: 12px 40px; border: 2px solid #333; 
            border-radius: 30px; text-decoration: none; color: #333; 
            font-weight: 600; transition: 0.3s;
        }
        .btn-back:hover { background: #333; color: white; }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <h1><?php echo $mountain['name']; ?></h1>
            <p>📍 <?php echo $mountain['location']; ?></p>
        </div>
    </div>

    <div class="content-container">
        <h2 class="section-title">รายละเอียดสถานที่</h2>
        <div class="detail-text">
            <?php echo $mountain['full_detail']; ?>
        </div>

        <?php if(!empty($mountain['gallery'])): ?>
            <div class="section-divider">
                <h3>✨ ภาพบรรยากาศเพิ่มเติม</h3>
                <div class="slider-wrapper">
                    <button class="slide-btn prev" onclick="slideGallery(-1)">&#10094;</button>
                    
                    <div class="slider-container" id="galleryContainer">
                        <?php foreach($mountain['gallery'] as $img): ?>
                            <img src="<?php echo $img; ?>" class="slider-img">
                        <?php endforeach; ?>
                    </div>

                    <button class="slide-btn next" onclick="slideGallery(1)">&#10095;</button>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!empty($mountain['video'])): ?>
            <div class="section-divider">
                <h3>🎥 วิดีโอแนะนำสถานที่</h3>
                <div class="video-box">
                    <iframe 
                        width="100%" height="100%" 
                        src="<?php echo $mountain['video']; ?>" 
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        <?php endif; ?>

        <?php if(!empty($mountain['map_link'])): ?>
            <div class="section-divider">
                <h3>📍 แผนที่การเดินทาง</h3>
                <div class="map-box">
                    <iframe 
                        src="<?php echo $mountain['map_link']; ?>" 
                        width="100%" height="100%" 
                        style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        <?php endif; ?>

        <div class="btn-back-container">
            <a href="main.php" class="btn-back">← ย้อนกลับไปหน้าสถานที่</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        function slideGallery(direction) {
            const container = document.getElementById('galleryContainer');
            const scrollAmount = container.clientWidth; // ดึงขนาดความกว้างของรูป เพื่อให้เลื่อนพอดี 1 รูป
            container.scrollBy({ left: scrollAmount * direction, behavior: 'smooth' });
        }
    </script>

</body>
</html>



