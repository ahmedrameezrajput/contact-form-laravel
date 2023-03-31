import React, { useState } from "react";
import axios from "axios";

function ContactForm() {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [message, setMessage] = useState("");

    const handleSubmit = (event) => {
        event.preventDefault();

        axios
            .post("/contact", {
                name: name,
                email: email,
                message: message,
            })
            .then((response) => {
                console.log(response.data);
                alert("Form submitted successfully!");
            })
            .catch((error) => {
                console.log(error.response.data);
                alert("Error submitting form!");
            });
    };

    return (
        <div>
            <div class="flex items-center justify-start bg-[#FFFBEB]">
                <div class="mx-auto w-full max-w-lg">
                    <h1 class="text-4xl font-medium">Contact us</h1>
                    <form
                        // method="POST"
                        // action="{{ url('/') }}/contact"
                        onSubmit={handleSubmit}
                        class="mt-10"
                    >
                        <input
                            type="hidden"
                            name="access_key"
                            value="YOUR_ACCESS_KEY_HERE"
                        />
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="relative z-0">
                                <input
                                    type="text"
                                    name="name"
                                    class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                                    placeholder=""
                                    id="name"
                                    required
                                    onChange={(e) => setName(e.target.value)}
                                />
                                <label
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"
                                    htmlFor="name"
                                >
                                    Your name
                                </label>
                            </div>
                            <div class="relative z-0">
                                <input
                                    type="text"
                                    name="email"
                                    class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                                    placeholder=""
                                    id="email"
                                    required
                                    onChange={(e) => setName(e.target.value)}
                                />
                                <label
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"
                                    htmlFor="email"
                                >
                                    Your email
                                </label>
                            </div>
                            <div class="relative z-0 col-span-2">
                                <textarea
                                    name="message"
                                    rows="5"
                                    class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                                    placeholder=""
                                    id="message"
                                    required
                                    onChange={(e) => setName(e.target.value)}
                                ></textarea>
                                <label
                                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"
                                    htmlFor="message"
                                >
                                    Your message
                                </label>
                            </div>
                        </div>
                        <button
                            type="submit"
                            name="submit"
                            class="mt-5 rounded-md bg-black px-10 py-2 text-white"
                        >
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    );
}

export default ContactForm;
