<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Thailand Mountains</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        
        body {
            height: 100vh;
            overflow: hidden; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000; /
        }

        .bg-media {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover; 
            z-index: -1;
            opacity: 0.6; 
            
            transition: opacity 1s ease-in-out;
        }
        
        .overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.3); z-index: 0; 
        }

        .intro-content {
            text-align: center;
            color: white;
            z-index: 10;
            position: relative;
            padding: 20px;
        }

        h1 {
            font-size: 60px; font-weight: 900; text-transform: uppercase; letter-spacing: 3px;
            margin-bottom: 10px; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            animation: fadeInDown 1.5s ease;
        }

        p {
            font-size: 24px; font-weight: 300; margin-bottom: 40px; letter-spacing: 1px;
            animation: fadeIn 2s ease;
        }

   
        .enter-btn {
            display: inline-block; padding: 15px 40px; border: 2px solid white;
            color: white; text-decoration: none; font-size: 18px; font-weight: 700;
            letter-spacing: 2px; text-transform: uppercase; transition: 0.4s;
            background: rgba(255,255,255,0.1); backdrop-filter: blur(5px);
            animation: fadeInUp 2s ease;
        }

        .enter-btn:hover {
            background: white; color: black; transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255,255,255,0.5);
        }

        @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        @media (max-width: 768px) {
            h1 { font-size: 36px; }
            p { font-size: 16px; }
        }
    </style>
</head>
<body>

    <img src="https://blog.bangkokair.com/wp-content/uploads/2025/07/01_doi-inthanon-travel-guide.jpg" class="bg-media" id="bg-slider">

    <div class="overlay"></div>

    <div class="intro-content">
        <h1>แนะนำสถานที่ท่องเที่ยวดอย 6 แห่ง<br>ในภาคเหนือ</h1>
        <p>สำรวจธรรมชาติที่ดีของประเทศไทย</p>
        
        <a href="main.php" class="enter-btn">เข้าสู่เว็บไซต์</a>
    </div>

    <script>
        const images = [
            'https://blog.bangkokair.com/wp-content/uploads/2025/07/01_doi-inthanon-travel-guide.jpg', 
            'https://www.uptomego.com/wp-content/uploads/2022/09/%E0%B8%94%E0%B8%AD%E0%B8%A2%E0%B8%9C%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B9%88%E0%B8%A1%E0%B8%9B%E0%B8%81-12.jpg', 
            'https://greenworld.or.th/wp-content/uploads/2017/11/Template-banner-WEB-1.jpg', 
            'https://pbs.twimg.com/media/DfQZRMmUwAEfr1S.jpg', 
            'https://sundayz.me/wp-content/uploads/2020/03/kaoluang-sukhothai-21.jpg',
            'https://www.uptomego.com/wp-content/uploads/2022/11/DSCF9359-scaled.jpg'  
        ];

        let currentIndex = 0;
        const imgElement = document.getElementById('bg-slider');
        function changeBackground() {

            imgElement.style.opacity = 0;


            setTimeout(() => {
                currentIndex = (currentIndex + 1) % images.length; 
                imgElement.src = images[currentIndex];

                imgElement.style.opacity = 0.6; 
            }, 1000); 
        }

        setInterval(changeBackground, 5000);
    </script>

</body>
</html>
