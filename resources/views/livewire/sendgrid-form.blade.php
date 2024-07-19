<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-900">Contact Form</h2>

        <form wire:submit.prevent="submit">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-medium mb-1">Name:</label>
                <input type="text" id="name" wire:model.defer="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your name">
                @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-1">Email:</label>
                <input type="email" id="email" wire:model.defer="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your email">
                @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-medium mb-1">Description:</label>
                <textarea id="description" wire:model.defer="description" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" rows="4" placeholder="Enter your description"></textarea>
                @error('description') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Submit</button>

            @if (session()->has('message'))
                <div class="mt-4 text-green-600 text-sm">{{ session('message') }}</div>
            @endif
        </form>
    </div>
</div>
