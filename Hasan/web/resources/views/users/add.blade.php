<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Add User</title>
</head>
    <body>

        <div class="">

            <div class="">
                <h1 class="ml-12 text-3xl text-orange-400 text-center font-sans font-bold">Add Users</h1>
                <a href="{{route('users.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i></i> Back</a>
            </div>

            <!-- DataTales Example -->
            <div class="flex ">

                <div class="bg-white shadow-md rounded m-auto px-8 pt-6 pb-8 mb-4 mt-16">
                    <form method="POST" action="{{route('users.store')}}">
                        @csrf
                        <div class="form-group row">

                            {{-- Name --}}
                            <div class="mb-4">
                                <span style="color:red;">*</span>Name</label>
                                <input
                                    type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"
                                    id="exampleName"
                                    placeholder="Name"
                                    name="name"
                                    value="{{ old('name') }}">

                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>


                            {{-- Email --}}
                            <div class="mb-6">
                                <span style="color:red;">*</span>Email</label>
                                <input type="text"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"
                                       id="exampleEmail"
                                       placeholder="Email"
                                       name="email"
                                       value="{{ old('email') }}">

                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            {{-- password --}}
                            <div class="mb-6">
                                <span style="color:red;">*</span>Password</label>
                                <input type="password"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"
                                       id="examplePassword"
                                       placeholder="Password"
                                       name="password"
                                       value="{{ old('email') }}">

                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        {{-- Save Button --}}
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                            Save
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </body>
</html>
