@extends('layout.main')
@section('container')


<div class="flex justify-center items-center" style="margin-top: 50px">
    <div class="bg-white w-[90%] h-[80%] border border-gray-80 rounded-lg shadow-2xl dark:bg-gray-200 dark:border-gray-200">

        <div class="container px-2">
            <h2 class="mt-4 mb-4 text-xl font-bold text-gray-900 light:text-black">Data Tamu</h2>
            <!-- Button trigger modal -->

            <!-- Modal -->


            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif --}}
        <!-- Modal Edit-->



        <div class="relative overflow-x-auto  hidden lg:block">
            <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400 stripe py-4" id="dataTable">
                <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Instansi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap ">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->nama }}
                        </td>
                        <td scope="row" class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->institution }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->status }}
                        </td>
                        <td class="px-6 py-6 font-medium text-gray-900 whitespace-nowrap">
                            <div class="w-20 h-10 mb-5">
                                <img src="{{ asset('storage/'.$item->image) }}" alt="image">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class=" mt-2 lg:hidden overflow-x-scroll">
            <table class="w-full text-xs text-left  rtl:text-right text-gray-500 dark:text-gray-400 stripe py-4" id="dataTable2">
                <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Instansi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)

                    <tr class="bg-white border-b ">
                        <td scope="row" class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap ">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap">
                            {{ $item->nama }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                            {{ $item->institution }}
                        </td>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                            {{ $item->status }}
                        </td>
                        <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                            <div class="w-20 h-10 mb-5">
                                <img src="{{ asset('storage/'.$item->image) }}" alt="image">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>

@endsection
