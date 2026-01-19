@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Student List</h2>
            <a href="{{ url('/students/create') }}" class="btn btn-success">Add New Student</a>
        </div>

        <div class="mb-3">
            <input id="studentSearch" type="search" class="form-control" placeholder="Search students by name, course, or year...">
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- 10 Manual Students --}}
                <tr><td>Vergara, Christian Paul</td><td>Bachelor of Science in Information Technology</td><td>2</td><td><x-actions :student="(object)['id' => 1]" /></td></tr>
                <tr><td>Dela Cruz, Juan</td><td>Bachelor of Science in Computer Science</td><td>1</td><td><x-actions :student="(object)['id' => 2]" /></td></tr>
                <tr><td>Santos, Maria Clara</td><td>Bachelor of Science in Information Systems</td><td>3</td><td><x-actions :student="(object)['id' => 3]" /></td></tr>
                <tr><td>Reyes, Ricardo</td><td>Bachelor of Science in Information Technology</td><td>4</td><td><x-actions :student="(object)['id' => 4]" /></td></tr>
                <tr><td>Luna, Antonio</td><td>Bachelor of Science in Computer Science</td><td>2</td><td><x-actions :student="(object)['id' => 5]" /></td></tr>
                <tr><td>Silang, Gabriela</td><td>Bachelor of Science in Information Technology</td><td>1</td><td><x-actions :student="(object)['id' => 6]" /></td></tr>
                <tr><td>Aquino, Melchora</td><td>Bachelor of Science in Information Systems</td><td>4</td><td><x-actions :student="(object)['id' => 7]" /></td></tr>
                <tr><td>Mabini, Apolinario</td><td>Bachelor of Science in Computer Science</td><td>3</td><td><x-actions :student="(object)['id' => 8]" /></td></tr>
                <tr><td>Rizal, Jose</td><td>Bachelor of Science in Information Technology</td><td>2</td><td><x-actions :student="(object)['id' => 9]" /></td></tr>
                <tr><td>Bonifacio, Andres</td><td>Bachelor of Science in Computer Science</td><td>1</td><td><x-actions :student="(object)['id' => 10]" /></td></tr>
            </tbody>
        </table>

        <div id="noResults" class="alert alert-warning" style="display:none">No matching students found.</div>

        <script>
            (function() {
                const input = document.getElementById('studentSearch');
                const table = document.querySelector('table.table tbody');
                const noResults = document.getElementById('noResults');

                function normalize(s){ return (s||'').toString().toLowerCase().trim(); }

                function filter() {
                    const q = normalize(input.value);
                    const rows = Array.from(table.querySelectorAll('tr'));
                    let visible = 0;

                    rows.forEach(r => {
                        const text = normalize(r.innerText);
                        if (!q || text.indexOf(q) !== -1) {
                            r.style.display = '';
                            visible++;
                        } else {
                            r.style.display = 'none';
                        }
                    });
                    noResults.style.display = (visible === 0 && q !== '') ? '' : 'none';
                }

                input.addEventListener('input', filter);
                input.addEventListener('keydown', function(e){ if(e.key === 'Escape'){ input.value=''; filter(); }});
            })();
        </script>

        <a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection