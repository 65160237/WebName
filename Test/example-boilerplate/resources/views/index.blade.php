<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Table</title>
    <!-- เพิ่มลิงก์ไปยัง Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Student Table</h1>
        <a href="{{ url('add-student') }}" class="add-link">Add Student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th scope="col">
                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle" type="button" id="statusDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Name
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                <li><a class="dropdown-item" href="#">ทำไรกิน</a></li>
                                <li><a class="dropdown-item" href="#">Vikrom Sawasdee</a></li>
                                <li><a class="dropdown-item" href="#">All</a></li>
                            </ul>
                        </div>
                    </th>
                    <th>Email</th>
                    <th scope="col">
                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle" type="button" id="statusDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Major
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                <li><a class="dropdown-item" href="#">SE</a></li>
                                <li><a class="dropdown-item" href="#">AE</a></li>
                                <li><a class="dropdown-item" href="#">All</a></li>
                            </ul>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- วน loop ผ่านข้อมูลของนักเรียน -->
                @foreach ($student as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->major }}</td>
                        <td>
                            <a href="{{ url('edit-student/' . $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form method="POST" action="{{ url('delete-student/' . $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            dropdownItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    const selectedMajor = item.textContent; // Get the selected major
                    const tableRows = document.querySelectorAll(
                        'tbody tr'); // Get all rows in the table

                    tableRows.forEach(function(row) {
                        const majorCell = row.querySelector(
                            'td:nth-child(4)'); // Find the cell storing major
                        const major = majorCell.textContent
                            .trim(); // Get the major in that row

                        if (selectedMajor === 'All' || major === selectedMajor) {
                            row.style.display =
                                ''; // Show the row if it matches the selected major or 'All' is selected
                        } else {
                            row.style.display = 'none'; // Otherwise, hide the row
                        }
                    });
                    tableRows.forEach(function(row) {
                        const nameCell = row.querySelector(
                            'td:nth-child(4)'); // Find the cell storing major
                        const name = nameCell.textContent
                            .trim(); // Get the major in that row

                        if (selectedname === 'All' || name === selectedMajor) {
                            row.style.display =
                                ''; // Show the row if it matches the selected major or 'All' is selected
                        } else {
                            row.style.display = 'none'; // Otherwise, hide the row
                        }
                    });
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            dropdownItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    const selectedMajor = item.textContent.trim(); // Get the selected major
                    const tableRows = document.querySelectorAll(
                        'tbody tr'); // Get all rows in the table

                    tableRows.forEach(function(row) {
                        const nameCell = row.querySelector(
                            'td:nth-child(2)'); // Find the cell storing name
                        const name = nameCell.textContent
                            .trim(); // Get the name in that row

                        if (selectedMajor === 'All' || name === selectedMajor) {
                            row.style.display =
                                ''; // Show the row if it matches the selected name or 'ทำไรกิน' is selected
                        } else {
                            row.style.display = 'none'; // Otherwise, hide the row
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>
