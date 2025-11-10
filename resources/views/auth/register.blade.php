@extends('layouts.app')
@section('content')
    <div class="flex flex-col gap-8 items-center justify-center min-h-screen bg-gray-100">
        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="block h-20 w-auto">
  <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"/>
  <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"/>
</svg>
    <form action="" class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm">
        <!-- Email -->
        <label class="block mb-2 text-gray-700 font-medium" for="email">
            Email :
        </label>
        <input 
            type="email" 
            name="email" 
            id="email"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none mb-4"
            placeholder="exemple@gmail.com"
        >

        <!-- Mot de passe -->
        <label class="block mb-2 text-gray-700 font-medium" for="password">
            Password :
        </label>
        <input 
            type="password" 
            name="password" 
            id="password"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none mb-6"
            placeholder="••••••••"
        >

        <label class="block mb-2 text-gray-700 font-medium" for="password">
            Confirm Password :
        </label>
        <input 
            type="password" 
            name="password" 
            id="password"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none mb-6"
            placeholder="••••••••"
        >

        <!-- Bouton -->
        <button 
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition font-medium"
        >
           Register
        </button>

    </form>
</div>

@endsection