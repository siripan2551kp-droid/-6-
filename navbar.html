<style>
    
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

    nav {
        display: flex; justify-content: space-between; align-items: center;
        padding: 25px 50px; 
        position: absolute; top: 0; left: 0; width: 100%; z-index: 100;
        background: rgba(255, 255, 255, 0.95); 
        box-shadow: 0 2px 10px rgba(0,0,0,0.1); backdrop-filter: blur(10px);
    }

    .logo a { 
        color: #333; text-decoration: none; font-size: 24px; font-weight: 800; 
        letter-spacing: 2px; text-transform: uppercase; display: flex; align-items: center; gap: 10px;
        
    }
.logo a img {
    height: 150px;         
    width: auto;
    position: absolute;   
    left: 50px;           
    z-index: 101;     
    transition: 0.3s;     
}


    .nav-links { list-style: none; display: flex; gap: 30px; }
    .nav-links li { position: relative; padding-bottom: 10px; }
    
    .nav-links a { 
        color: #555; text-decoration: none; font-weight: 600; font-size: 16px; 
        transition: 0.3s; display: block; 
    }
    
    .nav-links li a::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0%; height: 3px; background: #28a745; transition: width 0.3s ease-in-out; }
    .nav-links li a:hover::after { width: 100%; }
    .nav-links li a:hover { color: #000; }

    .dropdown-content {
        display: none; position: absolute; 
        top: 40px; right: 0; background-color: white;
        min-width: 260px; box-shadow: 0px 5px 20px rgba(0,0,0,0.1); border-radius: 10px;
        padding: 5px 0; z-index: 101; border: 1px solid #eee;
    }

    .dropdown-content::before {
        content: ''; position: absolute; top: -20px; left: 0; width: 100%; height: 20px; background: transparent;
    }

    .nav-links li:hover .dropdown-content { display: block; animation: slideDown 0.3s ease; }
    
    .dropdown-item { 
        display: flex; align-items: center; gap: 10px; 
        padding: 8px 15px; border-bottom: 1px solid #f5f5f5; 
        text-decoration: none; transition: background 0.2s; 
    }
    .dropdown-item:hover { background-color: #f9f9f9; }
    .dropdown-img { width: 35px; height: 35px; border-radius: 6px; object-fit: cover; }
    
    .dropdown-item span:first-child { font-size: 13px !important; font-weight: bold; color: #333; }
    .dropdown-item span:last-child { font-size: 11px !important; color: #28a745; margin-top: 2px; }

    @keyframes slideDown { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
    
    @media (max-width: 768px) {
        nav { padding: 15px 20px; }
        .nav-links { gap: 15px; font-size: 14px; }
        .logo a { font-size: 20px; }
    }

</style>

<nav>
    <div class="logo">
<a href="index.php">
    <img src="logo.png" alt="Logo">
</a>
    </div>
    <ul class="nav-links">
        
        <li><a href="index.php">หน้าแรก</a></li>
        
        <li><a href="main.php">สถานที่</a></li>

        <li>
            <a href="#" style="cursor: default;">ติดต่อเรา ▾</a>
            
            <div class="dropdown-content">
                <?php 
                if(isset($destinations)) {
                    foreach ($destinations as $menu) {
                        $phone = isset($menu['phone']) ? $menu['phone'] : '-';
                        $img = isset($menu['image']) ? $menu['image'] : '';
                        
                        echo '<a href="detail.php?id='.$menu['id'].'" class="dropdown-item">';
                        if($img) echo '<img src="'.$img.'" class="dropdown-img">';
                        echo '<div><span style="display:block;">' . $menu['name'] . '</span>';
                        echo '<span style="display:block;">📞 ' . $phone . '</span></div>';
                        echo '</a>';
                    }
                }
                ?>
            </div>
        </li>
    </ul>
</nav>
