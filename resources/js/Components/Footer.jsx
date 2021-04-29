import {InertiaLink} from "@inertiajs/inertia-react";

import {Dark as DarkLogo} from "@/Components/Logo"
import {FacebookIcon, InstagramIcon, PaypalIcon, TwitterIcon, VisaIcon} from "@/Icons";

const Footer = () => {
    return (
        <footer className="footer bg-gray-800 py-16">
            <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
                <div className="grid grid-cols-1 md:grid-cols-2 md:gap-24 md:mb-10">
                    <div className="flex flex-col md:flex-row">
                        <div className="flex-1 flex-col mb-4 md:mb-2">
                            <InertiaLink href={ route('home') } aria-label="Home" className="inline-flex mb-3 md:mb-6">
                                <DarkLogo className="h-6"/>
                            </InertiaLink>
                            <p className="text-xs text-gray-400 mb-8">
                                Sikkim's e-commerce store. Multi-vendor, Multi-tenant, No commissions and no
                                hidden charges. Empowering local shops and sellers.
                            </p>
                            <div className="text-base font-normal tracking-wider uppercase text-gray-400 mb-3">
                                Important Links
                            </div>
                            <div className="flex flex-col lg:flex-row text-xs font-medium tracking-wide text-gray-300 space-y-2 lg:space-y-0 lg:space-x-2 mb-8">
                                <a href="#" aria-label="Terms of Use"
                                   className="hover:text-green-600 transition ease-in-out duration-150">
                                    Terms of Use
                                </a>
                                <a href="#" aria-label="Privacy Policy"
                                   className="hover:text-green-600 transition ease-in-out duration-150">
                                    Privacy Policy
                                </a>
                                <a href="#" aria-label="Guides"
                                   className="hover:text-green-600 transition ease-in-out duration-150">
                                    FAQs
                                </a>
                            </div>
                        </div>

                        <div className="flex flex-col md:ml-10 mb-10 md:mb-0">
                            <div
                                className="text-base font-normal tracking-wider uppercase text-gray-400 mb-3 md:mb-6">
                                Get Help
                            </div>

                            <div
                                className="text-xs font-medium tracking-wide text-gray-300 flex space-y-2 mb-4 flex-col">
                                <a href="#" aria-label="Order Status"
                                   className="w-max-content hover:text-green-600 transition ease-in-out duration-150">
                                    Blog</a>
                                <a href="#" aria-label="Shipping And Delivery"
                                   className="w-max-content hover:text-green-600 transition ease-in-out duration-150">
                                    Help Center</a>
                                <a href="#" aria-label="Payment Options"
                                   className="w-max-content hover:text-green-600 transition ease-in-out duration-150">
                                    Banned Items</a>
                                <a href="#" aria-label="Contact Us"
                                   className="w-max-content hover:text-green-600 transition ease-in-out duration-150">
                                    Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div className="flex flex-col md:flex-row">
                        <div className="flex flex-col md:ml-8 lg:ml-16 mb-10 md:mb-0">
                            <div
                                className="font-bodyFont text-base font-normal tracking-wider uppercase text-gray-400 mb-3 md:mb-6">
                                About Us
                            </div>
                            <div
                                className="text-xs font-medium tracking-wide text-gray-300 flex space-y-2 mb-4 flex-col">
                                <a href="#" aria-label="Careers"
                                   className="hover:text-green-600 transition ease-in-out duration-150">Careers</a>
                                <a href="#" aria-label="Sustainability"
                                   className="hover:text-green-600 transition ease-in-out duration-150">Media Kit</a>
                                <a href="#" aria-label="Services"
                                   className="hover:text-green-600 transition ease-in-out duration-150">Press Inquiry</a>
                                <a href="#" className="hover:text-green-600 transition ease-in-out duration-150">Legal</a>
                            </div>
                        </div>
                        <div className="flex-1 flex-col mb-2 md:text-right">
                            <div
                                className="font-bodyFont text-base font-normal tracking-wider uppercase text-gray-400 mb-3 md:mb-6">
                                Get Social
                            </div>
                            <div
                                className="font-bodyFont text-base font-normal tracking-wider uppercase text-gray-200 mb-10 flex items-center md:justify-end space-x-4">
                                <a className="bg-gray-700 hover:bg-gray-200 p-1.5 rounded-md transition ease-in-out duration-200"
                                   href="https://www.facebook.com/sikkim.store" aria-label="Facebook" target="_blank"
                                   rel="noreferrer">
                                    <FacebookIcon className="w-5 h-5 transform hover:scale-110 transition ease-in-out duration-150"/>
                                </a>

                                <a className="bg-gray-700 hover:bg-gray-200 p-1.5 rounded-md transition ease-in-out duration-200"
                                   href="#" aria-label="Twitter" target="_blank" rel="noreferrer">
                                    <TwitterIcon className="w-5 h-5 transform hover:scale-110 transition ease-in-out duration-150"/>
                                </a>

                                <a className="bg-gray-700 hover:bg-gray-200 p-1.5 rounded-md transition ease-in-out duration-200"
                                   href="https://www.instagram.com/sikkim.store/" aria-label="Instagram" target="_blank"
                                   rel="noreferrer">
                                    <InstagramIcon className="w-5 h-5 transform hover:scale-110 transition ease-in-out duration-150"/>
                                </a>
                            </div>

                            <div className="text-xs text-gray-400">Payment Methods</div>

                            <div className="text-xs font-medium tracking-normal text-gray-300 flex md:justify-end items-center space-x-2 mb-4">

                                <PaypalIcon className="h-7 text-green-500"/>

                                <VisaIcon className="h-9 text-green-500"/>

                                <div className="italic text-green-500 font-bold font-titleFont tracking-widest">
                                    COD
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="text-xs text-gray-400">
                    <p>Atcore Tech (OPC) &copy; 2020 - 2021. All rights reserved.</p>
                </div>
            </div>
        </footer>
    );
};

export default Footer;
