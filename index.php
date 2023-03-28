<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>" />
</head>
<body>

    <?php
        include("./section/products.php");
        
    ?>
    <script> const products = <?php echo json_encode($products)?>;
        const eventProducts = <?php echo json_encode($eventProducts)?>;
        const schoolProducts = <?php echo json_encode($schoolProducts)?>;
        const decorationProducts = <?php echo json_encode($decorationProducts)?>;
    </script>
    
    <div class='header-container'>
        <h1>Creaciones Gael</h1>
        <ul class = nav-list>
            <li><a href='#'>Inicio</a></li>
            <li><a href='#catalogue'>Catálogo</a></li>
            <li><a href='#about'>Acerca de</a></li>
            <li><a href='#contact'>Contáctanos</a></li>
        </ul>
    </div>
    <section>
        <div class="options">
            <div class = "search">
                <input type="text" name='txtName' placeholder = 'Buscar por nombre' class = "search-bar">
                <input type="submit" name='btnSearch' value='Buscar' class = "search-button"> 
            </div>
            <div class = "filter-order">
                <label for="" class="filter-options">
                    Filtrar:
                    <select name="category"  class='list category-list' >
                        <option value="all" class = "option" >TODOS</option>
                        <option value="school" class = "option">ESCOLAR</option>
                        <option value="event" class = "option">EVENTO</option>
                        <option value="decoration" class = "option">DECORACION</option>
                    </select>
                </label>
                <label for="" class="order-options">
                    Ordenar por:
                    <select name="order"  class='list order-list' >
                        <option value="name" class = "option" >Nombre</option>
                        <option value="price" class = "option">Precio</option>
                    </select>
                    
                </label>
                
            </div>
        </div>
                
        <div class="flex-container" id="catalogue"></div>
        <div class ="button-container"><button class = "show-more" >Ver todo</button></div>
        <div class ="about" id="about">
            <img src="" alt="imagen creaciones">
            <div class = "about-info">
                <h3>About</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla voluptates vel repudiandae et eum ducimus facere, inventore dolorem accusamus sequi pariatur recusandae, sunt mollitia minus tenetur corrupti quo totam! Error tempore eveniet eum ipsum, earum nobis quisquam fuga dolore iusto omnis ea laborum, minima numquam cupiditate inventore exercitationem minus quam. Quae reiciendis provident temporibus rerum nulla, totam incidunt, accusantium, culpa facere esse vitae eveniet animi! Aspernatur animi soluta consectetur obcaecati eos? Tempora excepturi soluta distinctio non deserunt culpa eligendi explicabo, minus velit eveniet at laboriosam necessitatibus tenetur! Voluptatem quam fugiat earum, autem maxime atque ipsum, qui iste excepturi, maiores sequi.</p>
            </div>
        </div>

    </section>
    <footer>
        <div class = "footer-container" id="contact">
            <div class="contact-method">
                <img src="./icons/whatsapp-logo.png" alt="whatsapp" class = "logo">
                <h5>Whatsapp <br> 1234567890</h5>
            </div>
            <div class="contact-method">
                <img src="./icons/facebook-logo.png" alt="facebook" class="logo">
                <h5>Facebook <br> facebook.user</h5>
            </div>
        </div>
    </footer>

    <script src="./section/filter.js"></script>
    <script src="./section/search.js"></script>
</body>
</html>