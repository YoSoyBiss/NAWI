<h2>Crear Nueva Actividad</h2>
<form action="{{ route('exercises.store') }}" method="POST">
    @csrf
    <input type="hidden" name="narrative_id" value="{{ $narrative->id }}">
    <input type="text" name="title" placeholder="Título de la actividad" required>
    <textarea name="description" placeholder="Descripción"></textarea>
    
    <div id="questions-container">
        <h3>Preguntas</h3>
        <div class="question">
            <input type="text" name="questions[0][question]" placeholder="Escribe la pregunta" required>
            <input type="text" name="questions[0][choices][0]" placeholder="Opción 1" required>
            <input type="text" name="questions[0][choices][1]" placeholder="Opción 2" required>
            <input type="text" name="questions[0][choices][2]" placeholder="Opción 3" required>
            <input type="text" name="questions[0][choices][3]" placeholder="Opción 4" required>
            <select name="questions[0][answer]" required>
                <option value="0">Opción 1</option>
                <option value="1">Opción 2</option>
                <option value="2">Opción 3</option>
                <option value="3">Opción 4</option>
            </select>
        </div>
    </div>
    <button type="button" onclick="addQuestion()">Añadir Pregunta</button>
    <button type="submit">Guardar Actividad</button>
</form>

<script>
    let questionIndex = 1;

    function addQuestion() {
        const container = document.getElementById('questions-container');
        const newQuestion = `
            <div class="question">
                <input type="text" name="questions[${questionIndex}][question]" placeholder="Escribe la pregunta" required>
                <input type="text" name="questions[${questionIndex}][choices][0]" placeholder="Opción 1" required>
                <input type="text" name="questions[${questionIndex}][choices][1]" placeholder="Opción 2" required>
                <input type="text" name="questions[${questionIndex}][choices][2]" placeholder="Opción 3" required>
                <input type="text" name="questions[${questionIndex}][choices][3]" placeholder="Opción 4" required>
                <select name="questions[${questionIndex}][answer]" required>
                    <option value="0">Opción 1</option>
                    <option value="1">Opción 2</option>
                    <option value="2">Opción 3</option>
                    <option value="3">Opción 4</option>
                </select>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', newQuestion);
        questionIndex++;
    }
</script>
