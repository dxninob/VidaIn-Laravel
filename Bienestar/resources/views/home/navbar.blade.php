<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BienEstar</title>
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>
<body>
    <nav class="navbar">
        <div class="content">
        <div class="logo"><a href="#">BIENESTAR</a></div>
        <ul class="menu-list">
            <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
            </div>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Mi Calendario</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <div class="icon menu-btn">
            <i class="fas fa-bars"></i>
        </div>
        </div>
    </nav>

    <div class="banner"></div>
    <div class="about">
    <div class="content">
        <div class="title">Samuel te odio</div>
        <p>Hola, esto es una prueba</p>
        </div>
    </div>

    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menu = document.querySelector(".menu-list");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = ()=>{
        menu.classList.add("active");
        menuBtn.classList.add("hide");
        cancelBtn.classList.add("show");
        body.classList.add("disabledScroll");
        }
        cancelBtn.onclick = ()=>{
        menu.classList.remove("active");
        menuBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        body.classList.remove("disabledScroll");
        }

        window.onscroll = ()=>{
        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        }
    </script>
</body>
</html>
