import React from 'react';

import HomeLayout from "@/Layouts/HomeLayout";
import {InertiaLink, usePage} from "@inertiajs/inertia-react";
import {
    CheckCircleIcon,
    CreditCardIcon,
    CurrencyRupeeIcon,
    CursorClickIcon,
    EyeOffIcon,
    GlobeAltIcon,
    PresentationChartLineIcon,
    SpeakerphoneIcon,
    TrendingUpIcon
} from "@heroicons/react/outline";

import Hero from "@/Components/Hero";
import Feature from "@/Components/Feature";
import ShopCard from "@/Components/ShopCard";

const Home = ({featuredStores}) => {
    const {assetUrl} = usePage().props
    return (
        <HomeLayout>
            <section className="bg-no-repeat bg-auto md:bg-auto bg-top"
                     style={{backgroundImage: `url("${assetUrl}/assets/images/hero-bg.png")`}}>
                <div className="max-w-6xl mx-auto px-4 pb-8 sm:pb-0 sm:px-6 lg:px-8">
                    <div className="sm:min-h-screen flex items-center justify-center lg:justify-between">
                        <Hero/>
                    </div>
                </div>
            </section>
            <section className="py-24 bg-gradient-to-b from-white to-emerald-500 ">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="lg:text-center">
                        <p className="text-base leading-6 bg-clip-text text-transparent bg-gradient-to-r from-fuchsia-500 to-purple-600 font-semibold tracking-wide uppercase">
                            Sikkim Store
                        </p>

                        <h3 className="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-green-700 sm:text-4xl sm:leading-10">
                            A better way to sell online
                        </h3>

                        <p className="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 lg:mx-auto">
                            Sikkim's e-commerce store. Multi-vendor, Multi-tenant.
                            No commissions and no hidden charges.
                            Empowering local shops and sellers.
                        </p>
                    </div>

                    <div
                        className="mt-20 md:mt-32 grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-12 sm:gap-x-8 md:gap-x-12 md:gap-y-16">
                        <div>
                            <Feature
                                gradient={"from-cyan-400 to-light-blue-500"}
                                icon={<CurrencyRupeeIcon className="h-5 w-5"/>}
                                title={"What you sell is 100% yours."}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        Unlike many other sites, who takes your sales percentage,
                                        the sales that you make are 100% yours. We don’t take any percentage
                                        whatsoever.
                                    </p>
                                }
                            />
                        </div>
                        <div>
                            <Feature
                                gradient={"from-fuchsia-500 to-purple-600"}
                                icon={<EyeOffIcon className="h-5 w-5"/>}
                                title={"No hidden fees."}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        Dont worry, we dont have
                                        <span className="text-red-600 font-medium">T&C</span> or
                                        <span className="text-red-600 font-medium">*</span>
                                        next to our pricing. How much for all these? Just a minimal amount per
                                        month.
                                        All prices are upfront. No hidden charges, no hassle and headache.
                                    </p>
                                }
                            />
                        </div>
                        <div>
                            <Feature
                                gradient={"from-orange-400 to-pink-600"}
                                icon={<GlobeAltIcon className="h-5 w-5"/>}
                                title={"Free Custom Domain."}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        You can can your own domain, e.g.
                                        <span className="text-indigo-600 font-medium">www.myownshop.com</span>.
                                        We will guide you through every step to set up your own personal domain and
                                        use our services.
                                    </p>
                                }
                            />
                        </div>
                        <div>
                            <Feature
                                gradient={"from-green-400 to-cyan-500"}
                                icon={<TrendingUpIcon className="h-5 w-5"/>}
                                title={"Scalability? No worries."}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        You don’t have to worry about scalability, or downtime ever.
                                        Our system runs on the latest technology and software stack that handles
                                        scaling like a breeze. You just sell, let us worry about the techs, we are
                                        nerds.
                                    </p>
                                }
                            />
                        </div>
                        <div>
                            <Feature
                                gradient={"from-purple-500 to-indigo-500"}
                                icon={<PresentationChartLineIcon className="h-5 w-5"/>}
                                title={"Admin Dashboard"}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        Your store comes with a highly sophisticated admin dashboard.
                                        Easy product update, add, or delete.
                                        Shop performance with beautiful graphical representation.
                                        See all your order details and sell progress and many more.
                                    </p>
                                }
                            />
                        </div>
                        <div>
                            <Feature
                                gradient={"from-yellow-400 to-orange-500"}
                                icon={<CursorClickIcon className="h-5 w-5"/>}
                                title={"Your site is yours, completely."}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        Your site, be that free subdomain or your own domain, you have complete
                                        freedom to customise it, including logo and even colour schemes. Your own
                                        terms and conditions, and footer as well.
                                    </p>
                                }
                            />
                        </div>
                        <div>
                            <Feature
                                gradient={"from-light-blue-400 to-indigo-500"}
                                icon={<CreditCardIcon className="h-5 w-5"/>}
                                title={"Payment Gateway."}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        To make it even better, we will set up your own payment
                                        gateway integration upon signup with Razorpay.
                                        All the transactions straight from and to your bank account.
                                    </p>
                                }
                            />
                        </div>
                        <div>
                            <Feature
                                gradient={"from-pink-500 to-rose-500"}
                                icon={<CheckCircleIcon className="h-5 w-5"/>}
                                title={"Everything’s included."}
                                description={
                                    <p className="mt-2 text-sm text-gray-500">
                                        We take care of everything – from hosting to maintaining it.
                                        That’s upgrades, updates, bug fixes, and any third-party changes.
                                        You sell, let us handle the tech.
                                    </p>
                                }
                            />
                        </div>
                    </div>
                </div>
            </section>

            <section className="py-24 hero-pattern-diamond">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="lg:text-center">
                        <p className="text-base leading-6 bg-clip-text text-transparent bg-gradient-to-r from-fuchsia-500 to-purple-600 font-semibold tracking-wide uppercase">
                            Reserve your store name now!
                        </p>
                        <h3 className="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-green-700 sm:text-4xl sm:leading-10">
                            Success starts with a click.
                        </h3>
                        <p className="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 lg:mx-auto">
                            Online store makes 3 times more sales than average shops. And e-commerce sales are
                            growing 46% year-on-year*. For a lot of businesses, building an online store has gone
                            from nice-to-have to utterly essential, overnight.
                        </p>
                    </div>

                    <div className="mt-6 md:mt-8">
                        <InertiaLink href={''}
                                     className="mx-auto block w-full md:w-64 px-5 py-3 btn btn-success text-sm uppercase">
                            Register Now.
                        </InertiaLink>
                    </div>
                </div>
            </section>

            <section className="relative py-24 bg-gradient-to-tr from-blue-600 to-green-600">
                <div className="absolute inset-0 bg-white bg-opacity-90"/>
                <div className="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="lg:text-center mb-12">
                        <p className="text-base leading-6 bg-clip-text text-transparent bg-gradient-to-r from-fuchsia-500 to-purple-600 font-semibold tracking-wide uppercase">
                            SHOPS
                        </p>
                        <h3 className="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-green-700 sm:text-4xl sm:leading-10">
                            Featured Shops
                        </h3>
                        <p className="mt-4 max-w-2xl text-sm sm:text-base text-gray-600 lg:mx-auto">
                            Browse through the best shops at Sikkim Store.
                        </p>
                    </div>
                    <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        {featuredStores.map(store => <ShopCard store={store}/>)}
                    </div>
                </div>
            </section>

            <section>
                <div className="bg-green-700">
                    <div className="max-w-6xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                        <div className="flex flex-col md:flex-row md:items-center justify-between flex-wrap">
                            <div className="flex-1 flex items-center">
                                <div className="flex p-2 rounded-lg bg-green-800">
                                    <SpeakerphoneIcon className="h-6 w-6 text-white"/>
                                </div>
                                <div className="ml-3 font-medium text-white truncate">
                                    <p className="md:hidden">Need Help?</p>
                                    <p className="hidden md:inline">Need Help? Or more information!</p>
                                </div>
                            </div>
                            <div className="order-2 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                                <InertiaLink href={''}
                                             className="flex items-center justify-center px-4 py-3 border border-transparent rounded-md shadow-sm text-sm font-medium text-green-700 bg-gray-100 hover:bg-green-50 transform btn-scale transition ease-in-out">
                                    Support
                                </InertiaLink>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </HomeLayout>
    )
}

export default Home;
