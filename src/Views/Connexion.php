<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de gestion</title>
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>

    <header class="bg-slate-50 mb-4 ">

        <nav class="flex flex-row justify-between">
            <div>
                <h1 class="text-xl">SIMPLON

                </h1>
            </div>
            <div class="text-base">
                <a href=" http://briefaga/"">Connexion</a>
            </div>


        </nav>

    </header>
    <main>
        <div class=" flex items-center justify-center h-screen">

                    <div class=" w-1/4 bg-slate-50 flex flex-col justify-center p-8 ">
                        <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
                            <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Bienvenue</h2>
                        </div>

                        <div id="loginForm" class"="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                            <div class="space-y-6" action="#" method="POST">
                                <div>
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900" value="passwordLogin">Mot de passe</label>
                                    </div>
                                    <div class="mt-2">
                                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <button onclick="signin()" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Connexion</button>
                                </div>
                                <div id="loginData" >
                                </div>
                            </div>
                        </div>

                    </div>
</div>
                    </main>

</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="../../public/assets/script.js"></script>
/html>