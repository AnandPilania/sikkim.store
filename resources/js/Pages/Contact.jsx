import HomeLayout from "@/Layouts/HomeLayout";
import {useForm, usePage} from "@inertiajs/inertia-react";
import {Spinner} from "@/CustomIcons";
import {useEffect, useState} from "react";
import {CheckCircleIcon, XIcon} from "@heroicons/react/outline";
import ContactForm from "@/Components/ContactForm";

const Contact = () => {
    const {assetUrl} = usePage().props

    return (
        <HomeLayout>
            <section className="bg-gray-50">
                <div className="pt-12 md:pt-24"/>
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16 md:pb-32">
                    <h1 className="mb-4 md:mb-20 max-w-3xl text-4xl tracking-tight font-extrabold text-green-700 sm:text-5xl md:text-6xl">
                        Get in touch
                    </h1>
                    <div className="flex sm:flex-nowrap flex-wrap">
                        <div className="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mb-8 md:mb-0">
                            <h2 className="text-gray-900 text-lg mb-1 font-semibold">Let's work together.</h2>
                            <p className="leading-relaxed mb-5 text-sm text-gray-600">
                                We would love to hear from you! Send us a message using the form below or email us.
                            </p>
                            <ContactForm/>
                            <p className="text-xs text-gray-500 mt-3">Dont worry, we hate spams as much as you do.</p>
                        </div>
                        <div
                            className="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:ml-10 p-10 flex items-end justify-start relative">
                            <img src={`${assetUrl}/assets/map/location.png`}
                                 className="absolute inset-0 object-cover filter grayscale contrast-125 opacity-60"
                                 width="100%" height="100%"
                                 alt={'Our location'}/>
                            <div className="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                                <div className="lg:w-1/2 px-6">
                                    <h2 className="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                                    <p className="mt-1">
                                        Atcore Tech, Martam Ghaiyabari, Bermiok, West Sikkim
                                    </p>
                                </div>
                                <div className="lg:w-1/2 px-6 mt-4 lg:mt-0">
                                    <h2 className="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                                    <a className="text-green-500 leading-relaxed">info@sikkim.store</a>
                                    <h2 className="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                                    <p className="leading-relaxed">+91 7427990891</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </HomeLayout>
    );
};

export default Contact;
