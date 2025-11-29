<x-app-layout>
    <div class="max-w-7xl mx-auto shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold text-[#401457]">Edit Testimonials</h2>
        <form action="{{ route('parent.update', $parent->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent

            <div>
                <label for="url" class="block text-sm font-medium text-[#000]">Link Youtube</label>
                <input value="{{ old('url', $parent->url) }}" name="url" id="url"
                    class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]"></input>
                <x-input-error class="mt-2" :messages="$errors->get('url')" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#4FC9EE] uppercase">English</h1>
                    <div>
                        <label for="content_en" class="block text-sm font-medium text-[#000]">Content (English)</label>
                        <textarea name="content_en" id="content_en" rows="6"
                            class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]">{{ old('content_en', $parent->content_en) }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('content_en')" />
                    </div>
                </div>

                <div class="space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#4FC9EE] uppercase">Khmer</h1>
                    <div>
                        <label for="content_km" class="block text-sm font-medium text-[#000]">Content (Khmer)</label>
                        <textarea name="content_km" id="content_km" rows="6"
                            class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]">{{ old('content_km', $parent->content_km) }}</textarea>
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
            .create(document.querySelector('#content_en')).catch(console.error);
        ClassicEditor
            .create(document.querySelector('#content_km')).catch(console.error);

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
