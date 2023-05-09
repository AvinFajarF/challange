@extends('dashboard.index')
@section("content")




<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mx-auto mt-28">
    <form class="space-y-6" action="{{ route("cars.edit",$findMobil->id) }}" method="POST">
        @method("PUT")
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Edit Mobil</h5>
        <div>
            <label for="tipe_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Mobil</label>
            <input type="tipe_mobil" name="tipe_mobil" id="tipe_mobil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ $findMobil->tipe_mobil }}">
        </div>
        <div>
            <label for="bensin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bensin</label>
            <input type="bensin" name="bensin" id="bensin" value="{{ $findMobil->bensin }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
        </div>
        <div>
            <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
            <input type="jumlah" name="jumlah" id="jumlah" value="{{ $findMobil->jumlah }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>

    </form>
</div>


@endsection
