import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Services from "./Services";
import Contact from "./Contact";
import About from "./About";
import Home from "./Home";

function App() {
    return (
        <div>
            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<Home />} />
                    <Route path="services" element={<Services />} />
                    <Route path="contact" element={<Contact />} />
                    <Route path="about" element={<About />} />
                </Routes>
            </BrowserRouter>
        </div>
    );
}

export default App;
