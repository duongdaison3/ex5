<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      *{
        box-sizing: border-box;
      }
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      header {
        background-color: #333;
        color: white;
      }
  
      /* form div {
        max-width: 400px;
        display: flex;
      }

      form div label {
        width: 150px;
        font-weight: bold;
      }

      button {
        margin-top: 10px;
      } */
      main {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .container {
        margin-top: 20px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f2f2f2;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      nav {
        background-color: #333;
        color: white;
        padding: 10px;
      }

      nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      nav ul li {
        display: inline;
        margin-right: 10px;
      }

      nav ul li a {
        color: white!important;
        text-decoration: none;
      }

      nav ul li a:hover {
        text-decoration: underline;
      }

      footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
      }

      footer p {
        margin: 0;
      }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('products') }}">Products List</a></li>
                <li><a href="{{ route('products.create') }}">Create Product</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>&copy; 2020 My Store</p>
    </footer>
</body>
</html>