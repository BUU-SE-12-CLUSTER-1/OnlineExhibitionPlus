<div>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    <form wire:submit.prevent="insertComment" action="">
        @csrf
        <div>
            <h1>Comment</h1>
            <div class="comment_container">
                <input class="comment_project" wire:model="text" type="text" name="comment"
                    placeholder="Comment project here">
                <br>
                <button type="submit" class="comment_button" name="btn_comment_project">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
                @error('text')
                    <span class="oe-error" style="color: red">{{ $message }}</span>
                @enderror
                </br>
            </div>
        </div>
    </form>
    @livewireScripts
</div>
