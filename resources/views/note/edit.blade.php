<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edite sua nota</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancelar</a>
                <button class="note-submit-button">Salvar</button>
            </div>
        </form>
    </div>
</x-app-layout>
