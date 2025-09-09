<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Ashaari & Miriam</title>
    <link rel="icon" type="image/x-icon" href={{ Storage::disk('s3')->url("assets/logo.svg") }}>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <style>
        .title{
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 0.95rem;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #0051FF;
            color: #fff;
            text-align: left;
        }

        thead th {
            padding: 12px 16px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        tbody tr {
            border-bottom: 1px solid #f0f0f0;
            transition: background 0.2s ease;
        }

        tbody tr:hover {
            background-color: #f9f9f9;
        }

        td {
            padding: 12px 16px;
            color: #333;
            vertical-align: top;
            word-break: break-word;
        }

        tbody tr:last-child {
            border-bottom: none;
        }
        .actions {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .btn-approve, .btn-reject {
            border: none;
            padding: 6px 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        .btn-approve {
            background-color: #28a745;
            color: white;
        }

        .btn-approve:hover {
            background-color: #218838;
        }

        .btn-reject {
            background-color: #dc3545;
            color: white;
        }

        .btn-reject:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <!-- add password entry -->
    
    <div class="container-fluid">
        <div class="row">

            <div class="col-6">
                <div class="content">
                    <div class="title">
                        Messages
                    </div>
                    <div class="sub-content">
                        @if($pendingMessages->isEmpty())
                            <p>No pending messages 🎉</p>
                        @else
                            <table>
                                <thead>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pendingMessages as $message)
                                    <tr>
                                        <td>{{ $message->from }}</td>
                                        <td>{{ $message->to }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td class="actions">
                                            <!-- Approve button -->
                                            <form action="{{ route('messages.approve', $message->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn-approve">✔</button>
                                            </form>

                                            <!-- Reject button -->
                                            <form action="{{ route('messages.reject', $message->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn-reject">✘</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="content">
                    <div class="title">
                        Memories
                    </div>
                    <div class="sub-content">
                        @if($pendingMemories->isEmpty())
                            <p>No pending memories 🎉</p>
                        @else
                            <ul>
                                @foreach($pendingMemories as $memory)
                                    <li>{{ $memory->from }}</li>
                                    <li>{{ $memory->from }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>