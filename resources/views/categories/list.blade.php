<div class="container">
    

    <h1>Categories</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Category</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($items as $category)
        <tr>
            <td>
                <a href="{{ route('categories.show', $category->id) }}">
                    {{ $category->name }}
                </a>
            </td>
            <td>{{ $category->description }}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}" class="action-link">
                    Edit
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<style>
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-weight: 600;
            font-size: 32px;
        }

        .alert {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            animation: fadeIn 0.5s ease-in;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .btn-primary {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f8f9fa;
            color: #2c3e50;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        td a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        td a:hover {
            color: #2980b9;
        }

        .action-link {
            display: inline-block;
            padding: 6px 12px;
            background-color: #e9ecef;
            color: #495057;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .action-link:hover {
            background-color: #dee2e6;
            color: #212529;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 10px;
            }
            
            th, td {
                padding: 10px;
            }
        }
    </style>