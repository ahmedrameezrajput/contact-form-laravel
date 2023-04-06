<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="h-screen bg-[#FFFBEB]">
        <header class="top-0 z-1000 sticky bg-[#FFFBEB]">
            <nav class="text-center justify-between p-6" aria-label="Global">
                <div class="space-x-12">
                    <a href="/" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                        Home
                    </a>

                    <a href="/about" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                        About
                    </a>

                    <a href="/services" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                        Services
                    </a>

                    <a href="/contact" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                        Contact
                    </a>

                    <a href="/database" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                        Database
                    </a>
                </div>
            </nav>
        </header>
        <h1 class="text-center py-40 pb-20 text-6xl font-['Helvetica Neue'] font-semibold bg-[#FFFBEB] text-[#263159]">
            welcome to the DATABASE
        </h1>
        <div>
            <div class="flex items-center justify-start bg-[#FFFBEB]">
                <div class="mx-auto w-full max-w-lg">
                    <form action="{{ route('editContact', ['id' => $contact->id]) }}" method="POST" class="mt-15">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="relative z-0">
                                <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-4 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" id="name" required value="{{ $contact->name }}" />
                                <label class="absolute top-2 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600" htmlFor="name">
                                    Your name
                                </label>
                            </div>
                            <div class="relative z-0">
                                <input type="text" name="email" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-4 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" id="email" required value="{{ $contact->email }}" />
                                <label class="absolute top-2 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500" htmlFor="email">
                                    Your email
                                </label>
                            </div>
                            <div class="relative z-0 col-span-2">
                                <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-4 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" id="message" required>{{ $contact->message }}</textarea>
                                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500" htmlFor="message">
                                    Your message
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="mt-8 rounded-md bg-[#251749] px-10 py-2 text-[#FFFBEB] hover:bg-[#263159]">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>