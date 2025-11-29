<x-app-layout>
    <div class="max-w-7xl mx-auto shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold text-[#401457]">Create Experince</h2>
        <form action="{{ route('experince.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent


            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="year" class="block text-sm font-medium text-[#000]">Year</label>
                    <input type="text" name="year" id="year"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('year')" />
                </div>
                <div>
                    <label for="branch" class="block text-sm font-medium text-[#000]">Branch</label>
                    <input type="text" name="branch" id="branch"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('branch')" />
                </div>
                <div>
                    <label for="student" class="block text-sm font-medium text-[#000]">Student</label>
                    <input type="text" name="student" id="student"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('student')" />
                </div>
                <div>
                    <label for="staff" class="block text-sm font-medium text-[#000]">Teacher & Staff</label>
                    <input type="text" name="staff" id="staff"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('staff')" />
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('experince.index') }}"
                    class="border border-[#4FC9EE] hover:!bg-[#4FC9EE] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#4FC9EE]">
                    Back
                </a>

                <button type="submit" class="bg-[#4FC9EE] text-white px-4 py-1 md:px-6 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
