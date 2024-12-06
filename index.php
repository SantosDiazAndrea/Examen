<!DOCTYPE html>
<html lang="es">
<head>
<script>
    MathJax = {
        tex: {
            inlineMath: [['\\(', '\\)'], ['$', '$']],
            displayMath: [['\\[', '\\]']]
        },
        svg: {
            fontCache: 'global'
        }
    };
</script>
<script async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTROPHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="header">
        <h1>Santos Diaz Andrea</h1>
        <p>Número de Control: 22090754</p>
    </div>
    <div class="container">
        
        <div class="box problem">
            <h2>Problema</h2>
            <p>
                Una placa fotovoltaica de 60x80 cm tiene un rendimiento del 20%. La energía solar incidente es de 800 Kcal/m²·h. 
                Calcular la energía generada por esta placa en kWh.
            </p>
        </div>
       
        <div class="box image">
            <h2>Imagen</h2>
            <img src="images/placa.png" width="300" height="200" alt="Imagen del problema">
        </div>
       
        <div class="box data">
            <h2>Datos</h2>
            <ul>
                <li>Dimensiones de la placa: \(60 \, \text{cm} \times 80 \, \text{cm}\)</li>
                <li>Rendimiento (\(R\)): \(0.2\) o \(20\%\)</li>
                <li>Energía solar incidente (\(Q\)): \(800 \, \frac{\text{Kcal}}{\text{m}^2 \cdot \text{h}}\)</li>
                <li>Conversión a kWh: \(1 \, \text{Kcal} = 0.00116 \, \text{kWh}\)</li>
            </ul>
        </div>
   
        <div class="box formula">
            <h2>Fórmulas</h2>
            <p>
                \( \text{Energía generada (kWh)} = Q \cdot \text{Superficie} \cdot R \cdot 0.00116 \), donde:
            </p>
            <ul>
                <li>\(Q\): Energía solar incidente.</li>
                <li>\(\text{Superficie}\): Área de la placa en m².</li>
                <li>\(R\): Rendimiento de la placa.</li>
            </ul>
        </div>
     
        <div class="box substitution">
            <h2>Sustitución de Datos</h2>
            <p>
                \( \text{Energía generada} = 800 \cdot (0.6 \cdot 0.8) \cdot 0.2 \cdot 0.00116 \)
            </p>
        </div>
 
        <div class="box solution">
            <h2>Solución</h2>
            <p id="resultado">
                <?php
                function calcularEnergia() {
                    $largo_cm = 60; 
                    $ancho_cm = 80; 
                    $rendimiento = 0.2; 
                    $energia_solar = 800; 
                    $conversion_kWh = 0.00116; 
                    
                    $largo_m = $largo_cm / 100;
                    $ancho_m = $ancho_cm / 100;
                    $superficie = $largo_m * $ancho_m;

                    $energia_generada = $energia_solar * $superficie * $rendimiento * $conversion_kWh;

                    return $energia_generada;
                }

                $energia = calcularEnergia();
                echo "La energía generada por la placa es: " . number_format($energia, 5) . " kWh.";
                ?>
            </p>
        </div>
    </div>
</body>
</html>
