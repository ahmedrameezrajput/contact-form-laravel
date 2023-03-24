import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Services from "./Services";
import Contact from "./Contact";
import About from "./About";
import Home from "./Home";

function App() {
    return (
        <div>
            {/* <BrowserRouter>
                <Routes>
                    <Route index element={<Home />} />
                    <Route exact path="/home" element={<Home />} />
                    <Route path="services" element={<Services />} />
                    <Route path="contact" element={<Contact />} />
                    <Route path="about" element={<About />} />
                </Routes>
            </BrowserRouter> */}
            <Home />
        </div>
    );
}

export default App;
