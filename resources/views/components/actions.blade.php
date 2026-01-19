@props(['student'])

<div class="d-inline-flex gap-1">
    {{-- Use $student->id to get the number from the object --}}
    <a href="{{ url('/students/' . $student->id) }}" class="btn btn-info btn-sm text-white">View</a>
    <a href="{{ url('/students/' . $student->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
</div>