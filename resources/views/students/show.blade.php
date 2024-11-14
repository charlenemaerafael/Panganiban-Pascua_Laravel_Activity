<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800">

    <div class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-md max-w-lg">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">{{ $student->name }}</h1>

        <p class="mb-4"><strong class="text-blue-600">Email:</strong> {{ $student->email }}</p>
        <p class="mb-4"><strong class="text-blue-600">Age:</strong> {{ $student->age }}</p>

        <div class="flex gap-4">
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700">Delete</button>
            </form>
            <a href="{{ route('students.index') }}" class="btn btn-secondary bg-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-400">Back to List</a>
        </div>
    </div>

</body>
</html>
