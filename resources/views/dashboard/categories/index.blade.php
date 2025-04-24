<x-layouts.app :title="('Dashboard')">
    <flux:heading>User profile</flux:heading>
    <flux:text class="mt-2">informasi tentag data product categories.</flux:text>

    <table class="min-w-full border-collapse border border-gray-200 mt-5">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-left text-gray-700 font-semibold">No.</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-gray-700 font-semibold">Image</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-gray-700 font-semibold">Name</th>
                <th class="border  border-gray-300 px-4 py-2 text-left text-gray-700 font-semibold">Slug</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-gray-700 font-semibold">Description</th>
                <th class="border border-gray-300 px-4 py-2 text-left text-gray-700 font-semibold">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $key => $category)
            <tr class="{{ $key % 2 === 0 ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100">
                <td class="border border-gray-300 px-4 py-2 text-gray-600">{{ $key + 1 }}</td>
                <td class="border border-gray-300 px-4 py-2 text-gray-600"></td>
                <td class="border border-gray-300 px-4 py-2 text-gray-600">{{ $category->name }}</td>
                <td class="border border-gray-300 px-4 py-2 text-gray-600">{{ $category->slug }}</td>
                <td class="border border-gray-300 px-4 py-2 text-gray-600">{{ $category->description }}</td>
                <td class="border border-gray-300 px-4 py-2 text-gray-600"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.app>