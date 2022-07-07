<!doctype html>
<html lang=>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>Users List</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dcfce7;
            }
        </style>
    </head>
    <body>



        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="">
                <h1 class="text-3xl text-orange-400 text-center font-sans font-bold">All Users</h1>
                <a href="{{route('users.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                    <i class="text-red"></i> Add New
                </a>
            </div>



        <!-- DataTales Example -->
            <div class="container mx-auto text-red">
                <div class="card-header py-3">


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" >

                            <tr>
                                <th >Name</th>
                                <th >Email</th>
                                <th >Action</th>
                            </tr>


                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td style="display: flex">
                                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-4">
                                            update
                                        </a>
                                        <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
