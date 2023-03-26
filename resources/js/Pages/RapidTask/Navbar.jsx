/* eslint-disable jsx-a11y/anchor-is-valid */
function Navbar() {
    return (
        <div class="">
            <header class="top-0 z-1000 sticky bg-[#FFFBEB]">
                <nav
                    class="text-center justify-between p-6"
                    aria-label="Global"
                >
                    <div class="space-x-12">
                        <a
                            href="/"
                            class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600"
                        >
                            Home
                        </a>

                        <a
                            href="/about"
                            class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600"
                        >
                            About
                        </a>

                        <a
                            href="/services"
                            class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600"
                        >
                            Services
                        </a>

                        <a
                            href="/contact"
                            class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600"
                        >
                            Contact
                        </a>
                    </div>
                </nav>
            </header>
        </div>
    );
}

export default Navbar;
