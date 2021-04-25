import Header from "@/Components/Header";
import Footer from "@/Components/Footer";

const HomeLayout = ({children}) => {
    return (
        <>
            <Header/>
            {children}
            <Footer/>
        </>
    );
};

export default HomeLayout;
