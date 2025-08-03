@extends('backend.layouts.master')

@section('content')

    <div x-show="activeCrudSection === 'pets'" class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Manage Pets</h2>
                    <button @click="showAddPetModal = true" class="bg-petpurple hover:bg-purple-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-plus mr-2"></i> Add New Pet
                    </button>
        </div>
    </div>

@endsection