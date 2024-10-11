<style>
    /* Styling for the navigation bar */
.navbar {
    background-color: #343a40;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Styling for the unordered list inside the navbar */
.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
}

/* Styling for each navigation item */
.nav-item {
    margin-right: 20px;
}

/* Styling for navigation links */
.nav-link {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

/* Hover effect for navigation links */
.nav-link:hover {
    background-color: #495057;
    color: #ffffff;
}

/* Active link styling (optional, if needed) */
.nav-link.active {
    background-color: #007bff;
    color: white;
}

</style>
        <nav class="navbar">
            <ul>
                <li class="nav-item"><a class="nav-link" href="/">Task List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('create')}}">Add Task</a></li>
            </ul>
        </nav>
 