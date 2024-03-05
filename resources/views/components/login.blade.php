<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/app.css" rel="stylesheet">
  <link rel="shortcut icon" href="foto/smk.png">
    <title>Login Buku Tamu SMK Negeri 2 Magelang</title>
</head>

<body>
  <div id="page-container" class="mx-auto flex min-h-dvh w-full min-w-[320px] flex-col bg-gray-100 dark:bg-gray-900 dark:text-gray-100">
    <!-- Page Content -->
    <main id="page-content" class="flex max-w-full flex-auto flex-col">
      <div class="relative mx-auto flex min-h-dvh w-full max-w-10xl items-center justify-center overflow-hidden p-4 lg:p-8">
        <!-- Sign In Section -->
        <section class="w-full max-w-xl py-6">
          <!-- Header -->
          <header class="mb-10 text-center">
            <h1 class="mb-2 inline-flex items-center space-x-2 text-2xl font-bold">
		<img src="foto/logo.png" class="h-8" alt="Buku Tamu Logo" />
              <span>Verifikasi Tamu </span>
            </h1>
            <h2 class="text-sm font-medium text-gray-500 dark:text-gray-400">
              Login ke akun anda dengan memasukkan email dan token verifikasi anda jika sudah mendaftar sebelumnya
            </h2>
          </header>
          <!-- END Header -->

          <!-- Login In Form -->
          <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800 dark:text-gray-100">
            <div class="grow p-5 md:px-16 md:py-12">
              <form class="space-y-6" action="https://smkn2magelang.tech/auth" method="POST">
                @csrf
                <div class="space-y-1">
                  <label for="email" class="text-sm font-medium">Email</label>
                  <input type="email" id="email" name="email" placeholder="Enter your email" class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-blue-500" />
                </div>
                <div class="space-y-1">
                  <label for="token" class="text-sm font-medium">Token</label>
                  <input type="token" id="token" name="token" placeholder="Enter your token" class="block w-full rounded-lg border border-gray-200 px-5 py-3 leading-6 placeholder-gray-500 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:placeholder-gray-400 dark:focus:border-blue-500" />
                </div>
                <div>
                  <button type="submit" class="inline-flex w-full items-center justify-center space-x-2 rounded-lg border border-blue-700 bg-blue-700 px-6 py-3 font-semibold leading-6 text-white hover:border-blue-600 hover:bg-blue-600 hover:text-white focus:ring focus:ring-blue-400 focus:ring-opacity-50 active:border-blue-700 active:bg-blue-700 dark:focus:ring-blue-400 dark:focus:ring-opacity-90">
                    <svg class="hi-mini hi-arrow-uturn-right inline-block size-5 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12.207 2.232a.75.75 0 00.025 1.06l4.146 3.958H6.375a5.375 5.375 0 000 10.75H9.25a.75.75 0 000-1.5H6.375a3.875 3.875 0 010-7.75h10.003l-4.146 3.957a.75.75 0 001.036 1.085l5.5-5.25a.75.75 0 000-1.085l-5.5-5.25a.75.75 0 00-1.06.025z" clip-rule="evenodd" />
                    </svg>
                    <span>Log In</span>
                  </button>
                </div>
              </form>
            </div>
            <div class="grow bg-gray-50 p-5 text-center text-sm dark:bg-gray-700/50 md:px-16">
              Belum melakukan pendaftaran?
              <a href="https://smkn2magelang.tech/#pendaftaran" class="font-medium text-blue-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-300">Daftar</a>
            </div>
          </div>
          <!-- END Sign In Form -->

          <!-- Footer -->
          <div class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
            Powered by
            <a href="javascript:void(0)" class="font-medium text-blue-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-300">Laravel Team</a>
          </div>
          <!-- END Footer -->
        </section>
        <!-- END Sign In Section -->
      </div>
    </main>
    <!-- END Page Content -->
  </div>
  <!-- END Page Container -->
  <!-- END Pages: Sign In: Boxed -->

</body>

</html>
