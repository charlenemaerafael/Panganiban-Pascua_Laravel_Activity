<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800">

    <div class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-md max-w-4xl">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-4 bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Add New Student</a>

        @if(session('success'))
            <div class="alert alert-success mb-4 p-4 bg-green-200 text-green-800 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        <table class="table-auto w-full border-collapse">
            <thead>
                <tr class="bg-blue-100 text-left">
                    <th class="px-4 py-2 text-blue-600">Name</th>
                    <th class="px-4 py-2 text-blue-600">Email</th>
                    <th class="px-4 py-2 text-blue-600">Age</th>
                    <th class="px-4 py-2 text-blue-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $student->name }}</td>
                        <td class="px-4 py-2">{{ $student->email }}</td>
                        <td class="px-4 py-2">{{ $student->age }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning bg-yellow-500 text-white py-1 px-3 rounded-md hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-2 text-center text-gray-500">No students found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
