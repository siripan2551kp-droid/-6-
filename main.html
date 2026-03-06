<?php
include 'data.php'; 
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
 
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        
        body { 

            padding-top: 100px; 
        }


        .bg-media {
            position: fixed; 
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover; 
            z-index: -2;
            opacity: 0.6; 
            transition: opacity 1s ease-in-out;
        }
        

        .overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.5); 
            z-index: -1;
        }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .page-title {
            text-align: center;
            margin-bottom: 40px;
            color: #fdfdfc; 
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5); 
        }
        .page-title h1 { font-size: 42px; font-weight: 800; text-transform: uppercase; letter-spacing: 2px; }
        .page-title p { color: #ddd; margin-top: 10px; font-size: 16px; }

       
        .mountain-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 30px;
        }

        .mountain-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .mountain-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        .card-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-info {
            padding: 25px;
            text-align: center;
        }
        .card-info h3 {
            font-size: 20px; font-weight: 700; margin-bottom: 8px; color: #333; text-transform: uppercase;
        }
        .card-info p {
            font-size: 14px; color: #7e7979; margin-bottom: 0;
        }
        
        .click-hint {
            margin-top: 15px; font-size: 13px; font-weight: 600; color: #28a745; display: inline-block;
        }


        @media (max-width: 992px) { .mountain-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 600px) { .mountain-grid { grid-template-columns: 1fr; } .page-title h1 { font-size: 28px; } }
    </style>
</head>
<body>

    <img src="https://blog.bangkokair.com/wp-content/uploads/2025/07/01_doi-inthanon-travel-guide.jpg" class="bg-media" id="bg-slider">
    <div class="overlay"></div>

    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="page-title">
            <h1>แนะนำสถานที่ท่องเที่ยวดอย 6 แห่งในภาคเหนือ</h1>
            <p>เลือกสถานที่ที่คุณต้องการไปสัมผัสธรรมชาติ</p>
        </div>

        <div class="mountain-grid">
            <?php foreach($destinations as $place): ?>
                <a href="detail.php?id=<?php echo $place['id']; ?>" class="mountain-card">
                    <img src="<?php echo $place['image']; ?>" alt="<?php echo $place['name']; ?>" class="card-img">
                    <div class="card-info">
                        <h3><?php echo $place['name']; ?></h3>
                        <p>📍 <?php echo $place['location']; ?></p>
                        <span class="click-hint">ดูรายละเอียด ➜</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        const images = [
            'https://cbtthailand.dasta.or.th/upload-file-api/Resources/RelateAttraction/Images/RAT500200/1.jpeg',
            'https://www.uptomego.com/wp-content/uploads/2022/09/%E0%B8%94%E0%B8%AD%E0%B8%A2%E0%B8%9C%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B9%88%E0%B8%A1%E0%B8%9B%E0%B8%81-12.jpg',
            'https://s359.kapook.com/pagebuilder/0cc0b732-ffda-4e22-9434-a419a880eee2.jpg',
            'https://scontent.fphs1-1.fna.fbcdn.net/v/t39.30808-6/600363190_1184581133786136_5641801936059359215_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_ohc=_Fm2bD-neBgQ7kNvwFWqiTK&_nc_oc=Adkdnf0ZJKwXmaB7_ukYmakeN5nyNbj7bv7vWhQga5r05QagrFI_BE32t7a1QttaORQ&_nc_zt=23&_nc_ht=scontent.fphs1-1.fna&_nc_gid=bTgvdZqbkYr_MK1eoUsffQ&oh=00_Afrwty4L_6qq8bWqrT55mhJYNSHdj2DLz2o2qISNSWzxVQ&oe=6966C089',
            'https://sundayz.me/wp-content/uploads/2020/03/kaoluang-sukhothai-21.jpg',
            'https://www.uptomego.com/wp-content/uploads/2022/11/DSCF9359-scaled.jpg',
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
<?php include 'footer.php'; ?>
</body>
</html>

