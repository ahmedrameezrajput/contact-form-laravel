// import Link from "react-router-dom";

function Navbar() {
    return (
        <div>
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

                        <a
                            href="/database"
                            class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600"
                        >
                            Database
                        </a>
                    </div>
                </nav>
            </header>
        </div>
    );
}

export default Navbar;
