import Navbar from "./Navbar";

function Database() {
    return (
        <div class="h-screen bg-[#FFFBEB]">
            <Navbar />
            <h1 class="text-center py-40 pb-20 text-6xl font-['Helvetica Neue'] font-semibold bg-[#FFFBEB] text-[#263159]">
                welcome to the DATABASE
            </h1>
            <div class="text-center pb-20">
                <button class="mt-5 rounded-md bg-black px-8 py-2 text-white">
                    <a href="/contact">Add Contact</a>
                </button>
            </div>
            <div class="px-60">
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b font-medium border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">
                                First
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Last
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Handle
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">john</td>
                        </tr>
                        <tr class="border-b border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                        </tr>
                        <tr class="border-b border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">Larry</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    );
}

export default Database;
