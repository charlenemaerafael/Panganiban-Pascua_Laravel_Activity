<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50">

    <div class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-md max-w-lg">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium text-blue-600">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ $student->name }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-blue-600">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ $student->email }}" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-lg font-medium text-blue-600">Age</label>
                <input type="number" name="age" id="age" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ $student->age }}" required min="1">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Update Student</button>
            <a href="{{ route('students.index') }}" class="block mt-4 text-center py-2 px-4 bg-gray-300 text-gray-700 font-semibold rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">Cancel</a>
        </form>
    </div>

</body>
</html>
