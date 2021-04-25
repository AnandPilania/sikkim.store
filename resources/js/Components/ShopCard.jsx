import React from 'react';

const ShopCard = ({store}) => {
    return (
        <a href={route('store.home', store.slug)}
           className="p-2 relative bg-gradient-to-tr from-white to-white hover:from-blue-500 hover:to-green-500 group shadow-sm hover:shadow-2xl transform hover:-translate-y-0.5 rounded-md flex items-center justify-between transition ease-in-out duration-200">
            <div className="w-20 sm:w-3/12 h-full p-2 lg:p-4 border-r">
                <img loading="lazy"
                     src={store.logo}
                     className="w-full h-full"
                     alt={store.name}
                     width="100%"
                     height="100%"/>
            </div>
            <div className="flex-1 px-2">
                <p className="text-gray-800 group-hover:text-white text-base">{store.name}</p>
                <p className="text-gray-500 group-hover:text-gray-300 text-xs capitalize">{store.city}, {store.state}</p>
            </div>
        </a>
    )
}

export default ShopCard;
