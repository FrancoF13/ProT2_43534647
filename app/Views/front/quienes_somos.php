<!-----------------------------COMIENZO DE CARDS------------------------------------>
<div class="card-group">
    <div class="card">
        <img src="assets/img/yo1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Franco</h5>
            <p class="card-text">Soy un chico apasionado por la tecnologia,me gusta aprender y mantenerme actualizado en este mundo de la programación.</p>
            
        </div>
    </div>

    <div class="card">
        <img src="assets/img/yo2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Exequiel</h5>
            <p class="card-text">Tambien me gusta experimentar nuevas habilidades y conocer como funciona otras areas tanto de la tecnologia como del arte.</p>
            
        </div>
    </div>

    <div class="card">
        <img src="assets/img/yo3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Fernández</h5>
            <p class="card-text">Sobre mis hobbies me gusta mucho tocar la guitarra, cantar y tambien jugar ademas de pasar un buen rato con amigos.</p>
            
        </div>
    </div>
</div>
<!-----------------------------FIN DE CARDS------------------------------------>

<!-------------------------------------------ESTILO DE LAS CARDS------------------------------------------------->
<style>
        body {
            background-color: rgba(30, 49, 78, 0.4);
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            min-height: 100px;
        }
        .card-group {
            display: flex;
            flex-wrap:wrap;
            gap: 20px;
            margin-top: 30px;
            margin-bottom: 50px; 
            justify-content: center;
        }
        .card {
            flex: 1;
            max-width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            padding: 30px;
        }
        .card-title {
            font-size: 20px;
            font-weight: bold;
        }
        .card-text {
            font-size: 15px;
        }
        .text-body-secondary {
            color: #888;
        }
    </style>