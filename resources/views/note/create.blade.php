<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl my-4">Crie uma nova nota</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Crie uma nova nota"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancelar</a>
                <button class="note-submit-button">Salvar</button>
            </div>
        </form>
    </div>
</x-app-layout>
