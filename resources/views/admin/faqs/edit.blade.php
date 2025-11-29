<x-app-layout>
    <div class="max-w-7xl mx-auto shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold text-[#401457]">Edit Faq</h2>
        <form action="{{ route('faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#4FC9EE] uppercase">English</h1>
                    <div>
                        <label for="question_en" class="block text-sm font-medium text-[#000]">Question (English)</label>
                        <input value="{{ old('question_en', $faq->question_en) }}" type="text" name="question_en" id="question_en"
                            class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('question_en')" />
                    </div>
                    <div>
                        <label for="answer_en" class="block text-sm font-medium text-[#000]">Title (English)</label>
                        <input value="{{ old('answer_en', $faq->answer_en) }}" name="answer_en" id="answer_en"
                            class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]"></input>
                        <x-input-error class="mt-2" :messages="$errors->get('answer_en')" />
                    </div>
                </div>

                <div class="space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#4FC9EE] uppercase">Khmer</h1>
                    <div>
                        <label for="question_km" class="block text-sm font-medium text-[#000]">Question (Khmer)</label>
                        <input value="{{ old('question_km', $faq->question_km) }}" type="text" name="question_km" id="question_km"
                            class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('question_km')" />
                    </div>
                    <div>
                        <label for="answer_km" class="block text-sm font-medium text-[#000]">Answer (Khmer)</label>
                        <input value="{{ old('answer_km', $faq->answer_km) }}" name="answer_km" id="answer_km"
                            class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]"></input>
                        <x-input-error class="mt-2" :messages="$errors->get('answer_km')" />
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('faq.index') }}"
                    class="border border-[#4FC9EE] hover:!bg-[#4FC9EE] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#4FC9EE]">
                    Back
                </a>

                <button type="submit" class="bg-[#4FC9EE] text-white px-4 py-1 md:px-6 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function uploadImage(event) {
            const file = event.target.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                const preview = document.getElementById('img-preview');
                preview.style.backgroundImage = `url(${imgLink})`;
                preview.style.backgroundSize = "contain";
                preview.style.backgroundPosition = "center";
                preview.innerHTML = "";
            }
        }

        // Drag and drop for image
        const imageDropArea = document.getElementById('drop-area-image');
        const imageInput = document.getElementById('dropzone-image');
        const imagePreview = document.getElementById('image-preview');

        imageDropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            imageDropArea.classList.add('border-blue-500');
        });
        imageDropArea.addEventListener('dragleave', () => {
            imageDropArea.classList.remove('border-blue-500');
        });
        imageDropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            imageDropArea.classList.remove('border-blue-500');
            const file = e.dataTransfer.files[0];
            if (file) {
                imageInput.files = e.dataTransfer.files;
                uploadImage({
                    target: {
                        files: [file]
                    }
                });
            }
        });
    </script>
</x-app-layout>
