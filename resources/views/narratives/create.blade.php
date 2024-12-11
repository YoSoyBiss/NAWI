<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - Create Narrative</title>
    <link rel="stylesheet" href="{{ asset('css styles/CRUD.css') }}">
</head>
<body>
    <header>
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"></a>
        <nav>
            <a href="/cuentos">Cuentos</a>
            <a href="/Actividades">Actividades</a>
            <a href="#">Progreso</a>
        </nav>
        <a href="/login" class="logout">Cerrar Sesión</a>
    </header>

    <main>
        <div class="container">
            <h1>Create Narrative</h1>

            <form action="{{ route('narratives.store') }}" method="POST">
    @csrf

    <!-- Lista desplegable para categorías -->
    <div>
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" required>
            <option value="">-- Select a Category --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Otros campos del formulario -->
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <div>
        <label for="image">Image URL:</label>
        <input type="text" name="image" id="image" required>
    </div>

    <div>
        <label for="text">Content Text:</label>
        <textarea name="text" id="text" required></textarea>
    </div>

    <div>
        <label for="video_url">Video URL:</label>
        <input type="text" name="video_url" id="video_url" required>
    </div>

    <!-- Preguntas del ejercicio -->
    <div id="questions-container">
        <div class="question">
            <label for="questions[0][question]">Question 1:</label>
            <input type="text" name="questions[0][question]" required>
            <label for="questions[0][options]">Options (comma-separated):</label>
            <input type="text" name="questions[0][options]" required>
            <label for="questions[0][correct_option]">Correct Option:</label>
            <input type="number" name="questions[0][correct_option]" min="0" required>
        </div>
    </div>

    <button type="button" id="add-question-btn">Add Another Question</button>

    <button type="submit">Create Narrative, Content, and Exercise</button>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>

<script>
    // JavaScript para agregar más preguntas dinámicamente
    let questionCount = 1; // Inicia el contador en 1, ya que la primera pregunta tiene el índice 0
document.getElementById('add-question-btn').addEventListener('click', function() {
    let questionContainer = document.createElement('div');
    questionContainer.classList.add('question');
    questionContainer.innerHTML = `
        <label for="questions[${questionCount}][question]">Question ${questionCount + 1}:</label>
        <input type="text" name="questions[${questionCount}][question]" required>
        <label for="questions[${questionCount}][options]">Options (comma-separated):</label>
        <input type="text" name="questions[${questionCount}][options]" required>
        <label for="questions[${questionCount}][correct_option]">Correct Option:</label>
        <input type="number" name="questions[${questionCount}][correct_option]" min="0" required>
    `;
    document.getElementById('questions-container').appendChild(questionContainer);
    questionCount++; // Incrementa el contador después de agregar una nueva pregunta
});

</script>




        </div>
    </main>
</body>
</html>
