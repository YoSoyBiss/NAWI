<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawi - Edit Narrative</title>
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
            <h1>Edit Narrative</h1>

            <form action="{{ route('narratives.update', $narrative->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Lista desplegable para categorías -->
                <div>
                    <label for="category_id">Category:</label>
                    <select name="category_id" id="category_id" required>
                        <option value="">-- Select a Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $narrative->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Otros campos del formulario -->
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $narrative->name }}" required>
                </div>

                <div>
                    <label for="description">Description:</label>
                    <textarea name="description">{{ $narrative->description }}</textarea>
                </div>

                <div>
                    <label for="image">Image URL:</label>
                    <input type="text" name="image" value="{{ $narrative->image }}" required>
                </div>

                <div>
                    <label for="text">Content Text:</label>
                    <textarea name="text" required>{{ $narrative->content->text }}</textarea>
                </div>

                <div>
                    <label for="video_url">Video URL:</label>
                    <input type="text" name="video_url" value="{{ $narrative->content->video_url }}">
                </div>

                <!-- Ejercicios y sus preguntas -->
                <div id="exercises-container">
                    @foreach($narrative->exercises as $exercise)
                        <div class="exercise">
                            <h3>Exercise {{ $loop->index + 1 }}</h3>

                            <!-- Preguntas del ejercicio -->
                            <div class="questions-container">
                                @foreach(json_decode($exercise->questions) as $index => $question)
                                    <div class="question">
                                        <label for="questions[{{ $loop->parent->index }}][{{ $index }}][question]">Question {{ $index + 1 }}:</label>
                                        <input type="text" name="questions[{{ $loop->parent->index }}][{{ $index }}][question]" value="{{ $question->question }}" required>

                                        <label for="questions[{{ $loop->parent->index }}][{{ $index }}][options]">Options (comma-separated):</label>
                                        <input type="text" name="questions[{{ $loop->parent->index }}][{{ $index }}][options]" value="{{ implode(',', $question->options) }}" required>

                                        <label for="questions[{{ $loop->parent->index }}][{{ $index }}][correct_option]">Correct Option:</label>
                                        <input type="number" name="questions[{{ $loop->parent->index }}][{{ $index }}][correct_option]" value="{{ $question->correct_option }}" min="0" required>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <button type="button" id="add-question-btn">Add Another Question</button>
                <button type="submit">Update Narrative, Content, and Exercise</button>

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
        </div>
    </main>

    <script>
        let questionCount = {{ count(json_decode($narrative->exercises->first()->questions)) }};
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
            questionCount++;
        });
    </script>
</body>
</html>
