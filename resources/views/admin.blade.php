<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Ashaari & Miriam</title>
    <link rel="icon" type="image/x-icon" href="assets/logo.svg">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <style>
        .title{
            text-align: center;
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
                        list of all the pending messages here
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="content">
                    <div class="title">
                        Memories
                    </div>
                    <div class="sub-content">
                        list of all the pending memories here
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>