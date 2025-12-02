<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QUIZZPRINT | Quizz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #container {
            background: #fff;
            padding: 20px;
            width: 90%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        #start-count, #quiz-box {
            display: none;
        }
        .btn {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn:hover {
            background: #0056b3;
        }
        .option {
            background: #eaeaea;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            cursor: pointer;
        }
        .timer {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="container">

        <!-- Contador antes de iniciar -->
        <div id="start-box">
            <h2>El quizz está por comenzar...</h2>
            <p>Prepárate, inicia en:</p>
            <h1 id="prep-timer">15</h1>
        </div>

        <!-- Preguntas -->
        <div id="quiz-box">
            <div class="timer">Tiempo restante: <span id="question-timer">25</span>s</div>
            <h3 id="question-text"></h3>
            <div id="options"></div>
        </div>

        <!-- Final -->
        <div id="end-box" style="display:none;">
            <h2>¡Has terminado el quizz!</h2>
            <p>Gracias por participar.</p>
        </div>

    </div>

    <script>
        // ==========================
        // Simulación de preguntas
        // ==========================
        const preguntas = [
            {
                pregunta: "¿Cuál es la capital de Francia?",
                opciones: ["Madrid", "París", "Roma", "Lisboa"],
                correcta: 1
            },
            {
                pregunta: "¿Cuánto es 5 × 5?",
                opciones: ["15", "10", "25", "20"],
                correcta: 2
            },
            {
                pregunta: "El color del cielo es...",
                opciones: ["Verde", "Rojo", "Azul", "Negro"],
                correcta: 2
            }
        ];

        let index = 0;
        let tiempoPregunta = 25;
        let intervaloPregunta;

        const prepTimer = document.getElementById("prep-timer");
        const startBox = document.getElementById("start-box");
        const quizBox = document.getElementById("quiz-box");
        const endBox = document.getElementById("end-box");
        const questionText = document.getElementById("question-text");
        const optionsBox = document.getElementById("options");
        const questionTimer = document.getElementById("question-timer");

        // ==========================
        // Contador previo
        // ==========================
        let prepCount = 15;
        const prepInterval = setInterval(() => {
            prepCount--;
            prepTimer.textContent = prepCount;

            if (prepCount <= 0) {
                clearInterval(prepInterval);
                startBox.style.display = "none";
                quizBox.style.display = "block";
                cargarPregunta();
            }
        }, 1000);

        // ==========================
        // Cargar pregunta
        // ==========================
        function cargarPregunta() {
            if (index >= preguntas.length) {
                quizBox.style.display = "none";
                endBox.style.display = "block";
                return;
            }

            const p = preguntas[index];
            questionText.textContent = p.pregunta;
            optionsBox.innerHTML = "";
            tiempoPregunta = 25;
            questionTimer.textContent = tiempoPregunta;

            p.opciones.forEach((op, i) => {
                const div = document.createElement("div");
                div.className = "option";
                div.textContent = op;
                div.onclick = () => {
                    clearInterval(intervaloPregunta);
                    index++;
                    cargarPregunta();
                };
                optionsBox.appendChild(div);
            });

            intervaloPregunta = setInterval(() => {
                tiempoPregunta--;
                questionTimer.textContent = tiempoPregunta;

                if (tiempoPregunta <= 0) {
                    clearInterval(intervaloPregunta);
                    index++;
                    cargarPregunta();
                }
            }, 1000);
        }
    </script>
</body>
</html>
