import {InertiaLink} from "@inertiajs/inertia-react";

const Hero = () => {
    return (
        <div className="flex items-center justify-center lg:justify-between">
            <div className="w-full md:max-w-2xl mt-32 sm:mt-0">
                <p className="text-4xl sm:text-6xl font-bold text-black tracking-wide">
                    Create your free online store.
                </p>

                <p className="mt-8 text-gray-700 font-medium">
                    Powerful, fast, secure, easy-to-use, multi-tenant e-commerce.
                    Empowering local shops and sellers. Vocal for local.
                </p>

                <p className="text-xs text-gray-500 mt-6 md:mt-8">
                    Reserve your store name before someone takes it.
                </p>

                <InertiaLink href={''} className="mt-2 block w-full md:w-64 btn btn-success px-5 py-3">
                    Get Started
                </InertiaLink>

                <p className="mt-8 text-xs font-light text-gray-500">
                    No credit card required.
                </p>
            </div>

            <div className="hidden lg:block max-w-md">
                <img loading="lazy"
                     height="100%"
                     width="100%"
                     src={config.asset('assets/images/hero_bg.svg')}
                     alt="Hero Image"
                     className="w-full h-full object-cover"/>
            </div>
        </div>
    );
};

export default Hero;
