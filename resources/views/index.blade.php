<style>
/* Styling for task list container */
.container {
    margin-top: 50px;
    max-width: 800px;
    padding: 20px;
    background-color: #f8f9fa;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Styling for the table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Styling for table headers */
table th {
    background-color: #343a40;
    color: white;
    padding: 10px;
    text-align: left;
    font-size: 16px;
}

/* Styling for table rows */
table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #dfe6e9;
}

/* Styling for table data cells */
table td {
    padding: 12px;
    border-bottom: 1px solid #dee2e6;
    font-size: 15px;
}

/* Styling for badge status */
.badge {
    padding: 5px 10px;
    font-size: 14px;
    border-radius: 5px;
}

.text-bg-success {
    background-color: #28a745;
    color: white;
}

.text-bg-warning {
    background-color: #ffc107;
    color: black;
}

/* Button styling */
.btn-success {
    background-color: #28a745;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    border: none;
    transition: background-color 0.3s ease;
    text-decoration: none;
    font-size: 14px;
}

.btn-success:hover {
    background-color: #218838;
    text-decoration: none;
    color: white;
}
</style>


@extends('layouts.app')

@section('title', 'Task List')
@section('content')
   <div class="container">
       @if(session('success'))
       <div class="alert alert-success">
           {{session('success')}}
       </div>
       @endif

       <table class="">
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Due Date</th>
        <th colspan="3">Action</th>
       @foreach($tasks as $task)
       <tr>
        <td>{{$task->title}}</td>
        <td>{{$task->description}}</td>
        <td>@if($task->isCompleted == 1)
            <span class="badge text-bg-success">Completed</span>
            @else
            <span class="badge text-bg-warning">Pending</span>
            @endif
        </td>
        <td>{{$task->due_date}}</td>
        <td>
            @if($task->isCompleted == 0)
            <a href="{{route('doneTask',$task->id)}}" class="btn btn-success">Mark as Completed</a>
            @endif
            <a href="{{route('edit',$task->id)}}" class="btn btn-primary">Edit</a>
</td>
<td>
            <form action="{{route('delete',$task->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this tasks?')" class="btn btn-danger">Delete</button>
            </form>
        </td>
       </tr>


       @endforeach
       </table>
   </div>

@endsection

