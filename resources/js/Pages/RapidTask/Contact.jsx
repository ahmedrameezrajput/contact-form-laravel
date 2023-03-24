import Navbar from "./Navbar";
import ContactForm from "./ContactForm"

function Contact() {
    return (
        <div class="h-screen bg-[#FFFBEB]">
            <Navbar />
            <h1 class="text-center py-40 text-6xl font-['Helvetica Neue'] font-semibold bg-[#FFFBEB] text-[#263159]">
                welcome to the CONTACT PAGE
            </h1>
            <ContactForm />
        </div>
    );
}

export default Contact;