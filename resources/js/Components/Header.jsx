import {useState, useEffect} from 'react';
import {InertiaLink, usePage} from "@inertiajs/inertia-react";

import {Light as LightLogo} from "@/Components/Logo";

const Header = () => {
    const {auth} = usePage().props
    const [isScrollBarAtTop, setIsScrollBarAtTop] = useState(true)
    const [isOpen, setIsOpen] = useState(false)
    const [isDropDownOpen, setIsDropDownOpen] = useState(false)

    useEffect(() => {
        window.addEventListener('scroll', handleScroll);
        return () => window.removeEventListener('scroll', handleScroll);
    })

    const handleScroll = () => setIsScrollBarAtTop((window.pageYOffset <= 20))

    return (
        <header className="fixed top-0 inset-x-0 z-10">
            <nav
                className={`relative ${isScrollBarAtTop ? 'py-3 sm:py-4 md:py-6 bg-white md:bg-transparent' : 'bg-white shadow py-3 sm:py-3 md:py-4'}`}>
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="relative flex items-center justify-between">
                        <div className="flex-1 flex items-center md:space-x-14">

                            <a href={route('home')} title={'Go Home'} aria-label="Go Home Page">
                                <LightLogo className="w-auto h-7" aria-label="Sikkim Store Label"/>
                            </a>

                            <div className="hidden sm:flex items-center space-x-12 text-sm text-gray-500">
                                <InertiaLink href={route('home')}
                                   className={`hidden md:block hover:text-green-600 ${route().current('home') && 'text-green-700 font-medium'} `}>Home</InertiaLink>
                                <a href={route('shop.index')}
                                   className={`hidden md:block hover:text-green-600 ${route().current('shop.index') && 'text-green-700 font-medium'} `}>Shops</a>
                                <a href={''}
                                   className={`hidden md:block hover:text-green-600 ${route().current('contact') && 'text-green-700 font-medium'} `}>Contact</a>
                                <a href={'#'} className="hidden md:block hover:text-green-600">FAQs</a>
                            </div>
                        </div>

                        <div className="md:hidden">
                            <button onClick={() => setIsOpen(!isOpen)}
                                    type="button"
                                    className="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    aria-expanded="false">
                                <span className="sr-only">Open main menu</span>
                                <svg className="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>

                        <div
                            className="hidden absolute inset-y-0 right-0 md:flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                            {auth.user ?
                                <>
                                    <a href={''}
                                       className="text-gray-700 hover:text-green-500 focus:outline-none focus:text-green-500  transition duration-150 ease-in-out">
                                        <svg className="w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                        </svg>
                                    </a>
                                    <div
                                        className="md:pl-4 md:py-2 text-sm font-medium tracking-tight text-gray-700 hidden md:block">
                                        {auth.user.name}
                                    </div>

                                    <div className="ml-3 relative">
                                        <button
                                            className="flex text-sm rounded-full overflow-hidden focus:outline-none  border-white focus:border-indigo-500 transition duration-150 ease-in-out"
                                            onClick={() => setIsDropDownOpen(!isDropDownOpen)}>
                                            <img
                                                className="h-8 w-8 rounded-full object-cover"
                                                src={auth.user.avatar}
                                                alt={auth.user.name}/>
                                        </button>
                                        {
                                            isDropDownOpen &&
                                            <div
                                                className="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg z-20">
                                                <div className="rounded-md bg-white box-shadow">
                                                    <a href={''}
                                                       className="block px-4 py-2 text-sm leading-5 text-gray-700 rounded-t-md hover:bg-green-500 hover:text-white focus:outline-none transition duration-150 ease-in-out">
                                                        Your Profile
                                                    </a>

                                                    <a href={''}
                                                       className="block px-4 py-2 text-sm leading-5 text-gray-700 hover:text-white hover:bg-green-500 focus:outline-none transition duration-150 ease-in-out">
                                                        Track Order
                                                    </a>

                                                    <form method="post" onSubmit={event => event.preventDefault()}>
                                                        <button type="submit"
                                                                className="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-green-500 hover:text-white rounded-b-md focus:outline-none transition duration-150 ease-in-out">
                                                            Sign out
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        }
                                    </div>
                                </>
                                :
                                <div>
                                    <a href={''}
                                       className="btn btn-light transition ease-in-out duration-200 text-gray-600 px-4">Login</a>
                                </div>
                            }
                        </div>
                    </div>
                </div>

                {
                    isOpen &&
                    <div
                        className={`${isOpen ? 'block' : 'hidden'} absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden`}>
                        <div className="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div className="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    <LightLogo className="h-5"/>
                                </div>
                                <div className="-mr-2">
                                    <button onClick={() => setIsOpen(!isOpen)} type="button"
                                            className="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span className="sr-only">Close main menu</span>
                                        <svg className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                             aria-hidden="true">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                                  d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div className="bg-gray-100 rounded-full mx-auto mt-2" style={{height: '1px'}}/>

                            {
                                auth.user &&
                                <>
                                    <div className="px-2 pt-4 pb-3">
                                        <div className="flex items-center px-3">
                                            <div className="flex-shrink-0 mr-3">
                                                <img className="h-10 w-10 rounded-full object-cover"
                                                     src={auth.user.avatar} alt=""/>
                                            </div>

                                            <div>
                                                <div className="text-sm font-semibold text-gray-800">
                                                    {auth.user.name}
                                                </div>
                                                <div className="font-normal text-sm text-gray-500">
                                                    {auth.user.email}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="pb-3 space-y-1">
                                        <div className="relative px-2 border-green-600">
                                            <a href={''}
                                               className="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 @if(request()->routeIs('user.profile')) bg-gray-100 @endif transition ease-in-out">My
                                                Profile
                                            </a>

                                            {
                                                route().current('user.profile') &&
                                                <div
                                                    className="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"/>
                                            }
                                        </div>
                                        <div className="relative px-2 border-green-600">
                                            <a href="#"
                                               className="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition ease-in-out">Track
                                                Order
                                            </a>
                                        </div>

                                    </div>
                                    <div className="bg-gray-100 rounded-full mx-auto mt-2" style={{height: '1px'}}/>
                                </>
                            }
                            <div className="pt-2 pb-3 space-y-1">
                                <div className="relative px-2 border-green-600">
                                    <a href={route('home')}
                                       className={`block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 ${route().current('home') && 'bg-gray-100'} transition ease-in-out`}>Home</a>

                                    {
                                        route().current('home') &&
                                        <div className="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"/>
                                    }
                                </div>
                                <div className="relative px-2 border-green-600">
                                    <a href={route('shop.index')}
                                       className={`block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 ${route().current('shop.index') && 'bg-gray-100'} transition ease-in-out`}>Shops</a>

                                    {
                                        route().current('shop.index') &&
                                        <div className="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"/>
                                    }
                                </div>
                                <div className="relative px-2 border-green-600">
                                    <a href={''}
                                       className={`block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 ${route().current('contact') && 'bg-gray-100'} transition ease-in-out`}>Contact</a>

                                    {
                                        route().current('contact') &&
                                        <div className="absolute left-0 inset-y-0 w-1.5 bg-green-600 rounded-r-md"/>
                                    }

                                </div>
                                <div className="relative px-2 border-green-600">
                                    <a href="#"
                                       className="block px-3 py-3 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition ease-in-out">FAQs</a>
                                </div>

                            </div>
                            <div className="p-2">
                                {auth.user ?
                                    <>
                                        <button
                                            type="submit"
                                            form="logoutForm"
                                            className="block w-full px-5 py-3 text-center font-medium text-green-600 bg-gray-100 hover:bg-gray-200 rounded-md transform btn-scale transition ease-in-out">
                                            Logout
                                        </button>

                                        <form id="logoutForm" action={route('logout')} method="post"
                                              hidden>@csrf
                                        </form>
                                    </>
                                    :
                                    <a href={''}
                                       className="block w-full px-5 py-3 text-center font-medium text-green-600 bg-gray-100 hover:bg-gray-200 rounded-md transform btn-scale transition ease-in-out">
                                        Login
                                    </a>
                                }
                            </div>
                        </div>
                    </div>
                }
            </nav>
        </header>
    )
}

export default Header;
