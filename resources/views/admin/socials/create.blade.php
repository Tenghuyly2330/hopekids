<x-app-layout>
    <div class="max-w-7xl mx-auto shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold text-[#401457]">Create Social</h2>
        <form action="{{ route('social.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent

            <div>
                <label for="name" class="block text-sm font-medium text-[#000]">Name</label>
                <input type="text" name="name" id="name"
                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            <div>
                <label for="url" class="block text-sm font-medium text-[#000]">Social Link</label>
                <textarea name="url" id="url" rows="4"
                    class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]"></textarea>
                <x-input-error class="mt-2" :messages="$errors->get('url')" />
            </div>

            <div class="flex justify-between">
                <a href="{{ route('social.index') }}"
                    class="border border-[#4FC9EE] hover:!bg-[#4FC9EE] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#4FC9EE]">
                    Back
                </a>

                <button type="submit" class="bg-[#4FC9EE] text-white px-4 py-1 md:px-6 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>

</x-app-layout>
