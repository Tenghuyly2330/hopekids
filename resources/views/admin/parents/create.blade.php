<x-app-layout>
    <div class="max-w-7xl mx-auto shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold text-[#401457]">Create Testimonials</h2>
        <form action="{{ route('parent.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent

            <div>
                <label for="url" class="block text-sm font-medium text-[#000]">Link Youtube</label>
                <input type="text" name="url" id="url"
                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                <x-input-error class="mt-2" :messages="$errors->get('url')" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#4FC9EE] uppercase">English</h1>
                    <div>
                        <label for="content_en" class="block text-sm font-medium text-[#000]">Content (English)</label>
                        <textarea name="content_en" id="content_en" rows="6"
                            class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]"></textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('content_en')" />
                    </div>
                </div>

                <div class="space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#4FC9EE] uppercase">Khmer</h1>
                    <div>
                        <label for="content_km" class="block text-sm font-medium text-[#000]">Content (Khmer)</label>
                        <textarea name="content_km" id="content_km" rows="6"
                            class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]"></textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('content_km')" />
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('parent.index') }}"
                    class="border border-[#4FC9EE] hover:!bg-[#4FC9EE] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#4FC9EE]">
                    Back
                </a>

                <button type="submit" class="bg-[#4FC9EE] text-white px-4 py-1 md:px-6 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#content_en'), {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                    'undo', 'redo', 'code', 'codeBlock'
                ],
                removePlugins: ['Heading']
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#content_km'), {
                toolbar: [
                    'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                    'undo', 'redo', 'code', 'codeBlock'
                ],
                removePlugins: ['Heading']
            })
            .catch(error => {
                console.error(error);
            });

        const dropArea = document.getElementById('drop-area');
        const imageFile = document.getElementById('dropzone-file');
        const imagePreview = document.getElementById('img-preview');

        function uploadImage(event) {
            const file = event.target.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "contain";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = "";
            }
        }

        // Drag-and-drop functionality
        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropArea.classList.add('border-blue-500');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('border-blue-500');
        });

        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            dropArea.classList.remove('border-blue-500');
            const file = event.dataTransfer.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "contain";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = ""; // Clear the default content inside preview
                imageFile.files = event.dataTransfer.files; // Attach the dropped file to input
            }
        });
    </script>
</x-app-layout>
