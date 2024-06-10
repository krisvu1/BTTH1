<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoreUI</title>
   <link rel="stylesheet" href="resources/css/app.css">
    @stack('before-styles')
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
    @stack('after-styles')
</head>

<body class="c-app"  >
    @include('layouts.sidebar')
    <div class="c-wrapper c-fixed-components">
        @include('layouts.header')

        @yield('content')
        
        @include('layouts.footer')
    </div><!--c-wrapper-->
    @stack('before-scripts')
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    @stack('after-scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function performSearch(event) {
            event.preventDefault(); // Ngăn chặn form submit mặc định
            const email_name = $('input[name="name_email"]').val();
            const category = $('select[name="category"]').val();
    
            $.ajax({
                url: '{{ route('user.index') }}',  // Sử dụng Blade để nhúng URL
                type: 'GET',
                data: {
                    email_name: email_name,
                    category: category
                },
                success: function(data) {
                    console.log(data);
                    $('#resultTable tbody').empty();
                    data.forEach(item => {
                        $('#resultTable tbody').append(`
                            <tr>
                                <th scope="row">${item.id}</th>
                                <td>${item.name}</td>
                                <td>${item.email}</td>
                                <td>${item.type}</td>
                                <td>${item.created_at}</td>
                                <td>${item.updated_at}</td>
                                <td>Action</td>
                            </tr>
                        `);
                    });
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>
    

</body>

</html>