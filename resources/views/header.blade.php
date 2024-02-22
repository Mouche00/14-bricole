<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bricole</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 100%;
            min-width: 160px;
            max-height: 100px; /* Add this line to set the maximum height */
            overflow-y: auto; /* Add this line to enable scrolling if the content exceeds the maximum height */
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content label {
            display: block;
            padding: 12px 16px;
            cursor: pointer;
            
        }

        .dropdown-content label:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body class="bg-gray-100">
    
</body>
</html>