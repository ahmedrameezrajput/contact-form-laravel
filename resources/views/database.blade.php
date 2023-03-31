<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>DATABASE</title>
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
        <div class="text-center pb-20">
            <a href="/contact">
                <button class="mt-5 rounded-md bg-[#251749] px-8 py-2 text-[#FFFBEB] hover:bg-[#263159] inline-flex gap-x-4">
                    <svg data-src="https://api.macosicons.com/uploads/add_24px_0e736613cc.svg" id="add" class="icon-image icon-image-24" width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" data-attributes-set="width,height,fill,xmlns" data-rendered="true">
                        <path d="M12 4v16m8-8H4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> Add Contact
                </button>
            </a>
        </div>
        <div class="px-60 pb-20">
            <table class="min-w-full text-left text-sm font-light text-[#263159]">
                <thead class="border-b font-medium border-neutral-500">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Message
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr class="border-b border-neutral-500">
                        <td class="whitespace-nowrap px-6 py-4">
                            {{ $contact->id }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{ $contact->name }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{ $contact->email }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            {{ $contact->message }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <div class="inline-flex gap-4">
                                <a href="{{ route('editContact', ['id' => $contact->id]) }}" class="hover:scale-105">
                                    <svg data-src="https://api.macosicons.com/uploads/pencil_24px_ebf5e0938a.svg" id="pencil" class="icon-image icon-image-24" fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg" data-attributes-set="fill,height,width,xmlns" data-rendered="true">
                                        <g stroke="currentColor" stroke-width="1.5">
                                            <path d="M16.364 4.136c.329-.329.493-.493.657-.603a2 2 0 0 1 2.222 0c.164.11.328.274.657.603.328.328.492.493.602.656a2 2 0 0 1 0 2.223c-.11.163-.274.328-.602.656L9.066 18.505c-.264.265-.397.397-.55.502-.154.105-.325.18-.667.33l-.92.405c-1.986.874-2.98 1.311-3.463.828-.484-.484-.047-1.477.827-3.464l.405-.92c.15-.342.226-.513.33-.666.106-.154.238-.286.503-.55L16.364 4.135z" stroke-linecap="round"></path>
                                            <path d="M13.621 6.843l3.536 3.536"></path>
                                        </g>
                                    </svg>
                                </a>
                                <form action="{{ $contact->delete_url }}" method="POST" id="delete-form-{{ $contact->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="hover:scale-105">
                                        <svg data-src="https://api.macosicons.com/uploads/cross_with_circle_24px_c051aaae02.svg" id="cross-with-circle" class="icon-image icon-image-24" fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg" data-attributes-set="fill,height,width,xmlns" data-rendered="true">
                                            <g stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <path d="M9 9l6 6m0-6l-6 6" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>