@extends('layout.main')
@section('container')
<link rel="stylesheet" href="{{ asset('/css/trix.css') }}">
<div id="page-container" class="mx-auto min-h-dvh w-full min-w-[320px] bg-gray-100 ">

  <main id="page-content" class="max-w-full">
    <div class="relative mx-auto flex min-h-dvh w-full max-w-10xl justify-center overflow-hidden p-4 lg:p-8">
      <section class="w-full lg:w-xl py-6">

        <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-sm ">
          <div class="grow p-5 md:px-16 md:py-12">
            <form method="post" action="{{ route('mail.send') }}" class="">
              @csrf
              <input type="hidden" name="email" value="{{ $email }}">
              <div class="mb-5">
                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
                <div class="flex">
                  <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <i class="mdi mdi-format-title"></i>
                  </span>
                  <input type="text" id="subject" name="subject" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="Tuliskan subject atau keterangan pesan" required>
                </div>
              </div>

              <div class="mb-5">
                <input id="x" type="hidden" name="pesan" value="" />
                <trix-editor input="x" class="trix-content"></trix-editor>
              </div>
              <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-7 py-1 text-center me-2 mb-2"><i class="mdi mdi-send text-sm lg:text-lg"></i></button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>
</div>
<script src="{{ asset('js/attachments.js') }}"></script>
@endsection